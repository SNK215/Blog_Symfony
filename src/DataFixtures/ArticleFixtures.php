<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\DataFixtures\Faker\Factory;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");

        //Créer 3 fausses catégories
        for ($i = 1; $i <= 3 ; $i++) { 
            $category = new Category();
            $category->setTitle($faker->sentence())
                     ->setDescription($faker->paragraph());

            $manager->persist($category);

            //Créer 6 articles
            for ($j = 1; $j <= 6; $j++) { 
                $article = new Article();

                $content = "<p>" . join("</p><p>", $faker->paragraphs(5)) . "</p>";


                $article->setTitle($faker->sentence())
                        ->setContent($content)
                        ->setImage("https://picsum.photos/600/250")
                        ->setCreatedAt($faker->dateTimeBetween("-6 months"))
                        ->setCategory($category);
                        
                $manager->persist($article);
            

            //On ajoute des commentaires à l'article
            for ($k = 1; $k <= mt_rand(4, 10) ; $k++) { 
                $comment = new Comment();

                $content = "<p>" . join("</p><p>", $faker->paragraphs(2)) . "</p>";

                $days = (new \DateTime())->diff($article->getCreatedAt())->days;
                $minimum = "-" . $days . " days";

                $comment->setAuthor($faker->name)
                        ->setContent($content)
                        ->setCreatedAt($faker->datetimeBetween($minimum))
                        ->setArticle($article);

                $manager->persist($comment);
                }
            }
        }

        $manager->flush();
    }
}
