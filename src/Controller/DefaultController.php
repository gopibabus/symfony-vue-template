<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/vue-test", name="vuejs-test")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('default/welcome.html.twig', [
            'message' => 'Default Controller',
        ]);
    }

    /**
     * @Route("/", name="default")
     * @return Response
     */
    public function test(): Response
    {
        return $this->render('default/index.html.twig', [
            'message' => 'VueController',
        ]);
    }
}
