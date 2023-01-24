<?php
session_start();
$added = false;
if (!(isset($_SESSION["username"]))) {
    header('location:login.php');
}
include('includes/connexion.php');
if(isset($_POST['add'])){
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    move_uploaded_file($file_tmp,"images/".$file_name);

    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $sql = "INSERT INTO products(title, description, image, price) VALUES ('$title', '$description', '$file_name', '$price')";
    mysqli_query($conn, $sql);
    $added = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="add.css">
    <title>Document</title>
</head>
<body>
    <?php if ($added): ?>
        <p style="font-family: verdana;
        font-family: 40px; background-color: #d6e5d8; padding: 10px; text-align: center;  ">Product added</p>
    <?php endif ?>

    <form  action="" enctype="multipart/form-data" method="post">
        <div class="container">
              
       
     
         <h3 class="form__title"> Add MEALS</h3>  
         
            <div class="form__group">
        <label for="title">Ecriver le titre :</label><br>
        <input type="text" placeholder="title" name="title" required><br>
         </div>

          <div class="form__group">
         <label for="description">Ecriver la discription :</label><br>
        <textarea id="" cols="30" rows="10" placeholder="description" name="description" required></textarea><br>
        </div>

         <div class="form__group">
        <input type="file" src="" alt="" name="image" required><br>
         </div>

         <div class="form__group">
         <label for="price">Donner le prix :</label><br>
        <input type="text" id="" placeholder="price" name="price" required><br>
        </div>
        <input type="submit" value="Add" name="add">
        </div>
    </form>



</body>
</html>