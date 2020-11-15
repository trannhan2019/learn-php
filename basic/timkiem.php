<?php 
$mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
$can_tim = 67;
for ($i = 0; $i < count($mang) ; $i++) {
	if ($mang[i] == $can_tim) {
		echo 'trong mang co chua so can tim la: '.$mang[i].' nằm tại vị trí thứ '.$i. ' trong mang';
		break;
	}else {
		echo 'khong tim thay gia tri can tim trong mang';
	}

}

function timMax($mang)
{
	$max = $mang[0];
	for ($i = 1; $i <= count($mang)  ; $i++) {
		if ($mang[i] > $max) {
			$max = $mang[i];
		}
	}
	return $max;
}
 ?>