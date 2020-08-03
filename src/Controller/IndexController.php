<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/hello-word", name="hello-word", methods={"GET"})
     * @return Response
     */
    public function indexAction()
    {
       return $this->render("base.html.twig", ['message' => 'Oi Mundo.']);
    }

}