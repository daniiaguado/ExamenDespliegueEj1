<?php

namespace App\Tests;

use App\DNI;
use PHPUnit\Framework\TestCase;

class DNITest extends TestCase {
    public function testGetDNIConLetra() {
        $dni = new DNI(12345678);
        $this->assertEquals("12345678Z", $dni->getDNIConLetra());
    }
}
