<?php

/*
* Title: Real FizzBuzz (Step 3)
* Author: Raymond Sotto
* Github: https://github.com/raymondjosephsotto
* PHP version: 7.4.1
* PHP testing version: PHPUnit 9.5.0
*
* Instructions: Enhance your existing FizzBuzz solution to perform the following:
* 1. Produce a report at the end of the program showing how many times the following were output:
*   a. Fizz
*   b. Buzz
*   c. Fizzbuzz
*   d. Lucky
*   e. an integer
*
* Expected Output:
* 1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz
*   lucky: 2
*   buzz: 3
*   fizz: 4
*   fizzbuzz: 1
*   integer: 10
*   (Integer is 10 because there were 10 numbers that were not altered in any way).
*
* To Run on Command Line: 'php -f src/StepThree.php'
* To Run on Local Env: 'localhost/realfizzbuzzstep3/src/StepThree.php' 
* or 'localhost:[YOUR PORT NUMBER HERE]/realfizzbuzzstep3/src/StepThree.php'
*/


declare(strict_types=1);

use PhpParser\Node\Stmt\Return_;

class FizzBuzzStepThree
{

    /*
    * Outputs the number which 
    * contain the variable $digit from 0 to 20 
    * Returns true if $digit exist in number $x 
    */

    public function isDigitThreePresent($x, $digit)
    {
        /* Sets $digit variable to 3 */
        $digit = 3;

        /* Break while loop if $d exist as a digit */
        while ($x > 0) {
            if ($x % 10 == $digit)
                break;

            /* If loop breaks */
            $x = $x / 10;
        }
        return ($x > 0);
    }

    public function translate($num)
    {
        if ($num == 3 || $this->isDigitThreePresent($num, 3)) {
            return "lucky";
        }
        if ($num % 15 == 0) {
            return "fizzbuzz";
        }
        if ($num % 3 == 0) {
            return "fizz";
        }
        if ($num % 5 == 0) {
            return "buzz";
        } {
            return strval($num);
        }
    }

    public function run()
    {
        $result = array();

        for ($i = 0; $i < 20; $i++) {
            $result[$i] = $this->translate($i + 1);
            $concatResult =  $result[$i] . "\n";
            echo $concatResult;
        }
        echo "<br><br>";

        foreach ($result as $value) {
            /* Sets Zero as default value if no entries found */
            if (!isset($resultCount[$value])) $resultCount[$value] = 0;

            /* Increments the number of times $resultCount occurs */
            $resultCount[$value]++;
        }

        $stringValue = ''; //This initializes it as a string
        $integerValue = 0; //This initializes it as a integer

        foreach ($resultCount as $key => $value) {

            /* Filter the Integer $key to show only the Integer keys */
            if (is_int($key)) {
                $integerValue++;
            }

            /* Filter the Integer $key as FALSE to show only the String keys */
            if (is_int($key) === false) {
                $stringValue .= $key . ': ' . $value . "\n" . "<br>";
            }
        }

        
        echo $stringValue;
        echo "integers: " . $integerValue;
    }
}

$initialize_fizzbuzz_step_two = new FizzBuzzStepThree();
$output = $initialize_fizzbuzz_step_two->run();
echo $output;
