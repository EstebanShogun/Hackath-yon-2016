<?php

namespace HY\hckyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HYhckyBundle:Default:index.html.twig');
    }
}
