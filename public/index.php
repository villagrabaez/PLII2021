<?php

require __DIR__ . '/../bootstrap/start.php';

use App\Product;
use App\Seller;
use App\Client;

// Interaccion entre objetos

$producto = new Product("Perfume");

$vendedor = new Seller("Julio", "Perez");

$cliente = new Client("Clemente", "Gonzalez");

print $cliente->compra( $producto, $vendedor );