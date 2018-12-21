<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 */
class Tag {
  
  /**
   * @ORM\ManyToMany(targetEntity="Link", mappedBy="tags")
   */
  private $links;
  
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;
  
  private $label;
  
  public function __construct() {
    $this->links = new \Doctrine\Common\Collections\ArrayCollection();
  }
  
  public function getId() {
    return $this->id;
  }

  public function getLabel() {
    return $this->label;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setLabel($label) {
    $this->label = $label;
  }
  
  public function addLink(Link $link) {
    $this->links[] = $link;
  }

}
