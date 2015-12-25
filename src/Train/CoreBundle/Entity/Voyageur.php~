<?php

namespace Train\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyageur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Train\CoreBundle\Entity\VoyageurRepository")
 */
class Voyageur
{	
	 /**
     * @var integer
     */
	 const BAMBIN=10;
	 const ENFANT=20;
	 const JEUNE=30;
	 const ADULTE=40;
	
	

	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

	 /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Voyageur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Voyageur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Voyageur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Voyageur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     * @return Voyageur
     */
    public function setStatut($age)
    {	
		if($age<4){
			$this->statut = Voyageur::BAMBIN;			
		}
		elseif($age<12){
			$this->statut = Voyageur::ENFANT;			
		}
		elseif($age<28){
			$this->statut = Voyageur::JEUNE;			
		}
		else{
			$this->statut = Voyageur::ADULTE;			
		}

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {

        return $this->statut;
    }
	    /**
     * equals
     *
     * 
     */
    public function equals($voyageur2)
    {

        return $this->getEmail()===$voyageur2->getEmail();
    }
}
