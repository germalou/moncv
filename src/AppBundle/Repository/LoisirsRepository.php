<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
    
    /**
     * Loisirs repository.
    */
class LoisirsRepository extends EntityRepository {
     
    public function findAllLoisirs () {
     $qBuilder = $this
     ->getEntityManager()
     ->createQueryBuilder();
         
     $qBuilder->select('l');
     $qBuilder->from('AppBundle:Loisirs', 'l');
     $qBuilder->where('f.name = :myName');
     $qBuilder->setParameter("myName", "toto");
     
     $result = $qBuilder->getQuery()->getResult();
         
     return $result;
         
    }
}