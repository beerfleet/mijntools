<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Link;

class LynxController extends AbstractController {

  public function new_link(Request $request) {
    $link = new Link();

    $form = $this->createFormBuilder($link)
        ->add('url', TextType::class)        
        ->getForm();

    return $this->render('lynx/index.html.twig', array(
          'form' => $form->createView(),
    ));
  }

}
