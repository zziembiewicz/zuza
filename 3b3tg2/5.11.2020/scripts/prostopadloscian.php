<?php
if (isset($_POST['a'], $_POST['b'], $_POST['c'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    }

    function P_Prost($a,$b,$c){
        return number_format(round(2*(($a*$b)+($a*$c)+($b*$c)),2),2,'.','');
    }
        function Obj_Prost($a,$b,$c){
        return number_format(round(($a*$b*$c),2),2,'.','');
    }
        function Dl_Prost($a,$b,$c){
        return number_format(round(sqrt(pow($a,2)+pow($b,2)+pow($c,2)),2),2,'.','');
    }
?>
