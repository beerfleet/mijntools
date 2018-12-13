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
class Link {

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
