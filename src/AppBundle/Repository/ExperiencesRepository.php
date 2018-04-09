<?php

namespace AppBundle\Repository;
 
 use Doctrine\ORM\EntityRepository;
    
    /**
     * Formations repository.
    */
class ExperiencesRepository extends EntityRepository{
     
     public function findAllExperiences () {
     $qBuilder = $this
     ->getEntityManager()
     ->createQueryBuilder();
         
     $qBuilder->select('e');
     $qBuilder->from('AppBundle:Experiences', 'e');
     $qBuilder->where('f.name = :myName');
     $qBuilder->setParameter("myName", "toto");
         
     $result = $qBuilder->getQuery()->getResult();
         
     return $result;
         
    }
 }