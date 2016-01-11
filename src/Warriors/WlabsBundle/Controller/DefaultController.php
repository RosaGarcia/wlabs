<?php

namespace Warriors\WlabsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WlabsBundle:Default:index.html.twig');
    }

    public function certificacionAction()
    {
        return $this->render('WlabsBundle:Default:certificacion.html.twig');
    }
}
