<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /* *
     * TODO: Add the double asterisk in the line above for this route to work
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        return new Response("hello world");
    }
}
