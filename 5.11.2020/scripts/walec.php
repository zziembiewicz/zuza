<?php
if (isset($_POST['r'],$_POST['h'])){
    $r=$_POST['r'];
    $h=$_POST['h'];
    }
function P_Wal($r){
        $pI=3.14;
        return number_format(round($pI*pow($r,2),2),2,'.','');
    }
function Pb_Wal($r,$h){
        $pI=3.14;
        return number_format(round((2*$pI*$r*$h),2),2,'.','');
    }
function Pc_Wal($r,$h){
        return number_format(round((2*P_Wal($r) + Pb_Wal($r,$h)),2),2,'.','');
    }
function Obj_Wal($h,$r){
        return number_format(round((Pb_Wal($r,$h)*$h),2),2,'.','');
    }
?>
