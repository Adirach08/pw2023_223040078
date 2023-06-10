<?php 
    //array
    //membuat array
    $hari = array ('senin','selasa','rabu');
    $bulan = ['Januari','Febuari','Maret'];
    $myArray = ['Adi', 19 , false];
    $binatang = ['🐶','🐒','🐣','🐙'];

    //mencetak array
    //mencetakm 1 elemen di dalam array menggunakan echo
    echo $hari[2];
    echo "<hr>";

    var_dump ($hari);
    echo "<hr>";

    print_r($hari);
    echo "<hr>";

    print_r($binatang);
    echo "<hr>";

    //memanipulasi array
    //menambahkan elemen menggunakan index

    $hari[3] = 'Kamis';
    print_r($hari);
    echo "<hr>";

    //menambahkan elemen di akhir array menggunakan []

    $hari[] = "Jum'at";
    $hari[] = "Sabtu";
    print_r($hari);
    echo "<hr>";

    //Menambahkan elemen di akhir array menggunakan array_push

    array_push($bulan, 'April','Mei','Juni');
    print_r($bulan);
    echo "<hr>";

    //Menambahkan elemen di awal array menggunakan array_unshift

    array_unshift($binatang, "🐶","🐱","🐷");
    print_r($binatang);
    echo "<hr>";

    //Menggunakan elemen di belakang array menggunakan array_pop

    array_pop($hari);
    print_r($hari);
    echo "<hr>";

    //Menggunakan elemen di depan array menggunakan array_shift

    array_shift($bulan);
    print_r($bulan);
    echo "<hr>";
?>
