<?php 

$film = [
    [
        'poster' =>  '1.jpg',
        'judul' => "The Last Of Us",
        'tahun' =>  '2023',
        'genre' =>['Action,','Adventure,','Drama'],
        'pemeran utama' =>['Pedro Pascal,','Bella Ramsey,','Anna Torv'],
        'sutradara' =>['Neil DruckmannCraig,',' Mazin']
    ],
    [
        'poster' => '2.jpg',
        'judul' => "Game Of Thrones",
        'tahun' => '2019',
        'genre' =>['Action,','Adventure,','Drama'],
        'pemeran utama' =>['Emilia Clarke,','D.B.Weiss'],
        'sutradara' =>['David Benioffd.B.,',' Weiss']
    ],
    [
        'poster' => '3.jpg',
        'judul' => "Your Name",
        'tahun' => '2016',
        'genre' =>['Animation,','Drama,','Fantasy'],
        'pemeran utama' => ['Ryunosuke Kamiki,','Mone Kamishiraisi,','Ryo Narita'],
        'sutradara' => ['Makoto Shinkai']
    ],
    [
        'poster' => '4.jpg',
        'judul' => "Weatring With You",
        'tahun' => '2019',
        'genre' =>['Animation,','Drama,','Fantasy'],
        'pemeran utama' =>['Kotaro Daigo,','Nana Mori,','Tsubasa Honda'],
        'sutradara' => ['Makoto Shinkai']
    ],
    [
        'poster' => '5.jpg',
        'judul' => "Suzume",
        'tahun' => '2022',
        'genre' =>['Animation,','Action,','Adventure'],
        'pemeran utama' =>['Nanoka Hara,','Hokuto Matsumura,','Eri Fukatsu'],
        'sutradara' => ['Makoto Shinkai']
    ]

    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <style>
        h2{
            color: blue;
            font-size: 24px;
            text-align: center;
        }
        li{
            font-family: Arial-sans-serif;
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }
        li span{
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<h2>Daftar Film</h2>
<?php foreach($film as  $f){ ?>
    <ul>
        <li><img src="img/<?= $f['poster'];?>"></li>
        <li>Judul :<?= $f['judul'];?></li>
        <li>Genre:
            <?php foreach ($f['genre'] as $g){
                echo $g;
            } ?>
        </li>
        <li>Pemeran Utama :
            <?php foreach ($f['pemeran utama'] as $p) {
                echo $p;
            }?>
       
        </li>
        <li>Sutradara :
            <?php foreach ($f['sutradara'] as $s) {
                echo $s;
            }?>
       
        </li>
    </ul>
   
 
<?php } ?>
</body>
</html>