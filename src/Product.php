<?php
namespace App;

class Product {

    private $name;
    private $quentity;


    public function __construct($name , $quentity) {
        
            $this->name = $name;
            $this->quentity = $quentity;
    }

    public function increaseQuantity($quentity){

        if($quentity <= 0){
            throw new \InvalidArgumentException('Quentity can\'t be zero or less');
        }
        $this->quentity = $this->quentity + $quentity;
    }

    // add decreaseQuantity()

    /**
     * decrease Quantity by value
     *  if quantity after decreasing < 0 then make quantity 0 
     * 
     */

        public function decreaseQuantity($quentity){

                $this->quentity = $this->quentity - $quentity;

        }

        // TDD
        // Test Driven Development



    public function getQuentity()
    {
        # code...
        return $this->quentity;
    }



}