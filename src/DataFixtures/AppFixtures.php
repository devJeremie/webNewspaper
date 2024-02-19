<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create("fr_FR");
        
        for ($i=0 ; $i < 20 ; $i++) {

        $article = new Article();
        $article ->setTitle($faker->text(5))
                 ->setCoverText($faker->sentence(30));
        $manager->persist($article);
        $manager->flush();
        }
    }
}