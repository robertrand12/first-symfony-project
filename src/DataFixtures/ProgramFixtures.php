<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        ['Olive et Tom', 'des footballeurs qui courent sur un stade de 14km', 'category_Animation'],
        ['Les anneaux de pouvoir', 'bien avant le seigneur des anneaux en terre du milieu', 'category_Fantastique'],
        ['Heroes', 'Des gars avec des pouvoirs', 'category_Action'],
        ['Walkind dead', 'Des zombies envahissent la terre', 'category_Action'],
        ['Dragon ball Z', 'des combats en veux-tu en voilà', 'category_Animation']
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAMS as $array){
            $program = new Program();
            $program->setTitle($array[0]);
            $program->setSynopsis($array[1]);
            $program->setCategory($this->getReference($array[2]));
            $manager->persist($program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}