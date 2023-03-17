<?php
$mahasiswa = [
    [
        "nama" => "Shandika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Ujang Pertama",
        "nrp" => "043040011",
        "email" => "ujangpertama@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Asep Kedua",
        "nrp" => "043040022",
        "email" => "asepkedua@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Dodo Ketiga",
        "nrp" => "04304033",
        "email" => "dodoketiga@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Usep Keempat",
        "nrp" => "043040044",
        "email" => "usepkeempat@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Budi Kelima",
        "nrp" =>"043040055",
        "email" => "budikelima@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Tatang Keenam",
        "nrp" => "043040066",
        "email" => "tatangkeenam@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Salman Ketujuh",
        "nrp" => "043040077",
        "email" => "salmanketujuh@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Alfi Kedelapan",
        "nrp" => "043040088",
        "email" => "alfikedelapan@unpas.ac.id",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Rizi Kesembilan",
        "nrp" => "043040099",
        "email" => "rizikesembilan@unpas.ac.id",
        "jurusan" => "Teknik Informatika"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m) :?>
    <ul>
        <li>Nama :<?= $m["nama"] ?></li>
        <li>NRP :<?= $m["nrp"]?></li>
        <li>Email :<?= $m["email"]?></li>
        <li>Jurusan :<?= $m["jurusan"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>