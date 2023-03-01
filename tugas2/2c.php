<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>
    .kotak {
        width:50px;
        height:50px;
        font-size: 20px;
        font-weight: bold;
        text-align:center;
        line-height:50px;
        color: white;
        background-color: red;
        border:1px solid black;
        display:inline-block;
    }
</style>
</head>
<body>
    <?php
$baris_kotak = 10;

for ($a = $baris_kotak; $a >= 1; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo "<div class='kotak'>" . $b . "</div>";
    }
    echo "<br>";
}
?>
</body>
</html>