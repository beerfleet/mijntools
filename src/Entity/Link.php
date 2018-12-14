<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LinkRepository")
 */
class Link {

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;
  
  /**
   * @Assert\NotBlank(
   *  message = "Please fill out the Url field"
   * )
   * @ORM\Column(type="string", length=1023)
   */
  private $url;
  
  /**
   * @ORM\Column(type="datetime")
   */
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
