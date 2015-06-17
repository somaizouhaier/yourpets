<?php

namespace atn\AnimalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use atn\AnimalBundle\Entity\Animal;
use Symfony\Component\HttpFoundation\Request;
use atn\AnimalBundle\Form\AddAnimalFormType;
use Symfony\Component\HttpFoundation\Response;

class AnimalController extends Controller {

    public function indexAction() {
        return $this->render('atnAnimalBundle:Animal:index.html.twig');
    }

    public function listAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        
        $repository = $this->getDoctrine()->getRepository('atnAnimalBundle:Animal');
        $animals = $repository->findBy(array('user' => $user));
        return $this->render('atnAnimalBundle:Animal:list.html.twig', array('animals' => $animals));
    }

    public function getRaceAction(Request $request) {
        // var_dump(realpath(dirname(__FILE__)));exit;
        $id_type = $request->query->get('id_type');
        $repository = $this->getDoctrine()->getRepository('atnAnimalBundle:RaceAnimal');
        $query = $repository->createQueryBuilder('p')
                ->select('p.id,p.labelle, p.image')
                ->where('p.id_type = :id_type')
                ->setParameter('id_type', $id_type)
                ->getQuery();

        $products = $query->getResult();

        return new Response(json_encode(array('type' => $products)));
    }

    public function addAction(Request $request) {
        $animal = new Animal();
        $form = $this->createForm(new AddAnimalFormType(), $animal);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $nomFichier = sha1(uniqid(mt_rand(), true)) . '.' . $animal->file->guessExtension();
            $animal->file->move($animal->getUploadRootDir(), $nomFichier);

            $media = new \atn\MediaBundle\Entity\Media();
            $media->setHref($animal->getUploadDir() . '/' . $nomFichier);
            $media->setAlt('chay');
            $animal->setImageProfile($media);

            $user = $this->get('security.context')->getToken()->getUser();
            $animal->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->persist($animal);
            $em->flush();
           
            return $this->redirect($this->generateUrl('atn_amimal_list'));
        }
        return $this->render('atnAnimalBundle:Animal:add.html.twig', array('form' => $form->createView()));
    }
    public function ProfilAction(Animal $animal) {
        $session = $this->get('session');
        
        $session->set('animalConnected', $animal);
        $repository_media = $this->getDoctrine()->getRepository('atnMediaBundle:Media');
        $query = $repository_media->createQueryBuilder('m')
                ->setMaxResults(10)
                ->orderBy('m.dateCreate', 'ASC')
                ->getQuery();

        $medias = $query->getResult();
        $repository_commentaire = $this->getDoctrine()->getRepository('atnMediaBundle:Commentaire');
        $commentaires = array();
      
        foreach ($medias as $media) {
             $commentaires[$media->getId()]= $repository_commentaire->getLastCommentairesByMedia($media);
        }
        
        $form = $this->createForm(new \atn\MediaBundle\Form\addImageFormType(), new \atn\MediaBundle\Entity\Media());
       //dump($commentaires);exit;
        return $this->render('atnAnimalBundle:Animal:profil.html.twig', array('medias' => $medias, 'animal' => $animal,'commentaires' => $commentaires,'form' => $form->createView()));
    }

}
