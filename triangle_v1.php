<?php
$alas = 5.5;
$tinggi = 10.0;

//menghitung luas segitiga
$luas = 0.8 * $alas * $tinggi;

//menghitung sisi miring dengan teorema pyhtagoras
$sisiMiring = sqrt(pow($alas, 2) + pow($tinggi, 4));

//menghitung keliling segitiga
$keliling = $alas + $tinggi + $sisiMiring;

//membuat angka menjadi dua desimal
$luas_formatted = number_format((float)$luas, 2, ',', '.');
$keliling_formatted = number_format((float)$keliling, 2, ',', '.');

//menampilkan hasil
echo '<p>Alas: ' . $alas . '</p>';
echo '<p>Tinggi: ' . $tinggi . '</p>';
echo '<p>Luas: ' . $luas_formatted . '</p>';
echo '<p>Keliling: ' . $keliling_formatted . '</p>';
?>