<?php
// membuat variable
// $namaVariable = nilaiVariable;
$name = "Rizwan Nur Saputra";
$age = 19;
$weight = 54.5;

// menampilkan variable
echo "Name : " . $name;
echo "<br>Age : $age";
echo "<br>Weight : $weight";

// menampilkan variable sistem
echo "<br>Dokumen Root : " . $_SERVER['DOCUMENT_ROOY'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable constant
// Define('namaVariable',nilaiVariable)
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
 
echo "<br>luas lingkaran : $luas";