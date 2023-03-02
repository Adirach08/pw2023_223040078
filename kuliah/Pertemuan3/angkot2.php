<?php 
$angkot1 = 1;
$jml_angkot = 10;
$angkot_rusak = 4;
    while ($angkot1 <= $jml_angkot - $angkot_rusak) {
        echo "Angkot no.$angkot1 beroperasi dengan baik. <br>";
        $angkot1 += 1;
    }

    for($angkot1 =7 ; $angkot1 <= 10; $angkot1++) {
echo "Angkot no.$angkot1 sedang rusak. <br>";
}

?>