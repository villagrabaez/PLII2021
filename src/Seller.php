<?php

namespace App;
class Seller extends Person
{
  public function getFullName() {
    return strtoupper($this->firstName . " " . $this->lastName);
  }
}