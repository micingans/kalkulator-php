<?php
/*
ngotak anjing kalo mau rekod
*/

echo "###################################################\n";
echo "#                  Kalkulator                     #\n";
echo "#                Coded By Micin                   #\n";
echo "###################################################\n";
echo "1. Penjumlahan\n";
echo "2. Pengurangan\n";
echo "3. Perkalian\n";
echo "4. Pembagian\n";
echo "Pilih : ";
$pil = trim(fgets(STDIN));
if ($pil == "1") {
	system(clear);
	echo "Bilangan Pertama : ";
	$a = trim(fgets(STDIN));
	echo "Bilangan Kedua : ";
	$b = trim(fgets(STDIN));
	$c = $a + $b;
	echo "Hasil : $c\n";
} elseif ($pil == "2") {
	system(clear);
	echo "Bilangan Pertama : ";
	$a = trim(fgets(STDIN));
	echo "Bilangan Kedua : ";
	$b = trim(fgets(STDIN));
	$c = $a - $b;
	echo "Hasil : $c\n";
} elseif ($pil == "3") {
	system(clear);
	echo "Bilangan Pertama : ";
	$a = trim(fgets(STDIN));
	echo "Bilangan Kedua : ";
	$b = trim(fgets(STDIN));
	$c = $a * $b;
	echo "Hasil : $c\n";
} elseif ($pil == "4") {
	system(clear);
	echo "Bilangan Pertama : ";
	$a = trim(fgets(STDIN));
	echo "Bilangan Kedua : ";
	$b = trim(fgets(STDIN));
	$c = $a / $b;
	echo "Hasil : $c\n";
} else {
	echo "Tidak ada pilihan lain selain aku >_<\n";
}

?>