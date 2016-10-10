<?php

namespace HY\hckyBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
//use HY\hckyBundle\Entity\;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DefaultController extends \HY\hckyBundle\Controller
{
    public function indexAction(Request $request)
    {
        $advert = new Advert;
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $advert);
        $formBuilder        
                ->add('mail', TextType::class)
        ;
        $form = $formBuilder->getForm();

    return $this->render('HYhckyBundle:Default:index.html.twig', array(
      'form' => $form->createView()
    ));
    }
}

