<?php
#Membuat Fungsi
function hitungLuasLingkaran($jari)
{
    $pi = 3.14;
    $luasLingkaran = $pi * $jari * $jari;
    return $luasLingkaran;
}
#Memanggil Fungsi
echo hitungLuasLingkaran(5);
echo "<br>";
echo hitungLuasLingkaran(7);
echo "<br>";
echo hitungLuasLingkaran(9);