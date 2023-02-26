
    <?php 
    $depan = "Hikmal";
    $belakang = "Ryvaldi";

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo  "Hikmal Ryvaldi <br>";
        } elseif ($i % 5 == 0) {
            echo "$belakang <br>";
        } elseif ($i % 3 == 0) {
            echo "$depan <br>";
        }
         else {
            echo "$i<br>";
        }
    }
     ?>
