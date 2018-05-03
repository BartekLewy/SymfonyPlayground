<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    public function index(): Response
    {
        return $this->render('app/index.html.twig', ['user' => $this->getUser()]);
    }
}
