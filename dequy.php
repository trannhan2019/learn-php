<?php 
//tính tổng 1 đến 100 với vòng lặp for
function tong_for(int $n)
{
	$tong = 0;
	for ($i = 1; $i <= $n; $i++) {
		$tong += $i;
	}
	return $tong;
}
echo tong_for(100);
echo "<br> - kết quả vòng lặp for";
//tính tổng bằng đệ quy tuyến tính
function tong_dequy($n)
{
	if ($n == 1) {
		return $n;
	} else {
		return $n + tong_dequy($n-1);
	}
}
echo tong_dequy(100);
echo 'kết quả đệ quy tuyến tính';

//đệ quy nhị phân - có dùng 2 lần hàm đệ quy - tính dãy sô fibo
function fibo($n)
{
	if ($n <= 2) {
		return 1;
	} else {
		return (fibo($n-2) + fibo($n-1));
	}
}

echo fibo(10);
echo '<br> - Đệ quy nhị phân';

?>