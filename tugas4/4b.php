<?php 
 $list = ['Mother Board','Processor','Hard Disk','PC Coller', 'VGA Card','SSD'];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
 </head>
 <body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach($list as $l) { ?>
        <li><?= $l; ?></li>
        <?php } ?>
    </ol>
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php
        array_unshift($list,'Card Reader','Modem');
        sort($list);
        ?>
        <?php foreach($list as $l) { ?>
        <li><?= $l; ?></li>
        <?php } ?>
    </ol>
 </body>
 </html>