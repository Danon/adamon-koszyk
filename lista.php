<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <title> koszyk zakupów </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<p>
  <b>lista artykułów</b>
</p>
<?php
if (isset($_POST['lista'])) {
    if (!empty($_session['koszyk'])) {
        $koszyk = array_unique(array_merge(
            unserialize($_SESSION['koszyk']),
            $_POST['lista']));

        $_session['koszyk'] = serialize($koszyk);
    } else {
        $_session['koszyk'] = serialize($_POST['lista']);
    }
    echo "<p>wybrane produkty zostały umieszczone w koszyku </p>";
}
?>

<form action="http://serwer2232156.home.pl/lista.php" method="post">
  <p><b><font size="4"><b> wybór produktu: </font></b><br>
    <select name="lista[]" multiple="multiple" size="9">
      <option value="monitor"> monitor </monitor>
      <option value="drukarka"> drukarka</option>
      <option value="klawiatura"> klawiatura</option>
      <option value="myszka"> myszka</option>
      <option value="głośniki"> głośniki</option>
      <option value="kamera_internetowa"> kamera_intermetowa</option>
      <option value="słuchawki"> słuchawki</option>
      <option value="stacja dvd"> stacja dvd</option>
      <option value="dysk twardy"> dysk twardy</option>
    </select></p>
  <p><input type="submit" value="wyślij"></p>
</form>
<p><a href="koszyk.php"> przejdz do koszyka </a></p>
</body>
</html>
