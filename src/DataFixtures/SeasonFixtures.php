<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i=0 ; $i<5 ;$i++){
            $season = new Season();
            $season->setProgram($this->getReference('program_Olive et Tom'));
            $season->setNumber($faker->numberBetween(1,10));
            $season->setYear($faker->numberBetween(1985,2023));
            $season->setDescription($faker->text(200));
            $this->addReference('season'.$i.'program_Olive et Tom', $season);
            $manager->persist($season);
        }
        for ($i=0 ; $i<5 ;$i++){
            $season = new Season();
            $season->setProgram($this->getReference('program_Les anneaux de pouvoir'));
            $season->setNumber($faker->numberBetween(1,10));
            $season->setYear($faker->numberBetween(1985,2023));
            $season->setDescription($faker->text(200));
            $this->addReference('season'.$i.'program_Les anneaux de pouvoir', $season);
            $manager->persist($season);
        }
        for ($i=0 ; $i<5 ;$i++){
            $season = new Season();
            $season->setProgram($this->getReference('program_Heroes'));
            $season->setNumber($faker->numberBetween(1,10));
            $season->setYear($faker->numberBetween(1985,2023));
            $season->setDescription($faker->text(200));
            $this->addReference('season'.$i.'program_Heroes', $season);
            $manager->persist($season);
        }
        for ($i=0 ; $i<5 ;$i++){
            $season = new Season();
            $season->setProgram($this->getReference('program_Walkind dead'));
            $season->setNumber($faker->numberBetween(1,10));
            $season->setYear($faker->numberBetween(1985,2023));
            $season->setDescription($faker->text(200));
            $this->addReference('season'.$i.'program_Walkind dead', $season);
            $manager->persist($season);
        }
        for ($i=0 ; $i<5 ;$i++){
            $season = new Season();
            $season->setProgram($this->getReference('program_Dragon ball Z'));
            $season->setNumber($faker->numberBetween(1,10));
            $season->setYear($faker->numberBetween(1985,2023));
            $season->setDescription($faker->text(200));
            $this->addReference('season'.$i.'program_Dragon ball Z', $season);
            $manager->persist($season);
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