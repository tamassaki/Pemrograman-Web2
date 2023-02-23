<?php 
// ini sebuah komentar (Ctrl + /)
/* ini juga sebuah komentar panjang */
# ini komentar pake kres

// echo "Hello World <br>";
// echo 'Hello World <br>';

// print_r("Tamassaki Khoiriyah <br>");

// var_dump("STT Nurul Fikri");

// Membuat variabel User 
// variabel adalah tempat untuk menampung nilai menggunakan dolar
$nama = "Adam Malik";
$umur = 18;
$berat = 70.2;
$mahasiswa = true;

echo "Nama saya adalah $nama<br>";
echo "Umur saya adalah $umur<br>";
echo "Berat badan saya mencapai $berat kg<br>";

echo "<br>";


// Membuat variabel Sistem 
// variabel udh ditentuin sm php, cukup memanggil
// echo 'Doumen root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];



// Membuat variabel Konstanta (tetap ga bisa ganti2)
define('PHI', 3.14);
$jari = 10;
$luas = PHI * $jari *$jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas<br>";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";

// membuar array numerik (kumpulan dari nilai2)
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0];
// echo "Jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}

?>