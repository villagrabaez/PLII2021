<?php

class Client extends Person implements FormaPago
{
  protected $formaPago = [
    'efectivo',
    'tarjeta',
    'credito',
  ];

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
