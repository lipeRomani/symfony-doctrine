<?php
/**
 * Created by PhpStorm.
 * User: romani
 * Date: 12/07/16
 * Time: 16:44
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixtures implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $genus = new Genus();
        $genus->setName('Octopus'.rand(1, 100));
        $genus->setSubFamily('Octopodinae');
        $genus->setSpeciesCount(rand(100, 99999));
        $manager->persist($genus);
        $manager->flush();
    }
}