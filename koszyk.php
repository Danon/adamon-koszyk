<?php
session_start();

if (isset($_SESSION['koszyk'])) {
    $products = $_SESSION['koszyk'];
    $message = '';
} else {
    $products = [];
    $message = 'Brak sesji';
}

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <title>Koszyk</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p><b>Zawartość koszyka</b></p>
<ul>
    <?php foreach ($products as $product): ?>
      <li>
          <?php echo htmlEntities($product); ?>
      </li>
    <?php endforeach; ?>
</ul>
<?php echo htmlEntities($message); ?>
<p>
  <a href="lista.php">Przejdź do listy produktów</a>
</p>
</body>
</html>
