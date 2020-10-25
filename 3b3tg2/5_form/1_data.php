<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dane</title>
  </head>
  <body>
    <h4>dane uzytkownika</h4>
    <form action="1_data_show.php" method="get">
      <input type="text" name="login" placeholder="login" autofocus><br><br>
      <input type="password" name="pass" placeholder="hasło"><br><br>
      <h4>ulubiony kolor</h4>
      <input type="radio" name="color" value="r">czerwony
      <input type="radio" name="color" checked value="g">zielony
      <input type="radio" name="color" value="b">niebieski<br><br>
      <input type="checkbox" name="regulamin" >zatwierdzenie regulaminu<br><br>
      <input type="submit" value="wyslij dane" >
    </form>
  </body>
</html>
