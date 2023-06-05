<?php

    require_once __DIR__ . '/products.php';

    // ESTENSIONE PRODUCTS
    class Categories extends Products{
        public $name;
        public $icon;

        public function __construct($_name, $_icon){
            $this->name = $_name;
            $this->icon = $_icon;
        }
    }

    