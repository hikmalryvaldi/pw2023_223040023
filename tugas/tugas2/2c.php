<style>
    .style {
        display: inline-block;
        background-color: salmon;
        width: 50px;
        height: 50px;
        border: 1px solid black;
        line-height: 50px;
        text-align: center;
    }
</style>

<?php 
    // variabel
    $s = 1;
    $pola = 10;

    // Buat Pola
    for ($i = $pola; $i >= $s; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='style'>$j</div>";
        }
        echo "<br>";
    }
?>
