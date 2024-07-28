<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Util\Slugger;
use DateTimeImmutable;
use App\Entity\Article;
use Faker\Factory as FakerFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class TestFixtures extends Fixture implements FixtureGroupInterface
{
    private $faker;
    private $hasher;
    private $manager;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->faker = FakerFactory::create('fr_FR');
        $this->hasher = $hasher;
    }

    public static function getGroups(): array
    {
        return ['test'];
    }

    public function load(ObjectManager $manager): void
    {
        $this->manager = $manager;
        $this->loadArticles();
        $this->loadUser();
    }

    public function loadArticles()
    {
        $datas = [
            [
                'nom' => "Le développement web",
                'summary' => 'Les bases du développement web. Le développement web inclut la création de sites web et d\'applications pour Internet.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.',
                'createdAt' => '2024-07-23',
                'updatedAt' => '2024-08-25',
                'slug' => 'developpement-web'
            ]
        ];

        foreach ($datas as $data) {
            $article = new Article();
            $article->setNom($data['nom']);
            $article->setSummary($data['summary']);
            $article->setContent($data['content']);
            $createdAt = new DateTimeImmutable($data['createdAt']);
            $updatedAt = new DateTimeImmutable($data['updatedAt']);
            $article->setCreatedAt($createdAt);
            $article->setUpdatedAt($updatedAt);
            $article->setSlug($data['slug']);

            $this->manager->persist($article);
        }

        for ($i = 0; $i < 1000; $i++) {
            $article = new Article();

            $nom = $this->faker->words(random_int(1, 3), true);
            $article->setNom($nom);

            $summary = $this->faker->unique()->sentence(random_int(6, 12));
            $article->setSummary($summary);

            $content = $this->faker->paragraphs(random_int(3, 7), true);
            $article->setContent($content);

            $createdAt = $this->faker->dateTimeThisYear();
            $updatedAt = $this->faker->dateTimeBetween($createdAt, 'now');

            $article->setCreatedAt(DateTimeImmutable::createFromMutable($createdAt));
            $article->setUpdatedAt(DateTimeImmutable::createFromMutable($updatedAt));

            $slug = Slugger::slugify($nom);
            $article->setSlug($slug);

            $this->manager->persist($article);
        }

        $this->manager->flush();
    }

    public function loadUser()
    {
        $datas = [
            [
                'email' => 'test@exemple.com',
                'password' => '123',
                'roles' => ['ROLE_USER'],

            ]
        ];

        foreach ($datas as $data) {
            $user = new User();
            $user->setEmail($data['email']);
            $password = $this->hasher->hashPassword($user, $data['password']);
            $user->setPassword($password);
            $user->setRoles(['ROLE_USER']);

            $this->manager->persist($user);
        }
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setEmail($this->faker->safeEmail());
            $password = $this->hasher->hashPassword($user, '123');
            $user->setPassword($password);
            $user->setRoles(['ROLE_USER']);

            $this->manager->persist($user);
        }
        $this->manager->flush();
    }
}
