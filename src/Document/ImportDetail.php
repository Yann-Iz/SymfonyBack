<?php
// src/Document/ImportDetails.php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** 
 
*@MongoDB\EmbeddedDocument */
class ImportDetail
{
/** 
 
*@MongoDB\Field(type="string")*/
  private $paysDorigineEn;

/** 
 
*@MongoDB\Field(type="string")*/
  private $paysDorigine;

/** 
 
*@MongoDB\Field(type="int")*/
  private $annee;

/** 
 
*@MongoDB\Field(type="float")*/
  private $quantiteImporteeEnFranceTwh;

    // Getters and Setters

    public function getPaysDorigineEn(): ?string
    {
        return $this->paysDorigineEn;
    }

    public function setPaysDorigineEn(?string $paysDorigineEn): self
    {
        $this->paysDorigineEn = $paysDorigineEn;
        return $this;
    }

    public function getPaysDorigine(): ?string
    {
        return $this->paysDorigine;
    }

    public function setPaysDorigine(?string $paysDorigine): self
    {
        $this->paysDorigine = $paysDorigine;
        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;
        return $this;
    }

    public function getQuantiteImporteeEnFranceTwh(): ?float
    {
        return $this->quantiteImporteeEnFranceTwh;
    }

    public function setQuantiteImporteeEnFranceTwh(?float $quantiteImporteeEnFranceTwh): self
    {
        $this->quantiteImporteeEnFranceTwh = $quantiteImporteeEnFranceTwh;
        return $this;
    }
}