<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <h4>dane uzytkownika</h4>
    <!--<form  action="./2_form_dane.php" method="post" novalidate>-->
    <form  action="./2_form_dane.php" method="post" novalidate>
      <input type="text" name="name" placeholder="nazwisko" autofocus required pattern="[a-zA-ZżźćśńłąęóŻŹŁŚĆĘĄÓŃ]{2,5}" autocomplete="off"><br><br>
<select name="gender">
  <option hidden disable selected>wybierz opcje</option>
  <option value="m">Mężczyzna</option>
  <option value="w">Kobieta</option>
<!--  <option value="w" selected>Kobieta</option>-->
</select><br><br>
      <input type="submit" value="wyslij formularz">
    </form>
  </body>
</html>
