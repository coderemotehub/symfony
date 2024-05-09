<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class PropertyController extends AbstractController
{
    #[Route('/property', name: 'app_property')]
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }

    #[Route('api/properties', name: 'api_properties')]
    public function getProperties(Request $request): Response
    {
        return $this->json(true);
    }

    #[Route('api/property', name: 'create_property', methods: ['POST'])]
    public function createProperty(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->json(true);
    }


}
