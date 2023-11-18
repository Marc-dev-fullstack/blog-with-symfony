<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

    #[Route("/articles")]

    public function articles(){

        $articles =[
            "articles" =>[
                "Voiture",
                "Moto",
                "Camion"
            ]
                
        ];
        return $this->render("article.html.twig", $articles);

    }

        #[Route("/articles/{id}")]
    public function article($id){

        $data = [
            "id" => $id
        ];


        return $this->render("article-id.html.twig", $data);

    }


}