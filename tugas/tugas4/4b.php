<?php 

$komponen = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];
// sort($komponen);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 - Array PHP</title>
</head>
<body>

<h2>Macam-macam perangkat keras komputer</h2>

<ol>
    <?php foreach($komponen as $k) { ?>
        <li><?= $k;  ?></li>
    <?php } ?>
</ol>

<h2>Macam-macam perangkat keras komputer baru</h2>

<ol>
    <?php 
    array_unshift($komponen,"Card Reader","Modem");
    sort($komponen);
    foreach ($komponen as $k) { ?>
        <li><?= $k;  ?></li>
    <?php } ?>

</ol>

    
</body>
</html>