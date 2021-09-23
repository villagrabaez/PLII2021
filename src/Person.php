<?php

namespace App;
abstract class Person
{
  protected $firstName; // public, protected, private
  protected $lastName;
  protected $nickname;
  protected $changedNickname = 0;

  abstract public function getFullName();

  public function __construct( $firstName, $lastName, $nickname = null ) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->nickname = $nickname;
  }

  public function setNickname( $nickname ) {
    if ( $this->changedNickname >= 2 ) {
      throw new Exception("No puedes cambiar tu nombre de usuario mas de dos veces.");
    }

    $this->nickname = strtolower( $nickname );
    $this->changedNickname++;
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function getNickname() {
    return strtolower( $this->nickname );
  }
}
