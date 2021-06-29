<?php
#PDO means => PHP Data Objects
#DATABASE conection method:
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($products) ;


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>PRODUCT_CRUD</h1>
    <hr>
    <p>
    <a href="create.php" class="btn btn-success btn-sm">Create Product</a>
    </p>

    
    <hr>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $i=>$p) : ?>
    <tr>
    <th scope="row"><?php   echo $i+1 ?></th>
    <td><?php echo $p['title'] ?></td>
    <td><?php echo $p['price'] ?></td>
    <td><?php echo $p['create_date'] ?></td>
    <td>
    <a href="update.php?id=<?php echo $p['id'] ?>" type="button" class="btn btn-success btn-sm">EDIT</a>
    <form style="display:inline-block" action="delete.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $p['id'] ?>">
    <button   type="submit" class="btn btn-danger btn-sm">DELETE</button>
    </form>
    </td>
    </tr>

    <?php endforeach  ?>
  </tbody>
</table>

  </body>
</html>