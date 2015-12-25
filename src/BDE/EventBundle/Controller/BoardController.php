<?php

namespace BDE\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class BoardController extends Controller
{
    public function indexAction(Request $request)
    {
		
		
	$session = $request->getSession();
	
	$session->set('user', 'longDUSEXE');
	$url = $this->get('router')->generate('bde_event_homepage');
     $content = $this->get("templating")->render('BDEEventBundle:Board:index.html.twig', array('name' =>'PENIS'));
	   
	   
	return new Response($content);
	}
}
