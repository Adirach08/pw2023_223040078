<?php 
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function HitungLuasLingkaran($r){
        echo "Jari-Jari = $r cm <br>";
        echo "Luas Lingkaran =" . 3.14 * $r * $r ."cm <br>";
        echo "<hr>"; 
    }

    HitungLuasLingkaran(10);

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function HitungKelilingLingkaran($r){
        echo "Jari-Jari = $r cm <br>";
        echo "Keliling Lingkaran =" . 3.14 * $r * 2 ."cm <br>";
        echo "<hr>"; 
    }

    HitungKelilingLingkaran(20);
    
?>