<?php
session_start();

if (isset($_POST['lista'])) {
    if (empty($_SESSION['koszyk'])) {
        $_SESSION['koszyk'] = $_POST['lista'];
    } else {
        $_SESSION['koszyk'] = array_unique(array_merge($_SESSION['koszyk'], $_POST['lista']));
    }
    $message = "Wybrane produkty zostały umieszczone w koszyku";
} else {
    $message = '';
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <title>Koszyk zakupów</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>
      .selection {
          font-size: 0.9em;
      }

      select {
          height: 200px;
      }
  </style>
</head>
<body>
<p>
  <b>Lista artykułów</b>
</p>
<p>
    <?php echo htmlEntities($message) ?>
</p>

<form method="POST" action="lista.php">
  <p class="selection">
    Wybór produktu:
  </p>
  <p>
    <select name="lista[]" multiple="multiple">
      <option value="monitor">monitor</option>
      <option value="drukarka">drukarka</option>
      <option value="klawiatura">klawiatura</option>
      <option value="myszka">myszka</option>
      <option value="głośniki">głośniki</option>
      <option value="kamera_internetowa">kamera intermetowa</option>
      <option value="słuchawki">słuchawki</option>
      <option value="stacja dvd">stacja dvd</option>
      <option value="dysk twardy">dysk twardy</option>
    </select>
  </p>
  <p>
    <button type="submit">Dodaj</button>
  </p>
</form>
<p><a href="koszyk.php">Przejdź do koszyka</a></p>
</body>
</html>
