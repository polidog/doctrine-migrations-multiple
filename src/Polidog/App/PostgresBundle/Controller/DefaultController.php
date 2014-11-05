<?php

namespace Polidog\App\PostgresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PolidogAppPostgresBundle:Default:index.html.twig', array('name' => $name));
    }
}
