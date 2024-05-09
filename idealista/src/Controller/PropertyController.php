<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Property;
use App\Repository\PropertyRepository;


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
    public function getProperties(Request $request, PropertyRepository $repository): Response
    {
        $properties = $repository->findAll();
        return $this->json($properties);
    }

    #[Route('api/property/{id}', name: 'api_property')]
    public function getProperty(PropertyRepository $repository, int $id): Response
    {
        $property = $repository->find($id);
        return $this->json($property);
    }

    #[Route('api/property', name: 'create_property', methods: ['POST'])]
    public function createProperty(Request $request, EntityManagerInterface $entityManager): Response
    {
        $property = new Property();

        $data = json_decode($request->getContent(), true);
        
        $property->setType($data['type']);
        $property->setSqtm($data['sqtm']);
        $property->setRoomn($data['roomn']);
        $property->setBathn($data['bathn']);
        $property->setDir($data['dir']);
        $property->setLatlon($data['latlon']);
        $property->setPrice($data['price']);

        $entityManager->persist($property);
        $entityManager->flush();

        return $this->json($property, Response::HTTP_CREATED);
    }

}
