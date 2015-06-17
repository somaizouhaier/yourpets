<?php

namespace atn\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use atn\MediaBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Response;

class CommentaireController extends Controller
{
    public function addAction(Request $request)
    {
        $labelle_commentaire = $request->query->get('commentaire');
        $id_user_image = $request->query->get('id_user_image');
        $id_animal = $request->query->get('id_animal');
        $repository_animal = $this->getDoctrine()->getRepository('atnAnimalBundle:Animal');
        $animal = $repository_animal->find($id_animal);
        $repository = $this->getDoctrine()->getRepository('atnMediaBundle:Media');
        $media = $repository->find($id_user_image);
        $commentaire = new Commentaire();
        $commentaire->setLabelle($labelle_commentaire);
        $commentaire->setAnimal($animal);
        $commentaire->setMedia($media);
        $commentaire->setDateCreate(new \Datetime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($commentaire);
        $em->flush();
        return $this->render('atnAnimalBundle:Animal:block_commentaire.html.twig',array('commentaires'=>array($commentaire)));
      //  new Response(json_encode(array('succes' => '1')));
    }
    
     public function moreAction(Request $request)
    {
        $image_id = $request->query->get('image_id');
        $nombre_commentaire = $request->query->get('nombre_commentaire');
        $repository_media = $this->getDoctrine()->getRepository('atnMediaBundle:Media');
        $media = $repository_media->find($image_id);
        $repository_commentaire = $this->getDoctrine()->getRepository('atnMediaBundle:Commentaire');
        $commentaires= $repository_commentaire->getLastCommentairesByMedia($media,$nombre_commentaire);
        
        return $this->render('atnAnimalBundle:Animal:block_commentaire.html.twig',array('commentaires'=>$commentaires, 'nombre_commentaire'=>$nombre_commentaire));
      //  new Response(json_encode(array('succes' => '1')));
    }
}
