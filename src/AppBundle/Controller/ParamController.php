<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParamController extends Controller
{
    /**
     * @Route("/parameterised/param/{name}", name="param")
     */
    public function ParamAction($name)
    {
        // replace this example code with whatever you need
        return $this->render('parameterised/param.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'name'=>$name
        ]);
    }
}
