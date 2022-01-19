<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class DefaultController extends AbstractController
{
    /**
     * @Route("/default/", name="default_index")
     */
    public function index(): Response
    {
        return $this->render('Default/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/program/list/{page}", name="program_list")
     */
    public function list(int $page = 1): Response
    {
        return $this->render('program/list.html.twig', ['page' => $page]);
    }
}
