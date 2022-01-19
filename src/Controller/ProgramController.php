<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    /**
     * Correspond à la route /program/ et au name "program_index"
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * Route("/program/list/{page<\d+>}", name="program_list")
     */
    public function list(int $page): Response
    {
        return $this->render('program/list.html.twig', ['page' => $page]);
    }
    /**
     * Correspond à la route /program/new et au name "program_new"
     * @Route("/new", name="new")
     */
    public function new(): Response
    {
        // traitement d'un formulaire par exemple

        // redirection vers la page 'program_show',
        // correspondant à l'url /program/4
        return $this->redirectToRoute('program_show', ['id' => 4]);
    }
     /**
      *@Route("/program/{id}", methods={"POST"}, name="program_show")
       */
     public function show()
     {

         return $this->render('program/show.html.twig', ['id' => 4]);
     }
}
