<?php 
$ob = '0312n';
$re = preg_match('/^[0-9]{9,11}$/', $ob);
var_dump($re);
echo $re;
 ?>