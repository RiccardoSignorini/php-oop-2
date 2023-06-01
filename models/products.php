<?php

    require_once './categories.php';

    // ESTENSIONE CLASSE CIBO
    class Food extends Dogs{
        public $meat;
        public $crunchy;
    };

    class Food extends Cats{
        public $meat;
        public $crunchy;
    };

    // ESTENSIONE CLASSE GIOCHI
    class Toys extends Dogs{
        public $ball;
        public $puppet;
    };

    class Toys extends Cats{
        public $ball;
        public $puppet;
    };

    // ESTENSIONE CLASSE ACCESSORI
    class Accessories extends Dogs{
        public $leash;
        public $jacket;
    };

    class Accessories extends Cats{
        public $leash;
        public $jacket;
    };