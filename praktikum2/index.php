<?php
include "orang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Praktikum 2<h3>
        <div>
            <?php
            $Ferdhian = new orang();
            $Ferdhian->nama = "Ferdhian";
            
            $Ferdhian->ucapsalam();

            echo "<br>";
            $Dhian = new orang();
            $Dhian->nama = "Dhian Kurnia Ferdiansyah";
            $Dhian->ucapsalam();
            ?>
        </div>     
</body>
</html>
