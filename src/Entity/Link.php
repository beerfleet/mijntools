<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Task
 *
 * @author jan
 */
class Link {

  /**
   * @Assert\NotBlank(
   *  message = "Please fill out the Url field"
   * )
   */
  private $url;
  private $dateSet;

  function getUrl() {
    return $this->url;
  }

  function getDateSet() {
    return $this->dateSet;
  }

  function setUrl($url) {
    $this->url = $url;
  }

  function setDateSet($dateSet) {
    $this->dateSet = $dateSet;
  }

}
