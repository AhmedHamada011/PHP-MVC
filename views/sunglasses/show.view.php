<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  
  <div class="container">
    <nav>
      <h1>Sunglasses Shop</h1>
    </nav>

    <div class="row mb-3 rounded border border-1">

      <div class="col-6">
        <img src="<?php echo assets("/images/" . $product["photo"])?>" class="card-img-top">
      </div>
      <div class="col-6 mt-5">
        <h2 class="title"><?= $product["product_name"]?></h2>
        <p class="text">Price: <?= $product["list_price"]?></p>
        <p class="text">Product Code: <?= $product["product_code"]?>$</p>
        <p class="text">Category: <?= $product["category"]?></p>
        <p class="text">Made In <?= $product["country"]?></p>
        <p class="text"><small class="text-muted">Only <?= $product["units_in_stock"]?> item in stock</small></p>
      </div>
    </div>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>