<?php

    // PRINCIPALE
    class Products{
        public $name;
        public $type;
        public $price;
        public $image;
        public $category;

        public function __construct($_name, $_type, $_price, $_image, Categories $_category){
            $this->name = $_name;
            $this->type = $_type;
            $this->price = $_price;
            $this->image = $_image;
            $this->category = $_category;
        }

        // PER IL RITORNO DELL'ICONA
        public function getIcon(){
            $icon = $this->category->icon;
            return "<i class='$icon'></i>";
        }
    };