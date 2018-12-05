<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TryStuffController extends AbstractController {

  /**
   * @Route("/try/stuff", name="try_stuff")
   */
  public function index() {
    return $this->render('try_stuff/index.html.twig', [
          'controller_name' => 'TryStuffController',
    ]);
  }

}
