<?php

namespace App\Controller;

use App\Manager\ApiManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    public function __construct(
        private readonly ApiManager $apiManager,
    ) {
    }

    #[Route('/', name: 'api_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json($this->apiManager->getStatus());
    }

    #[Route('/health', name: 'api_health', methods: ['GET'])]
    public function health(): JsonResponse
    {
        return $this->json($this->apiManager->getHealth());
    }
}
