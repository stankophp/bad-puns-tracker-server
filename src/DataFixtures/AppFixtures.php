<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Factory\MovieFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // create 10 Movies
        MovieFactory::createMany(20);

        $manager->flush();
    }
}
