<?php
function Pole_Wale($r){
	$pI=3.14;
	return number_format(round($pI*pow($r,2),2),2,'.','');
}
function Polepb_Wale($r,$h){
	$pI=3.14;
	return number_format(round((2*$pI*$r*$h),2),2,'.','');
}
function Polepc_Wale($r,$h){
	return number_format(round((2*Pole_Wale($r) + Polepb_Wale($r,$h)),2),2,'.','');
}
function Obje_Wale($h,$r){
	return number_format(round((Polepb_Wale($r,$h)*$h),2),2,'.','');
}
 ?>
