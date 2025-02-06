<?php

use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase
{
    /**
     * Prueba que getDNIConLetra devuelve el DNI correcto con la letra.
     */
    public function testGetDNIConLetra()
    {
        // Casos de prueba: números de DNI y sus letras correctas
        $casos = [
            12345678 => "12345678Z",
            87654321 => "87654321X",
            11111111 => "11111111H",
            22222222 => "22222222J",
            33333333 => "33333333R"
        ];

        foreach ($casos as $dniSinLetra => $dniEsperado) {
            $dni = new DNI($dniSinLetra);
            $this->assertEquals($dniEsperado, $dni->getDNIConLetra(), "Error en DNI: $dniSinLetra");
        }
    }

    /**
     * Prueba que el constructor lanza un error si el DNI no es válido.
     */
    public function testDNIInvalido()
    {
        $this->expectException(TypeError::class);
        new DNI("no-es-un-numero");
    }
}
