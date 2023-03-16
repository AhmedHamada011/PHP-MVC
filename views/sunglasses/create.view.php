<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>add new</title>
</head>
<body>

  <div class="container">

    <nav>
      <h1>Sunglasses Shop</h1>
    </nav>
    <div>

    <div class="add-new-sunglass">
      <h4>add new sunglass</h4>
      <hr>
      <form action="/insert" method="post">
        <div class="mb-3">
          <label for="product-code" class="form-label">product code</label>
          <input type="text" name="product_code" class="form-control" id="product code">
        </div>

        <div class="mb-3">
          <label for="product-name" class="form-label">product name</label>
          <input type="text" name="product_name" class="form-control" id="product-name">
        </div>

        <div class="mb-3">
          <label for="product-price" class="form-label">product price</label>
          <input type="number" name="list_price" class="form-control" id="product-price">
        </div>

        <div class="mb-3">
          <label for="product-units-in-stock" class="form-label">product units in stock</label>
          <input type="number" name="units_in_stock" class="form-control" id="product-units-in-stock">
        </div>

        <div class="mb-3">
          <label for="product-category" class="form-label">product category</label>
          <input type="text" name="category" class="form-control" id="product-category">
        </div>

        <div class="mb-3">
          <label for="product-country" class="form-label">product country</label>
          <input type="text" name="country" class="form-control" id="product-country">
        </div>

        <div class="mb-3">
          <input type="submit" value="add" class="btn btn-primary">
        </div>

      </form>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>