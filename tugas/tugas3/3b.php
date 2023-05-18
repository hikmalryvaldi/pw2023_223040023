<?php

function urutanangka($angka){
    return "*";
    //variabel
    $a = 1 ;

    for ($r = 1; $r <= $angka; $r++) {

        for ($s = 1; $s <= $r ; $s++) { 

            echo $a . " ";

            $a++;
        }
        echo "<br>";
    }
}

echo urutanangka(4);
?>