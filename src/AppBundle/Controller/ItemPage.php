<?php
/**
 * Created by PhpStorm.
 * User: aura
 * Date: 3/20/2017
 * Time: 3:25 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\AppBundle;
use AppBundle\Entity\Item;
use AppBundle\Entity\search;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\Mapping as ORM;

class ItemPage extends Controller
{

    /**
     * The following function loads the default item page
     * Note that the search bar is still not functional
     * items is used to hold the items which are gotten from the database
     * which is then passed to the render function to render in itempage
     * for is also passed to the render function to render in itempage
     */

    /**
     * @Route("/")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');

        $items = $repository->findAll();
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)
            ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();


        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * The following functions are the category controllers
     * they access the database using Doctrine
     * items is used to hold the items which are gotten from the database
     * which is then passed to the render function to render in itempage
     */



    /**
     * @Route("/electronic")
     */
    public function categoryElectronic(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'electronic'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)
            ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();



        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/book")
     */
    public function categoryBook(Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'book'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/furniture")
     */
    public function categoryFurniture(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'furniture'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/art")
     */
    public function categoryArt(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'art'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/cooking")
     */
    public function categoryCooking(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'cooking'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/health and beauty")
     */
    public function categoryHealthandbeauty(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'health and beauty'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/pet")
     */
    public function categoryPet(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'pet'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/schoolsupplies")
     */
    public function categorySchoolsupplies(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'school supplies'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/sports")
     */
    public function categorySports(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'sports'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/misc")
     */
    public function categoryMisc(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'misc'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/clothes")
     */
    public function categoryClothes(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findBy(array('category' => 'clothes'));
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }

    /**
     * @Route("/all")
     */
    public function categoryAll(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findAll();
        $task = new search();
        $task->setSearchText('');

        $form = $this->createFormBuilder($task)//This is for the search bar
        ->add('searchText', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        if ($request->isMethod('POST')) {
            $formData = $request->request->get('form');
            $items = $repository->search($formData['searchText']);
        }

        return $this->render('default/index.html.twig', ['items' => $items,'form' => $form->createView(),]);
    }
    public function showAction($productId)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($productId);

        $categoryName = $product->getCategory()->getName();
    }

}
