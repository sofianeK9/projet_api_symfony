<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        return $this->json($articles, 200, [], [
            'groups' => ['article.index']
        ]);
    }
}
