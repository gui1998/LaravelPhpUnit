<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


class MathTest extends TestCase
{
    /**
     * @test 
     */
    public function is_multiple_return_own_number()
    {
        $numberTest = 1;
        $comparative = ['2' => 'dois'];

        $number = verifyMultiple($numberTest, $comparative);

        $this->assertEquals($numberTest, $number);
    }

    /**
     * @test 
     */
    public function is_multiple_return_field()
    {
        $numberTest = 15;
        $comparative = ['15' => 'quinze'];

        $number = verifyMultiple($numberTest, $comparative);

        $this->assertEquals($comparative['15'], $number);
    }
}
