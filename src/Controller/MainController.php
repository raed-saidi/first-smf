<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\repository\StarshipRepository;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $repository) : Response
    {
        $starships=$repository->findAll();
        $number=count($starships);
        $myShip = $starships[array_rand($starships)];

        return $this->render('main/homepage.html.twig', [
        'myShip' => $myShip,
        'ships' =>  $starships,
    ]);    }

}

