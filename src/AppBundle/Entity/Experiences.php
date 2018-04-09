<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperiencesRepository")
 * @ORM\Table(name="Experiences")
 **/
class Experiences {
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
    private $dateDebut;
     /**
     * @ORM\Column(type="date")
     */
    private $dateFin;
     /**
     * @ORM\Column(type="string")
     */
    private $lieu;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
      public function getDateDebut() {
        return $this->dateDebut;
    }
    
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }
    
      public function getDateFin() {
        return $this->dateFin;
    }
    
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }

        public function getLieu() {
        return $this->lieu;
    }
    
    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }
    
    
}