
<?php
session_start();
if (!(isset($_SESSION["username"]))) {
    header('location:login.php');
}
include('includes/connexion.php');
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Document</title>
</head>
<body>
    
        <table>
            <tr>
                    <td><a href="logout.php">logout</a></td>
                    <td><a href="add.php">add</a></td>
            </tr> 
        </table>
    

    <?php while($result == true && $product = mysqli_fetch_assoc($result)) { ?>
    <div class="back" style="margin-top: 50px;">
           
            <div><img src="images/<?= $product["image"] ?>" alt="" width="100" height="100"></div> 
            <div class="right_one"><?= $product["title"] ?></div>
            <div class="right_two"><?= $product["description"] ?></div>
            <div><?= $product["price"] ?></div><br>
            <a href="edit.php?id=<?= $product["id"] ?>">edit</a>
            <a href="delete.php?id=<?= $product["id"] ?>">delete</a>



        </div>
    <?php } ?>
</body>
</html>