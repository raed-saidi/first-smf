<?php

namespace App\repository;

use App\Controller\model\starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info("collection fetched");
   return $starships = [
    new Starship(
                    1,
                    'USS LeafyCruiser (NCC-0001)',
                    'Garden',
                    'Jean-Luc Pickles',
                    'taken over by Q'
                    ),
    new Starship(
                2,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick!',
                'repaired'
                ),
    new Starship(
                3,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                'under construction'
                ),
    ];}

}