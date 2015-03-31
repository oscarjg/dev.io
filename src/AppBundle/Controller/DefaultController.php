<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $test = 'test';

        return $this->render('AppBundle:default:index.html.twig', ['test' => $test]);
    }

    public function userAction()
    {
        return $this->render('AppBundle:default:user.html.twig');
    }
}
