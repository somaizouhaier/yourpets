<?php

namespace atn\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use atn\MediaBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Response;
use atn\MediaBundle\Entity\Media;

class MediaController extends Controller {

    public function addAction(Request $request) {
        $image = new Media();
        $session = $this->get('session');
        $form = $this->createForm(new \atn\MediaBundle\Form\addImageFormType(), $image);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $nomFichier = sha1(uniqid(mt_rand(), true)) . '.' . $image->file->guessExtension();
            $image->file->move($image->getUploadRootDir(), $nomFichier);
            
            $media = new Media();
            $media->setHref($image->getUploadDir() . '/' . $nomFichier);
            $media->setAlt('chay');
            $media->setAnimal($session->get('animalConnected'));
            $em = $this->getDoctrine()->getManager();
            
            $em->merge($media);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('atn_amimal_profil', array('id' => $session->get('animalConnected')->getId())));
    }
    public function moreAction(Request $request) {
        $session = $this->get('session');
        
        $offset = $request->query->get('offset');
        $repository_media = $this->getDoctrine()->getRepository('atnMediaBundle:Media');
        $query = $repository_media->createQueryBuilder('m')
                ->where('m.animal != null')
                ->setMaxResults(10)
                ->orderBy('m.dateCreate', 'ASC')
                ->getQuery();

        $medias = $query->getResult();
        $repository_commentaire = $this->getDoctrine()->getRepository('atnMediaBundle:Commentaire');
        $commentaires = array();
      
        foreach ($medias as $media) {
             $commentaires[$media->getId()]= $repository_commentaire->getLastCommentairesByMedia($media);
        }
         return $this->render('atnAnimalBundle:Animal:block_commentaire.html.twig', array('medias' => $medias, 'animal' => $session->get('animalConnected'),'commentaires' => $commentaires));
    }

}
