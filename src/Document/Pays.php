<?php
// src/Document/Pays.php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use DateTime;

/** 
 
*@MongoDB\Document*/
class Pays
{
/** 
 
*@MongoDB\Id*/
  private $id;

/** 
 
*@MongoDB\Field(type="string")*/
  private $datasetid;

 /** 
 
*@MongoDB\Field(type="string")*/
  private $recordid;

/** 
 
*@MongoDB\EmbedOne(targetDocument=ImportDetail::class)*/
  private $fields;

/** 
 
*@MongoDB\Field(type="date")*/
  private $recordTimestamp;

    // Getters and Setters

    public function getId()
    {
        return $this->id;
    }

    public function getDatasetId(): ?string
    {
        return $this->datasetid;
    }

    public function setDatasetId(string $datasetid): self
    {
        $this->datasetid = $datasetid;
        return $this;
    }

    public function getRecordId(): ?string
    {
        return $this->recordid;
    }

    public function setRecordId(string $recordid): self
    {
        $this->recordid = $recordid;
        return $this;
    }

    public function getFields(): ?ImportDetail
    {
        return $this->fields;
    }

    public function setFields(?ImportDetail $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getRecordTimestamp(): ?DateTime
    {
        return $this->recordTimestamp;
    }

    public function setRecordTimestamp(DateTime $recordTimestamp): self
    {
        $this->recordTimestamp = $recordTimestamp;
        return $this;
    }
}