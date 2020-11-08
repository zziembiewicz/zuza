<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
     margin: auto;
     border: 2px solid black;
}
.baner{
    font-weight: 900;
    font-size: 19px
}
hr{
    border: 1px solid black;
}
</style>
</head>
<body>
    <table>
    <form method="POST">
    <tr>
    <td><div class="baner">Prostopadłościan<div></td>
    </tr>
    <tr>
    <td><img src=prosto.jpg></td>
    </tr>
    <tr>
    <td>
    <hr>
    </td>
    </tr>
    <tr>
    <td><div class="baner">Dane<div></td>
    </tr>
    <tr>
    <td><input type="number" name="a"  placeholder="a" value="<?php echo$_POST['a']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="number" name="b"  placeholder="b" value="<?php echo$_POST['b']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="number" name="c"  placeholder="c" value="<?php echo$_POST['c']?>" pattern="[0-9]"></td>
    </tr>
    <tr>
    <td><input type="submit" name="oblicz" value="Oblicz"></td>
    </tr>
    <tr>
    <td>
    <?php
    echo prost()
    ?>
    </td>
    </tr>
    <tr>
    <td><a href="3_zadanie_formularz_geometria.php">Powrót do strony głównej</a></td>
    </tr>
    </form>
    </table>
    <?php
    function prost(){
    if (isset($_POST['a'],$_POST['b'], $_POST['c'])){
        if (($_POST['a']==''||$_POST['b']==''||$_POST['c']=='')){
            echo "<br><h4>Podane dane muszą być liczbami!</h4>";
        }
        else if($_POST['a']<=0 || $_POST['b']<=0 || $_POST['c']<=0){
            echo "<br><h4>Podane liczby powinny być dodatnie</h4>";
        }
        else{
            require_once('./scripts/prostopadloscian.php');
        echo '<ul>';
        echo '<li>Pole:'.P_Prost($a,$b,$c).'cm<sup>2</sup></li>';
        echo '<li>Objętość:'.Obj_Prost($a,$b,$c).'cm<sup>3</sup></li>';
        echo '<li>Długość przekątnej:'.Dl_Prost($a,$b,$c).'cm</li>';
        echo '</ul>';
        }
    }
    }
    ?>
</body>
</html>
