<?php

namespace HY\hckyBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdvertController extends \HY\hckyBundle\Controller
{
    public function indexAction(Request $request)
    {
        $advert = new Advert;
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $advert);
        $formBuilder        
                ->add('mail', TextType::class)
        ;
        $form = $formBuilder->getForm();

    return $this->render('HYhckyBundle:Advert:add.html.twig', array(
      'form' => $form->createView()
    ));
    }
}