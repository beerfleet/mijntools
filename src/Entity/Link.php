<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/** 
 * @ORM\Entity
 * @UniqueEntity("url")
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
   * @ORM\Column(name="url", type="string", length=1023, unique=true)
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

  function getId() {
    return $this->id;
  }

}
