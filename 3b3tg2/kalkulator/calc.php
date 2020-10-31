<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
table{
     width: 500px;
     height: 100px;
     margin: auto;
     border: 2px ridge;
}
.baner{
    font-weight: 900;
}
    </style>
</head>
<body>

  <?php

      require_once './function.php';

      if(isset($_POST['submit']))
    	{
      if(is_numeric($_POST['x']) && is_numeric($_POST['y']))
     {
       $x = $_POST['x'];
       $y = $_POST['y'];
     }
     if (isset($_POST["sign"])){
            $option=$_POST["sign"];
             switch ($option){
               case 'sum':
               $result=sum($x,$y);
               break;
               case 'sub':
               $result=sub($x,$y);
               break;
               case 'mul':
               $result=mul($x,$y);
               break;
               case 'div':
               $result=div($x,$y);
               break;
               default:
               $result="select operation";
             }
           }
      }
  ?>

    <table>
    <tr><td><div class="baner">Calculator</div></td></tr>
    <form action="" method="POST">
    <tr>
    <td><input type="number" name="x" value="x" placeholder="x" pattern="[0-9]"></td>
    <td>
    <select name="sign">
    <option value="sum">+</option>
    <option value="min">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
    </select>
    </td>
    <td><input type="number" name="y" value="y" placeholder="y" pattern="[0-9]"></td>
    <td><input type="submit" name="submit" value="="> </td>
    <td><input type="text" name="result" disabled value= "<?php if(isset ($result)){echo $result;}?>"></td>

    <tr>
    </form>
    </table>

</body>
</html>
