<?php

class Product
{
  protected $description;
  protected $precio;
  protected $stock = 100;

  public function __construct( $description )
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
}
