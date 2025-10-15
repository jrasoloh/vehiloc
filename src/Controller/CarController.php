<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CarController extends AbstractController
{
    #[Route('/car/{id}', name: 'app_car_show', requirements: ['id' => '\d+'])]
    public function show(Car $car): Response
    {
        return $this->render('car/show.html.twig', [
            'car' => $car,
        ]);
    }

    #[Route('/car/{id}/delete', name: 'app_car_delete', requirements: ['id' => '\d+'])]
    public function delete(int $id, CarRepository $carRepository, EntityManagerInterface $entityManager): Response
    {
        $car = $carRepository->find($id);

        if (!$car) {
            return $this->redirectToRoute('app_home');
        }

        $entityManager->remove($car);
        $entityManager->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/car/add', name: 'app_car_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $car = new Car();

        $form = $this->createForm(CarType::class, $car);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($car);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        // Si le formulaire n'est pas soumis ou n'est pas valide, on l'affiche
        return $this->render('car/add.html.twig', [
            'carForm' => $form->createView(), // On envoie la "vue" du formulaire au template
        ]);
    }
}
