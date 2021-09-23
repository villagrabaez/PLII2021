<?php

require __DIR__ . '/../boostrap/start.php';

use App\Product;
use App\Client;
use App\Person;
use App\Seller;
use App\User;

// Interaccion entre objetos

$producto = new Product("Coca Cola");

$vendedor = new Seller("Julio", "Perez");

$cliente = new Client("Clemente", "Gonzalez");

print $cliente->compra( $producto, $vendedor );