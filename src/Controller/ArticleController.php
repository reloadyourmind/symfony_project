<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {
    	$em = $this->getDoctrine()->getManager();
    	$articles = $em->getRepository(Article::class)->findAll;
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles
        ]);
    }
    /**
     * @Route("/article/single/{article}", name="single_article")
     */
}
