<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TimerController extends AbstractController
{
    public function index(): Response {
        return $this->render('timer/timer.html.twig', []);
    }
}
