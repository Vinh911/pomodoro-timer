<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AnalysisController extends AbstractController
{
    public function index(): Response {
        return $this->render('analysis/analysis.html.twig', []);
    }
}
