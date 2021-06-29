<?php
#PDO means => PHP Data Objects
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// var_dump($_SERVER);

// var_dump($_FILES);


$id = $_GET['id'] ?? null;

// var_dump($id);

if(!$id){
    header('Location:index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id=:id');
$statement->bindValue(':id',$id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);





$errors = [];
$title = $product['title'];
$price = $product['price'];
$description=$product['description'];

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];



    if(!$title){
        $errors[]='Product title is required';
    };

    if(!$price){
        $errors[]='Product price is required';
    };

    // var_dump($errors) ;
    
    if(empty($errors)){


        $statement = $pdo ->prepare("UPDATE products SET title=:title, image=:image, description=:description, price=:price WHERE id=:id");
 
        $statement->bindValue(':title',$title);
        $statement->bindValue(':image','');
        $statement->bindValue(':description',$description);
        $statement->bindValue(':price',$price);
        $statement->bindValue(':id',$id);
        $statement->execute();
        header('Location:index.php');
    }

    


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<hr>
<h3 class="text-center">Update   Product : <?php echo $product['title'] ?> </h3>
<hr>
<div class="container">
<?php  if(!empty($errors)):?>
<div class="alert alert-danger">
<?php foreach($errors as $error): ?>
<div><?php echo $error ?></div>
<?php  endforeach; ?>

</div>
<?php endif; ?>
<div>
<a href="index.php" type='button' class="btn btn-info btn-sm">Back</a>
</div>
<hr>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label >Product Title </label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
        <label >Product Image </label>
        <br>
        <input type="file" name="image">
        </div>
        <div class="form-group">
        <label >Product Description </label>
        <textarea  class="form-control" name="description"> <?php echo $description ?> </textarea>
        </div>
        <div class="form-group">
        <label >Product Price </label>
        <input type="number" name="price" step="0.01" class="form-control" value="<?php echo $price ?>">
        </div>

        <button type="submit" class="btn btn-info">submit</button>

    </form>


</div>
    
</body>
</html>