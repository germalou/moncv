<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormationsRepository")
 * @ORM\Table(name="Formations")
 **/
class Formations {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * @ORM\Column(type="string")
     */
    private $lieu;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;
    
    /**
     * @ORM\Column(type="string")
     */
    private $caracteristiques;

 
  public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }
    
      public function getdateDebut() {
        return $this->dateDebut;
    }
    
      public function getLieu() {
        return $this->lieu;
    }
    
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }
    
      public function getdateFin() {
        return $this->dateFin;
    }
    
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }

        public function getcaracteristiques() {
        return $this->caracteristiques;
    }
    
    public function setCaracteristiques($caracteristiques) {
        $this->caracteristiques = $caracteristiques;
    }
}
    
    