<?php
namespace App\Controller;
use  App\Controller\model\Starship;
use App\repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/api/starships',methods:['GET'])]
class StarShipController extends AbstractController
{
    #[Route('',methods:['GET'])]
    public function getCollection(StarshipRepository $repository): Response
    {

        $starships=$repository->findAll();

        return $this->json($starships);
    }
    #[Route('/{id<\d+>}',methods:['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starships=$repository->findAll();
        return $this->json($starships[$id-1]);

    }


}