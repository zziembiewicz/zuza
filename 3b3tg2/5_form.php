<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularze</title>
  </head>
  <body>
<?php
//if (isset($_GET['surname']))    sprawdza czy znienna jest zadeklarowana i jej wartosc jest rozna od null.

if (!empty($_GET['surname']))   //!empty określa czy zmienna jest pusta   $_GET tablica/zmienna odczytuje wartosc opcji jakie mamy w adresie
{

  $surname=$_GET['surname'];
  echo "wprowadziles dane: $surname <br>";
  echo "<a href='./5_form.php\'>powrot do formularza </a>";
}
else
{
  echo 'wypelnij formularz';
  echo<<<FORM
  <form method="get">
      <input type="text" name="surname" autofocus><br><br>
      <input type="submit" value="wyslij"><hr>
  </form>
  FORM;
}



 ?>
  </body>
</html>
