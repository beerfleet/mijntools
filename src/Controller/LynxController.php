<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Link;

class LynxController extends AbstractController {

  public function new_link(Request $request) {
    $link = new Link();

    $form = $this->createFormBuilder($link)
        ->add('url', TextType::class)
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $link = $form->getData();
      $link->setDateSet(new \DateTime(date('Y-m-d H:i:s')));
      $em = $this->getDoctrine()->getManager();
      $em->persist($link);
      $em->flush();

      // Stel boodschap in en redirect naar deze route
      $session = $this->get('session');
      $session->getFlashBag()->add('notice', '"' . $link->getUrl() . '" toegevoegd ;)');

      return $this->redirectToRoute('lynx_new_link');
    }

    return $this->render('lynx/index.html.twig', array(
          'form' => $form->createView(),
    ));
  }
  
  public function show_links(Request $request) {
    return $this->render('lynx/show_links.html.twig', array());
  }

  public function show_links_embed() {
    $em = $this->getDoctrine()->getManager();
    $repo = $em->getRepository(Link::class);
    $links = $repo->findAll();

    return $this->render(
            'lynx/all-embedded-links.html.twig', array('links' => $links)
    );
  }
  
  public function edit_link_page(Request $request, $link_id) {
    $repo = $this->getDoctrine()->getManager()->getRepository(Link::class);
    $link = $repo->find($link_id);
    $huidige_link = $link->getUrl();

    $form = $this->createFormBuilder($link)
        ->add('url', TextType::class)
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $link = $form->getData();      
      $em = $this->getDoctrine()->getManager();
      $em->persist($link);
      $em->flush();

      // Stel boodschap in en redirect naar deze route
      $session = $this->get('session');
      $session->getFlashBag()->add('notice', '"' . $huidige_link . '" is gewijzigd naar ' . '"' . $link->getUrl() . '"');

      //return $this->redirectToRoute('lynx_edit_link', ['link_id' => $link->getId()]);
      return $this->redirectToRoute('lynx_show_links');
    }
    
    return $this->render('lynx/edit_link_page.html.twig', ['link' => $link, 'form' => $form->createView()]);
  }

}
