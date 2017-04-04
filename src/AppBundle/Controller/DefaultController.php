<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Item;
use AppBundle\Entity\search;
use AppBundle\Form\ItemFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class DefaultController extends Controller
{


    /**
     * @Route ("/About", name ="about page")
     */
    public function goToAbout()
    {
        return $this->render('default/About.html.twig');
    }

    /**
     * @Route("/Aura")
     */
    public function goToAuraAbout(){
        return $this->render('default/Aura.html.twig');
    }

    /**
     * @Route("/danny")
     */
    public function goToDannyAbout(){
        return $this->render('default/Danny.html.twig');
    }

    /**
     * @Route("/Ericka")
     */
    public function goToErickaAbout(){
        return $this->render('default/Ericka.html.twig');
    }
    
    /**
     * @Route("/Michael")
     */
    public function goToMichaelAbout(){
        return $this->render('default/Michael.html.twig');
    }
}
