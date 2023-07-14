<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season0program_Olive et Tom'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season1program_Olive et Tom'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season2program_Olive et Tom'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season3program_Olive et Tom'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season4program_Olive et Tom'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season0program_Les anneaux de pouvoir'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season1program_Les anneaux de pouvoir'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season2program_Les anneaux de pouvoir'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season3program_Les anneaux de pouvoir'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season4program_Les anneaux de pouvoir'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season0program_Heroes'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season1program_Heroes'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season2program_Heroes'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season3program_Heroes'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season4program_Heroes'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season0program_Walkind dead'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season1program_Walkind dead'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season2program_Walkind dead'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season3program_Walkind dead'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season4program_Walkind dead'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season0program_Dragon ball Z'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season1program_Dragon ball Z'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season2program_Dragon ball Z'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season3program_Dragon ball Z'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
        for ($i=0 ; $i < 10 ; $i++){
            $episode = new Episode();
            $episode->setSeason($this->getReference('season4program_Dragon ball Z'));
            $episode->setTitle($faker->text(255));
            $episode->setNumber($faker->numberBetween(1,20));
            $episode->setSynopsis($faker->paragraphs(2,true));
            $manager->persist($episode);
        }
       
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          SeasonFixtures::class,
        ];
    }


}