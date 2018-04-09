<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
    
    /**
     * Formations repository.
    */
class FormationsRepository extends EntityRepository {
     
    public function findAllFormations() {
     $qBuilder = $this
     ->getEntityManager()
     ->createQueryBuilder();
     
     $qBuilder->select('f');
     $qBuilder->from('AppBundle:Formations', 'f');
     $qBuilder->where('f.name = :myName');
     $qBuilder->setParameter("myName", "toto");
     
     $result = $qBuilder->getQuery()->getResult();
     
     return $result;
     
    }
}