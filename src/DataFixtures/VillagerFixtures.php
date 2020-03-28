<?php

namespace App\DataFixtures;

use App\Entity\Villager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class VillagerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($i=0; $i<20; $i++){
            $villager = (new Villager())
                ->setFirstName($faker->firstName)
                ->setLastName($faker->lastName)
                ->setAge($faker->numberBetween(18, 40))
                ->setImage("https://randomuser.me/api/portraits/{$faker->randomElement(["men", "women"])}/{$faker->numberBetween(1, 99)}.jpg");
            $manager->persist($villager);
        }

        $manager->flush();
    }
}
