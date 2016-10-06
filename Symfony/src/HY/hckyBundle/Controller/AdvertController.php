<?php

namespace HY\hckyBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Faut trouver une idée !");
    }
}

