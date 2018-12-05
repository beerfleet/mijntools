<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;

/**
 * Description of Task
 *
 * @author jan
 */
class Task {

  protected $task;
  protected $dueDate;

  public function getTask() {
    return $this->task;
  }

  public function setTask($task) {
    $this->task = $task;
  }

  public function getDueDate() {
    return $this->dueDate;
  }

  public function setDueDate(\DateTime $dueDate = null) {
    $this->dueDate = $dueDate;
  }

}
