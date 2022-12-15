<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Time Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="calc.php" method="post">

    <div class="box">
            <label>File Size [MB]:</label>
            <input type="number" name="filesize" placeholder="[MB]" class="filesize"></input>
        <br>
        
        <div class="downloadspeed">
        <label>Download Speed: </label>
        <input type="number" name="downloadspeed" placeholder="[MiB]"></input>
        </div>

        <br>
        <button type="submit">Calculate</button>
        
        <div class="downloadtime">
        <label>Download Time:</label>
        
<?php

$fileSize = $_POST['filesize'];
$downloadSpeed = $_POST['downloadspeed'];
$downloadWhole = (($fileSize / $downloadSpeed)/60);
$downloadMin = floor($downloadWhole);
$downloadSec = floor(($downloadWhole - $downloadMin)*60);

echo "$downloadMin min $downloadSec sec";

?>
</body>
</html>
