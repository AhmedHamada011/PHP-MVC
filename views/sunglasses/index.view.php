<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Index</title>
</head>
<body>

  <div class="container">
    <nav>
      <h1>Sunglasses Shop</h1>
    </nav>
    <div>

      <div>
        <a href="/create" class="btn btn-primary">Insert new</a>
      </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">code</th>
          <th scope="col">name</th>
          <th scope="col">category</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach($products as $product):?>

          <tr>
            <td><?php echo $product["product_code"] ?></td>
            <td><?php echo $product["product_name"] ?></td>
            <td><?php echo $product["category"] ?></td>
            <td><a href="/<?php echo $product["id"]?>">more details</a></td>
          </tr>
        <?php endforeach?>

      </tbody>
    </table>

    </div>

    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?= $current == 1 ? "disabled" : ""?>"><a class="page-link" href="?page=<?php echo $previous?>">Previous</a></li>

    <?php for($i=1;$i<=$total_pages;$i++):?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $i?>"><?php echo $i?></a></li>
    <?php endfor?>

    <li class="page-item <?= $current == $total_pages ? "disabled" : ""?>"><a class="page-link"  href="?page=<?php echo $next?>">Next</a></li>
  </ul>
</nav>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>