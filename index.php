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
    <form action="index.php" method="post">

    <div class="box">
        <table>
            
        <tr>
            <td><label>File Size [MB]:</label></td>
            <td><input type="number" name="filesize" placeholder="[MB]"></input></td>
        <td><select name="fileSizeType" class="fileSizeType">
            <option value="TB">MB</option>
            <option value="GB">GB</option>
            <option value="MB">TB</option>
            <option value="KB">KB</option>
            <option value="B">B</option>
        </select></td>
        <br>
        
        <label>Download Speed: </label>
        <input type="number" name="downloadspeed" placeholder="[MiB]"></input>
        <select name="downloadSpeedType" class="DownloadSpeedType">
            <option value="MiB">MiB</option>
            <option value="KiB">KiB</option>
        </select>

        </table>

        <br>
        <button type="submit">Calculate</button>
        
        <div class="downloadtime">
        <label>Download Time:</label>
        
        
        
        
        <?php

$fileSize = $_POST['filesize'];
$downloadSpeed = $_POST['downloadspeed'];
$downloadTime = $fileSize / $downloadSpeed;

echo <<<EOT
    $downloadTime
    </div>
    </div>
    EOT;

?>

</body>
</html>