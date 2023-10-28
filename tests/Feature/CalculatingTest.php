<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculatingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_calculating_2_plus_3_to_be_5(): void
    {
        $total = 2 + 3 ;
        $this->assertEquals(5, $total);
    }
}
