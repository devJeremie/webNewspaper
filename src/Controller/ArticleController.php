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
     * @Route("/article", name="app_article", methods: {"GET"})
     */
    public function article() : Response { 


        return $this->json ([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ArticleController.php',
        ]);

        

        /* public function article(): Response
    {
    
        /*return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);*/
        
   // }
    }
}
