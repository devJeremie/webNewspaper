<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ArticleController extends AbstractController
{
    
    /**
     * @Route("/api/articles", name="app_articles", methods: {"GET"})
     */
    public function article(ArticleRepository $articleRepo, SerializerInterface $serializer) : JsonResponse { 
        
        $articleList = $articleRepo->findAll();
        $jsonArticleList = $serializer->serialize($articleList, "json");

        return new JsonResponse(
            $jsonArticleList, Response::HTTP_OK, [], true
        );
    }
}
