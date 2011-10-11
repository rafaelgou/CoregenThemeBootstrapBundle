<?php

namespace Coregen\ThemeBootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CoregenThemeBootstrapBundle:Default:index.html.twig', array('name' => $name));
    }
}
