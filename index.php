<?php

    require_once __DIR__ . '/models/categories.php';
    require_once __DIR__ . '/models/products.php';

    // ISTANZE CATEGORIES
    $for_dogs = new Categories('For Dogs', 'fa-solid fa-dog');
    $for_cats = new Categories('For Cats', 'fa-solid fa-cat');

    // ISTANZE PRODUCTS
    $array_prodotti = [
        $dog_food_first = new Products('Crocchette', 'Food', '19,99', './assets/img/crocchette_cani.jpeg', $for_dogs),
        $dog_accessory_first = new Products('Collare', 'Accessory', '29,99', './assets/img/collare_cani.jpeg', $for_dogs),
        $dog_accessory_second = new Products('Vestito', 'Accessory', '59,99', './assets/img/vestito_cani.jpeg', $for_dogs),
        $dog_toy_first = new Products('Palla', 'Toy', '9,99', './assets/img/palla_cani.jpeg', $for_dogs),
        $cat_food_first = new Products('Carne', 'Food', '14,99', './assets/img/carne_gatti.jpeg', $for_cats),
        $cat_toy_first = new Products('Topo', 'Toy', '5,99', './assets/img/topo_gatti.jpeg', $for_cats),
        $cat_toy_second = new Products('Palline', 'Toy', '7,99', './assets/img/palline_gatti.jpeg', $for_cats),
        $cat_accessory_first = new Products('Vestito', 'Accessory', '29,99', './assets/img/vestito_gatti.jpeg', $for_dogs),  
    ];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET STORE</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- LINK FONTAWSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="container text-center">
        <h1>PET SHOP</h1>
        <div class="container d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <!-- CICLO CARD PER I PRODOTTI -->
                    <?php foreach($array_prodotti as $elem) : ?>

                    <div class="col-4 my-3">
                        <div class="card">
                            <img src="<?php echo $elem->image ?>" class="card-img-top" alt="<?php echo $elem->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $elem->name ?></h5>
                                <p class="card-text"><?php echo $elem->type ?></p>
                                <p class="card-text"><?php echo "€" . $elem->price ?></p>
                            </div>
                        </div>    
                    </div>
                    
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>