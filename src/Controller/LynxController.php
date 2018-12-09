<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class LynxController extends AbstractController {

  public function index() {
    return $this->render('lynx/index.html.twig', [
          'controller_name' => 'LynxController',
    ]);
  }
  
  public function process_add_link() {
    $request = Request::createFromGlobals();
    $link = $request->get('new-link', 'bestaat niet');
    return new Response("<H1> $link </H1>");
  }

}
