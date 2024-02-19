<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    
    /**
     * @Route("/api/articles", name="app_articles", methods: {"GET"})
     */
    public function article(ArticleRepository $articleRepo) : JsonResponse { 

        $articles = $articleRepo->findAll();

        return $this->json ([
            'articles' => $articles
        ]);

        

        /* public function article(): Response
    {
    
        /*return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);*/
        
   // }
    }
}
