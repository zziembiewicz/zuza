<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formularze</title>
  </head>
  <body>
<?php
//if (isset($_GET['surname']))

if (!empty($_GET['surname']))
{
  if (!empty($_GET['name']))
  {
  $name=$_GET['name'];
  $surname=$_GET['surname'];
  $name=trim(ucwords(strtolower($name)));
  $surname=trim(ucwords(strtolower($surname)));
  echo "imie i nazwisko: $name $surname <br>";
  echo "<a href='./5_1form.php\'>powrot do formularza </a>";
  }
}
else
{
  echo 'wypelnij formularz';
  echo<<<FORM
  <form method="get">
      <input type="text" name="name" autofocus><br>
      <input type="text" name="surname" autofocus><br><br>
      <input type="submit" value="wyslij"><hr>
  </form>
  FORM;

}



 ?>
  </body>
</html>
