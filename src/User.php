<?php

class User extends Person
{
  public function getFullName() {
    return strtoupper($this->firstName . " " . $this->lastName);
  }
}