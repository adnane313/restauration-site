<?php
session_start();
if (!(isset($_SESSION["username"]))) {
    header('location:login.php');
}
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include('includes/connexion.php');
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST["edit"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        if($_FILES['image']['name'] == "") {
            $sql = "UPDATE products SET title='$title', description='$description', price='$price' WHERE id='$id'";
        } else {
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            move_uploaded_file($file_tmp,"images/".$file_name);
            $sql = "UPDATE products SET title='$title', description='$description', image='$file_name', price='$price' WHERE id='$id'";
        }
        mysqli_query($conn, $sql);
        header("Refresh:0");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="edit.css">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <h3>Modifier</h3>
        <label form="title">Modifier le titre</label><br>
        <input type="text" placeholder="title" name="title" value="<?= $row["title"] ?>" required><br>

        <label form="title">Modifier la discription</label><br>
        <textarea id="" cols="30" rows="10" placeholder="description" name="description" required><?= $row["description"] ?></textarea><br>
        <label>Modifier ce Menu : </label>
        <img src="images/<?= $row["image"] ?>" width="100" height="100" alt=""><br>
        <input type="file" src="" alt="" name="image" value="<?= $row["image"] ?>"><br>
        <input type="text" id="" placeholder="price" name="price" value="<?= $row["price"] ?>" required><br>
        <input type="submit" value="Add" name="edit"> 
    </form>
</body>
</html>