<?php

// Padre - Parents
abstract class Person
{
  // Propiedades
  protected $firstName; // public, protected, private
  protected $lastName;
  protected $nickname;
  protected $changedNickname = 0;

  public function __construct( $firstName, $lastName, $nickname = null ) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->nickname = $nickname;
  }

  // Metodos
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

  abstract public function getFullName();
}

interface FormaPago
{
  public function getFormaPago($index);
}

// Clase hija/o de Person
class Client extends Person implements FormaPago
{
  protected $formaPago = [
    'efectivo',
    'tarjeta',
    'credito',
  ];
  //
  public function getFullName() {
    return strtoupper($this->firstName . " " . $this->lastName);
  }

  public function getFormaPago($index)
  {
    return $this->formaPago[$index];
  }

  public function compra( Product $producto, Vendedor $vendedor )
  {
    return "{$this->getFullName()} compro {$producto->getDescription()} y fue atendido por {$vendedor->getFullName()} y pago con {$this->getFormaPago(1)}";
  }
}

// Clase hija/o de Person
class User extends Person
{
  //
  public function getFullName() {
    return strtoupper($this->firstName . " " . $this->lastName);
  }
}

// Clase hija/o de Person
class Vendedor extends Person
{
  //
  public function getFullName() {
    return strtoupper($this->firstName . " " . $this->lastName);
  }
}

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

// Interaccion entre objetos

$producto = new Product("Coca Cola");

$vendedor = new Vendedor("Julio", "Perez");

$cliente = new Client("Clemente", "Gonzalez");

print $cliente->compra( $producto, $vendedor );