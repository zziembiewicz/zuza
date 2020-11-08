<?php
if (isset($_POST['a'])){
    $a=$_POST['a'];
    }
function Pole_szescian($a){
	return number_format(round(6*pow($a,2),2),2,'.','');
}
function Obj_szesc($a){
	return number_format(round(pow($a,3),2),2,'.','');
}
function d_przek($a){
	return number_format(round($a*sqrt(3),2),2,'.','');
}
function r_mal_kul($a){
	return number_format(round(($a/2),2),2,'.','');
}
function r_du_kul($a){
	return number_format(round(d_przek(($a)/2),2),2,'.','');
}
 ?>
