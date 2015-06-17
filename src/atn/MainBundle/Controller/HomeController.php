<?php

namespace atn\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('atnMainBundle:Home:index.html.twig', array());
    }
}
