<?php

namespace App\Tests;

use App\User;

/*
  TDD
  Desarrollo Guiado por Pruebas

  - Rojo
  - Verde
  - Refactorin
*/

class PrimerTest extends TestCase
{
  /**
   * @test
  */
  function se_crea_el_usuario_correctamente()
  {
    // $esperamos = true;

    $user = new User('Bernardino', 'Villagra');

    $this->assertSame($user->getFullName(), 'BERNARDINO VILLAGRA');
  }
}