<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TryStuffController extends AbstractController {

  /**
   * @Route("/try/stuff", name="try_stuff")
   */
  public function index() {
    return $this->render('try_stuff/index.html.twig', [
          'controller_name' => 'TryStuffController',
    ]);
  }

  public function new_task(Request $request) {
    // creates a task and gives it some dummy data for this example
    $task = new Task();
    $task->setTask('Write a blog post');
    $task->setDueDate(new \DateTime('tomorrow'));

    $form = $this->createFormBuilder($task)
        ->add('task', TextType::class)
        ->add('dueDate', DateType::class)
        ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ->getForm();

    return $this->render('try_stuff/new_task.html.twig', array(
          'form' => $form->createView(),
          'controller_name' => 'Bitcheeeeeeees',
    ));
  }

}
