<?php

namespace Luno\Request;

class ListPendingTransactions extends AbstractRequest
{
  /**
   * Account ID
   */
  protected $id;

  public function getId(): integer {
    return $this->id;
  }

  public function setId(integer $id) {
    $this->id = $id;
  }
}

// vi: ft=php
