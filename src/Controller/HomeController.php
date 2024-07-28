<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, ArticleRepository $articleRepository, PaginatorInterface $pagination): Response
    {
        $articles = $articleRepository->findAll();
        $pagination = $pagination->paginate(
            $articles,
            $request->query->getInt('page', 1),
            9 
        );
        return $this->render('home/index.html.twig', [
            'articles' => $pagination
        ]);
    }
}
