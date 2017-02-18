<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/default")
     */
    public function listAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/default/{memberName}.html")
     */
    public function showAction($memberName)
    {
        return $this->render('default/$memberName.html.twig');
    }
}