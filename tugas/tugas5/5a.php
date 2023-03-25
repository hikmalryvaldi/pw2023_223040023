<?php 

$mahasiswa = [
    [
    "nama" => "Hikmal Ryv",
    "nrp" => "223040023",
    "email" => "hikmalryv@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "Chibi Ei.jpeg"
    ],
    [
    "nama" => "Ahmad Huda",
    "nrp" => "223040030",
    "email" => "ahmadhuda@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "albedo.jpeg"
    ],
    [
    "nama" => "Bintang Sepuh",
    "nrp" => "223040032",
    "email" => "bintangsepuh@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "barbara.jpeg"
    ],
    [
    "nama" => "Fauzan Dwi",
    "nrp" => "223040002",
    "email" => "fauzandwi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "gorou.jpeg"
    ],
    [
    "nama" => "Refin",
    "nrp" => "223040003",
    "email" => "refin@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "kaeya.jpeg"
    ],
    [
    "nama" => "daffa",
    "nrp" => "223040004",
    "email" => "daffa@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "keqing.jpeg"
    ],
    [
    "nama" => "novan",
    "nrp" => "223040005",
    "email" => "novan@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "kokomi.jpeg"
    ],
    [
    "nama" => "diaz",
    "nrp" => "223040024",
    "email" => "diaz@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "paimon.jpeg"
    ],
    [
    "nama" => "pramudya",
    "nrp" => "223040006",
    "email" => "pramudya@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "yoimiya.jpeg"
    ],
    [
    "nama" => "dimas",
    "nrp" => "223040007",
    "email" => "dimas@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "yoimiya1.jpeg"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ?>">
        </li>
        <li>Nama : <?= $mhs["nama"] ?></li>
        <li>NRP : <?= $mhs["nrp"] ?></li>
        <li>Email : <?= $mhs["email"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    </ul>
<?php endforeach; ?>





</body>
</html>