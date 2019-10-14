<?php require('../controller/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php 
    $login_controller = new LoginController; 
    $login_controller->access();
  ?>
  <form action="" method="post">
    <input type="text" placeholder="Usuario" name="user">
    <input type="password" placeholder="Contraseña" name="pass">
    <input type="submit" value="Entrar">
  </form>
  <a href="register">Crea una nueva cuenta</a>
</body>
</html>
