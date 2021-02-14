<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Homepage extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('homepage.html.twig');
    }
}