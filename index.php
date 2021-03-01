<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
	
    <meta charset="utf-8">
    <title>Colegio Andel</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br>Has entrado correctamente
	  <a href="Principal.php">
	  Entra en la pagina</a>
      <a href="logout.php">
        Desconectado
      </a>
    <?php else: ?>
      <h1>Entra o Registrate</h1>

      <a href="login.php">Entra</a> o
      <a href="signup.php">Registrate</a>
    <?php endif; ?>
  </body>
</html>
