<?php

namespace BDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BDEEventBundle:Default:index.html.twig', array('name' => $name));
    }
}
