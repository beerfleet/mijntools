<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LynxController extends AbstractController {

  public function index() {
    return $this->render('lynx/index.html.twig', [
          'controller_name' => 'LynxController',
    ]);
  }

}
