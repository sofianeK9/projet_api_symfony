<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ArticleController extends AbstractController
{
    #[Route('/article/{slug}-{id}', name: 'article_detail', requirements: ['id' => '\d+', 'slug' => '[a-z0-9-]+'])]
    public function show(Request $request, ArticleRepository $repository, int $id, string $slug): Response
    {

        $article = $repository->find($id);

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
