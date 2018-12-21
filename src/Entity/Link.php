<?php

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
   * @ORM\ManyToMany(targetEntity="Tag", inversedBy="links")
   * @ORM\JoinTable(name="users_groups")
   */
  private $tags;
  
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
   * @ORM\Column(name="url", type="string", length=191, unique=true)
   */
  private $url;

  /**
   * @ORM\Column(type="datetime")
   */
  private $dateSet;
  
  public function __construct() {
    $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
  }

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
  
  public function getTags() {
    return $this->tags;
  }

  public function addTag(Tag $tag) {
    $tag->addLink($this);
    $this->tags[] = $tag;
  }

}
