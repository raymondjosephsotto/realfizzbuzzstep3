<?php
/* 
* Run 'vendor/bin/phpunit' on Terminal to conduct tests 
*/

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FizzBuzzTestStepThree extends TestCase
{
    // /**
    //  * @test
    //  */
    public function test_if_digit_3_outputs_lucky(): void
    {
        $sut = new FizzBuzzStepThree;
        $actual = $sut->run();

        $this->assertEquals("lucky" === 3, $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_3_matches_fizz(): void
    {
        $sut = new FizzBuzzStepThree;
        $actual = $sut->translate(3);
        $actual = $sut->translate(6);
        $actual = $sut->translate(9);
        $actual = $sut->translate(12);
        $actual = $sut->translate(15);
        $actual = $sut->translate(18);

        $this->assertEquals("fizz", $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_5_matches_buzz(): void
    {
        $sut = new FizzBuzzStepThree;
        $actual = $sut->translate(5);
        $actual = $sut->translate(10);
        $actual = $sut->translate(15);
        $actual = $sut->translate(20);

        $this->assertEquals("buzz", $actual);
    }

    /**
     * @test
     */
    public function test_if_multiples_of_15_matches_fizzbuzz(): void
    {
        $sut = new FizzBuzzStepThree;
        $actual = $sut->translate(15);

        $this->assertEquals("fizzbuzz", $actual);
    }


}
