<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MealRepository;


class RecettesListesController extends AbstractController
{

    protected MealRepository $repository;

    public function __construct(MealRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @Route("/recettes/listes", name="recettes")
     */
    public function list(): Response
    {

        $meals = $this->repository->findAll();

        return $this->render('recettes_listes/liste.html.twig', [
            'meals' => $meals,
        ]);
    }
}
