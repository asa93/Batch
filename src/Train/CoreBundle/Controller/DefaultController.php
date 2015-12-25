<?php

namespace Train\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Train\CoreBundle\Entity\Voyage;
use Train\CoreBundle\Entity\Voyageur;
use Train\CoreBundle\Entity\Billet;
use Train\CoreBundle\Entity\Entier;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
	public function indexAction(Request $request){
		    $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('batchtrain@gmail.com')
        ->setTo('asa93@live.fr')
        ->setBody('penis'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;
    $this->get('mailer')->send($message);
		$doctrine = $this->getDoctrine();
		$em=$doctrine->getManager();
		$rep = $em->getRepository('TrainCoreBundle:Voyage');
		
		
		        return $this->render('TrainCoreBundle:Default:index.html.twig');
		
		
	}
	public function searchAction(Request $request){
		$doctrine = $this->getDoctrine();
		$em=$doctrine->getManager();
		$rep=$doctrine->getRepository('TrainCoreBundle:Voyage');
		
		$dest = $request->request->get('destination');
		$dep = $request->request->get('depart');
		$voyages = $rep->findBy(array('destination'=>$dest,'depart'=>$dep), array('date'=>'desc'), 10,0);
		
		return $this->render('TrainCoreBundle:Default:search.html.twig',array('voyages'=>$voyages,'destination'=>$dest,
		'depart'=>$dep));
		
	}
    public function inscriptionAction(Request $request)
    {
		$logger = $this->get('logger');
		$doctrine = $this->getDoctrine();
		$em = $doctrine->getManager();
		$rep = $em->getRepository('TrainCoreBundle:Voyage');
		
		
		
		$idVoyage = $request->query->get('id');
		
		$voyage = $rep->find((int)$idVoyage);
		
		$voyageur = new Voyageur();

		   

		if($voyage==null){
			throw new NotFoundHttpException("Désolé mais ce voyage n'existe pas!");
		}
		else{
			$formBuilder = $this->get('form.factory')->createBuilder('form', $voyageur); 
			    $formBuilder
      ->add('nom',      'text')
      ->add('prenom',     'text')
      ->add('email',   'email')
      ->add('age',    'text')
      ->add('enregistrer',      'submit');
	  
	      $form = $formBuilder->getForm();
		  
		  
		  $form->handleRequest($request);
		  
		  if($form->isValid()){
			  //Si le formulaire est valide on crée un billet pour le voyageur
			  //Qu'on ajoute au Voyage
					
					$voyageur->setStatut($voyageur->getAge());

					if($voyage->nbBillets()<$voyage::MAX_BILLETS){
						
						if(!$voyage->findVoyageur($voyageur->getEmail())){
							$em->persist($voyageur);
							$billet = new Billet($voyage,$voyageur);
							$em->persist($billet);
							$em->persist($voyage);
							
							  
							$em->flush();
							 $request->getSession()->getFlashBag()->add('notice', 'Vous êtes enregistré. Il ne reste plus qu\' à attendre le mail de paiement.');	
							 
							 $em->refresh($voyage);
							 //on envoie un mail pour le paiement si on est au complet
							 if($voyage->nbBillets()==$voyage::MAX_BILLETS){
								 $voyage->callVoyageurs();
					
							 }
							 
						}
						else{
							$request->getSession()->getFlashBag()->add('alert','Un voyageur avec cet email est déjà
						enregistré.');
						}

				  }
				  else{
					  $request->getSession()->getFlashBag()->add('alert', 'Le voyage est complet, désolé..');					  
				  }

				  
			  
		  }
		  
		  
		  
		  
		  
		  return $this->render('TrainCoreBundle:Default:inscription.html.twig', array('voyage' => $voyage,'form' => $form->createView()));
		}
		
        
    }

	
	public function adminAction(Request $request){			
				if($this->get('security.context')->isGranted('ROLE_ADMIN')){
					$doctrine=$this->getDoctrine();
					$em=$doctrine->getManager();
					$rep=$em->getRepository('TrainCoreBundle:Voyage');
					
					$voyages=$rep->findAll();
					
					
					return $this->render('TrainCoreBundle:Default:admin.html.twig', array('voyages'=>$voyages));
				}
				    $authenticationUtils = $this->get('security.authentication_utils');
				return $this->render('TrainUserBundle:Default:login.html.twig', array(
				  'last_username' => $authenticationUtils->getLastUsername(),
				  'error'         => $authenticationUtils->getLastAuthenticationError(),
				));
		
				  

	}
	
	public function admin_viewAction(Request $request){
				if($this->get('security.context')->isGranted('ROLE_ADMIN')){
				$idVoyage=$request->query->get('id');
				$rep = $this->getDoctrine()->getManager()->getRepository('TrainCoreBundle:Voyage');
				
				$voyage = $rep->find((int)$idVoyage);
				if(isset($voyage)){
					$billets= $voyage->getBillets();
				}
				else{$billets=null;}
				return $this->render('TrainCoreBundle:Default:admin_view.html.twig',
				array('voyage'=>$voyage, 'billets'=>$billets));
				}
				else{
							$authenticationUtils = $this->get('security.authentication_utils');
						return $this->render('TrainUserBundle:Default:login.html.twig', array(
						  'last_username' => $authenticationUtils->getLastUsername(),
						  'error'         => $authenticationUtils->getLastAuthenticationError(),
						));
		
				}
		
	}
		public function admin_createAction(Request $request){
				if($this->get('security.context')->isGranted('ROLE_ADMIN')){
				$em = $this->getDoctrine()->getManager();
				
				$voyage = new Voyage();
				$formBuilder = $this->get('form.factory')->createBuilder('form', $voyage); 
			    $formBuilder
				  ->add('date',      'datetime')
				  ->add('depart',     'text')
				  ->add('destination',   'text')
				  ->add('prixBambin',    'number')
				  ->add('prixEnfant','number')
				  ->add('prixJeune','number')
				  ->add('prixAdulte','number')
				  ->add('enregistrer','submit');
				  
					  $form = $formBuilder->getForm();
					  
					  
					  $form->handleRequest($request);
						
					if($form->isValid()){
						$em->persist($voyage);
						$em->flush();
						$this->get('session')->getFlashBag()->add('notice','Le voyage est bien enregistré.');						
					}

		
		
		return $this->render('TrainCoreBundle:Default:admin_create.html.twig',array('form'=>$form->createView()));		
		}
				
				
				else{
							$authenticationUtils = $this->get('security.authentication_utils');
						return $this->render('TrainUserBundle:Default:login.html.twig', array(
						  'last_username' => $authenticationUtils->getLastUsername(),
						  'error'         => $authenticationUtils->getLastAuthenticationError(),
						));
		
				}
		
	}
}