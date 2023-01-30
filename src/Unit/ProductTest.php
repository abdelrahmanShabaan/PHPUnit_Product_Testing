<?php

namespace App\Unit;

use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {

public function testIfIncreaseQuentityFunctionWork()
{
    //given 
    $product = new Product('Apple', 5);
    //when 
    $product->increaseQuantity(2);
    //then (athershen)
    //$this->assertEquals(expected , actual:);
    $this->assertEquals(7, $product->getQuentity());

}   

public function testIfQuentityZeroOrLessThanThrowException()
{
    //given 
    $product = new Product('Apple', 5);

    $this->expectException(\InvalidArgumentException::class);

    $this->expectExceptionMessage('Quentity can\'t be zero or less');

    //when 
    $product->increaseQuantity(0);
    // //then (athershen)
    // //$this->assertEquals(expected , actual:);
    // $this->assertEquals(5, $product->getQuentity());

}   

    public function testThatDecreaseFunctionWorks(){

    //given 
    $product = new Product('mango', 3);
    //when 
    $product->decreaseQuantity(2);
    //then (athershen)
    $this->assertEquals(1, $product->getQuentity());
    }

}