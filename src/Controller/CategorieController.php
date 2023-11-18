<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController {

    #[Route("/categories")]

    public function categories(){
        $categories =[
            "categories" =>[
                "Vehicule",
                "poid lourd",
                "lege"
            ]
                
        ];
        return $this->render("categorie.html.twig", $categories);

    }

    #[Route("/categorie/{id}")]

    public function categorieById($id){

        $data = [
            "id" => $id
        ];

        return $this->render("categorie-id.html.twig", $data);

    }


}
