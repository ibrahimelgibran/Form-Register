<?php
//menangkap value form yang disimpan dalam sebuah variabel
$a = $_GET['nim'];
$b = $_GET['nama'];
$c = $_GET['asal'];
$d = $_GET['telp'];
$e = $_GET['email'];
$f = $_GET['password'];
$g = $_GET['jk'];
$h = $_GET['desk'];
$i = $_GET['hb1'];
$j = $_GET['hb2'];
$k = $_GET['hb3'];
$l = $_GET['hb4'];
$m = $_GET['hb5'];
$n = $_GET['hb6'];

//menampilkan dari variabel diatas dalam browser
echo $a.'<br />';
echo $b.'<br />';
echo $c.'<br />';
echo $d.'<br />';
echo $e.'<br />';
echo $f.'<br />';
echo $g.'<br />';
echo $h.'<br />';
echo $i.' &nbsp;&nbsp;&nbsp;' .$j. ' &nbsp;&nbsp;&nbsp;' .$k. '<br />';
echo $l.' &nbsp;&nbsp;&nbsp;' .$m. ' &nbsp;&nbsp;&nbsp;' .$n. '<br />';
?>