<?php

require_once __DIR__ .'/model/products.php';
require_once __DIR__ .'/model/food.php';
require_once __DIR__ .'/model/kennels.php';
require_once __DIR__ .'/model/toys.php';

require_once __DIR__ .'/data/db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>
  <div class="container">
    
    <h1 class="text-center">ANIMAL STORE</h1>
  </header>
      <div class="container   d-flex pt-5   ">
        <div class="row d-flex  ">
          
          <div class="col d-flex flex-wrap justify-content-center   ">
          <?php foreach ($products as $products) :?>
            <div class="card m-3 " style="width: 18rem;">
              <img src="<?php echo $products->img?>" class="card-img-top" alt="...">
              <div class="card-body ">
                <h5 class="card-title titolo mb-3 "><?php echo $products->descpription ?></h5>
                <?php if ($products->animal === 'gatto') : ?>
                <i class="fa-solid fa-cat"></i>
                <?php else :?>
                  <i class="fa-solid fa-dog"></i>
                  <?php endif ?>
                <p class="card-text">Prezzo: &euro;<?php echo $products->price ?></p>
                <p class="card-text">Taglia: <?php echo $products->size ?></p>
                <p class="card-text">Marca: <?php echo $products->brand ?></p>
                <?php if (isset($products->ingredients) ) : ?>
                <div>ingredienti:</div>
                <?php endif ?>

                <?php foreach ($products->ingredients as $ingredient) :?>
                <div class=""><?php echo $ingredient ?></div>
                <?php endforeach ?>

                <?php if (isset($products->quantity) ) : ?>
                <p class="card-text">Peso: <?php echo $products->quantity ?></p>
                <?php endif ?>

                <?php if (isset($products->type) ) : ?>
                <p class="card-text">Descrizione: <?php echo $products->type ?></p>
                <?php endif ?>
                
              </div>
            </div>
            <?php endforeach?>
          </div>
        </div>
  </div>
</div>
  
</body>
</html>