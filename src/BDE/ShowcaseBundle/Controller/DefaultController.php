<?php

namespace BDE\ShowcaseBundle\Controller;


use BDE\ShowcaseBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
          
	$content = $this->get("templating")->render("BDEShowcaseBundle:Default:index.html.twig");
	return new Response($content);
    }
	
	public function associationsAction(Request $req){
		$content = $this->get("templating")->render("BDEShowcaseBundle:Default:associations.html.twig");
		return new Response($content);
	}
	
	public function contactAction(Request $req){
		$em = $this->getDoctrine()->getManager();
		/*
		$newUser = new User();
		
		$newUser->setMail("asa93@live.fr");
		$newUser->setNom("AIT SI ALI");
		$newUser->setPrenom("Slimane");
		$newUser->setPower(90001);
		$newUser->setPassword("mdp");
		
		
		
		$em->persist($newUser);
		$em->flush();
		*/
		
		$user = $em->getRepository("BDEShowcaseBundle:User")->find(1);
		
		$user->setMail("FATPENISSANGUINOLANTBITCH@BITCHPENISBITCH.frBITCHTASCRUQUOI??");
		$em->persist($user);
		
		
		$em->flush();
		
		$content = $this->get("templating")->render("BDEShowcaseBundle:Default:contact.html.twig");
		return new Response($content);
	}
	
		public function equipeAction(){
		$content = $this->get("templating")->render("BDEShowcaseBundle:Default:equipe.html.twig");
		return new Response($content);
	}
	
}
