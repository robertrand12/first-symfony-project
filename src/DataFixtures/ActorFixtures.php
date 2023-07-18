<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
// use App\Repository\ProgramRepository;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    // public function __construct(
    //     private ProgramRepository $programRepository
    // ){

    // }
    
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0 ; $i < 10 ; $i++) {
            $actor = new Actor();
            $actor->setName($faker->name());
            $actor->addProgram($this->getReference('program_Olive et Tom'));
            $manager->persist($actor);
        }
       
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          ProgramFixtures::class,
        ];
    }


}