<?php
$angka_1 = 0;
$angka_2 = 1;

echo "$angka_1 $angka_2";

for ($i=0; $i<20; $i++){
  $angka_jumlah = $angka_1 + $angka_2;
  echo " $angka_jumlah";
  $angka_1 = $angka_2;
  $angka_2 = $angka_jumlah;
}

?>
