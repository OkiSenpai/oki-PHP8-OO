<?php

declare(strict_types=1);
include "Perso.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructeur</title>
</head>

<body>
    <h1>Le constructeur </h1>
    <?php
    $perso1 = new Perso("Oki", " God");
    $perso2 = new Perso("Sulaiman", " Wolf");


    var_dump($perso1, $perso2)
        ?>
</body>

</html>