<?php 
include('includes/connexion.php');
$error = false;
session_start();
if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $select = mysqli_query($conn, "SELECT * FROM login WHERE login='$username' AND password='$password'");
    $row = mysqli_fetch_row($select);

    if(is_array($row)) {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    } else {
        $error = true;
    }

}
if(isset($_SESSION["username"])) {
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <h1>Login</h1>
         <label for="username">Nom d'utilisateur :</label>
        <input type="text" placeholder="username" name="username" required>
        <label for="password">Mot de passe :</label>
        <input type="password" placeholder="password" name="password" required><br><br>
        <input type="submit" name="login" value="login">
        <?php if ($error): ?>
        <p>Invalid username or password</p>
        <?php endif ?>

    </form>

     
</body>
</html>