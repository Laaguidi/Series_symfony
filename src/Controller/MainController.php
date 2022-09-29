<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function home() {
        // echo "This is home page";
        // die();
        return  $this->render("main/home.html.twig");
    }

    /**
     * @Route("/test", name="main_test")
     */
    public function test() {
        // echo "This is a test page";
        // die();
        return  $this->render("main/test.html.twig");
    }

}