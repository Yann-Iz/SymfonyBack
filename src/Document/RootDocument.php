<?php
// src/Document/RootDocument.php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
 
/** @MongoDB\Document*/
class RootDocument
{
     
    /** @MongoDB\Id*/
  protected $id;

    /**
    *@MongoDB\EmbedOne(targetDocument=Root::class)
    */
  protected $root;

    public function getId()
    {
        return $this->id;
    }

    public function getRoot(): ?Root
    {
        return $this->root;
    }

    public function setRoot(?Root $root): self
    {
        $this->root = $root;
        return $this;
    }
}