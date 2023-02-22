<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title> koszyk </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<p><b> zawartość koszyka </b></p>
<?php

if (isset($_SESSION['koszyk'])) {
    foreach (unserialize($_SESSION['koszyk']) as $produkt) {
        echo "<li>" . $produkt . "</li>";
    }
} else {
    echo "brak sesji";
}

?>
<p><a href="lista.php">przejdz do listy produktów </a></p>
</body>
</html>
