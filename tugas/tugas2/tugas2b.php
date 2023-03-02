<?php
    echo "<table>";

    for ($i = 1; $i <= 100; $i++){
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++){
            echo "<td> $j </td>";
        }
        echo "</tr>";
        }
    echo "</table>"
?>