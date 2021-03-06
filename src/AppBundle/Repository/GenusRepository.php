<?php
/**
 * Created by PhpStorm.
 * User: romani
 * Date: 12/07/16
 * Time: 15:03
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * @return Genus[]
     */
    public function findAllPublishedOrderedBySize(){

        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished',true)
            ->orderBy('genus.speciesCount','DESC')
            ->getQuery()
            ->execute();

    }

}