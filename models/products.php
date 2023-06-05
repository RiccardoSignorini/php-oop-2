<?php

    // PRINCIPALE
    class Products{
        public $name;
        public $type;
        public $price;
        public $image;

        public function __construct($_name, $_type, $_price, $_image){
            $this->name = $_name;
            $this->type = $_type;
            $this->price = $_price;
            $this->image = $_image;
        }
    };