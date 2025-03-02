<?php
function hitungLuasLingkaran($jari_jari)
{
    return pi() * pow($jari_jari, 2);
}

function hitungKelilingLingkaran($jari_jari)
{
    return 2 * pi() * $jari_jari;
}

$jari_jari_luas = 10;
$jari_jari_keliling = 20;

echo "<h4>Menghitung Luas Lingkaran</h4>";
echo "<p>Jari-jari = $jari_jari_luas cm.</p>";
echo "<p>Luas lingkaran = " . round(hitungLuasLingkaran($jari_jari_luas), 1) . " cm<sup>2</sup></p>";
echo "<hr>";

echo "<h2>Menghitung Keliling Lingkaran</h2>";
echo "<p>Jari-jari = $jari_jari_keliling cm.</p>";
echo "<p>Keliling lingkaran = " . round(hitungKelilingLingkaran($jari_jari_keliling), 1) . " cm</p>";
echo "<hr>";
