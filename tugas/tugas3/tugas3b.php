<?php 
    function UrutanAngka($angka){
        $mulai = 1;
        for ($i = 1; $i <= $angka; $i++){
            for ($j = 1; $j <= $angka; $j++){
                echo $mulai . " ";
                $mulai++;
            }
            echo "<br>";
        }
    }

    UrutanAngka(5);

?>