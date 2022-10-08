<?php
use PHPUnit\Framework\TestCase;
require "calculator/calculator.php"; 


class CalculatorTest extends TestCase {

    private $test;

    protected function setUp(): void
    {
        $this->test = new calculator();
    }


    /**
     @group base
     */ 
    public function test_add_calc(){
        $this->assertEquals($this->test->add(5,5),10);
    }

    /**
     @group base
     */ 
    public function test_asub_calc(){
        $this->assertEquals($this->test->sub(5,5),0);
    }

    /**
     @group base
     */ 
    public function test_mul_calc(){
        $this->assertEquals($this->test->mul(5,5),25);
    }

    /**
     @group base
     */ 
    public function test_div_calc(){
        $this->assertEquals($this->test->div(5,5),1);
    }

    /**
     @group advance
     */ 
    public function test_mod_calc(){
        $this->assertEquals($this->test->mod(5,5),0);
    }


    // To Test --> .\vendor\bin\phpunit --group base



}




















?>