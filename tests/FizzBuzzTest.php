<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
   public function test_fizz_if_divisible_by_three()
   {
       //Given
       $number=3;
       $fizzBuzz= new FizzBuzz;
       //When
       $result= $fizzBuzz->getFizzBuzz($number);
       //Then
       $this->assertEquals("Fizz",$result);
   }   
   public function test_buzz_if_divisible_by_five()
   {
        //Given
        $number=5;
        $fizzBuzz= new FizzBuzz;
        //When
        $result= $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Buzz",$result);
    }    
    public function test_fizz_if_divisible_by_three_and_five()
    {
        //Given
        $number=60;
        $fizzBuzz= new FizzBuzz;
        //When
        $result= $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("FizzBuzz",$result);
    }  

    public function test_fizz_if_divisible_by_three_and_contains_3()
    {
        //Given
        $number=534;
        $fizzBuzz= new FizzBuzz;
        //When
        $result= $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Fizz",$result);
    }  
    public function test_fizz_if_divisible_by_five_and_contains_5()
    {
        //Given
        $number=25;
        $fizzBuzz= new FizzBuzz;
        //When
        $result= $fizzBuzz->getFizzBuzz($number);
        //Then
        $this->assertEquals("Buzz",$result);
    }  
}

