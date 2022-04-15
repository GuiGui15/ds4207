<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TacheController extends AbstractController
{
    /**
     * @Route("/tache", name="add_tache")
     */
    public function index(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }

    /**
     * @Route("/ListeTaches", name="liste")
     */
    public function ListeTaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/tache", name="add_tache")
     */
    public function taches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/suprtaches", name="suppr")
     */
    public function suprtaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/creertaches", name="creer")
     */
    public function creertaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
    /**
     * @Route("/inserttaches", name="insert")
     */
    public function insertaches(): Response
    {
        return $this->render('tache/index.html.twig', [
            'controller_name' => 'TacheController',
        ]);
    }
}
