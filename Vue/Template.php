<?php
$style = "./Tools/style/Template.css";
$title = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $style ?>" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>
    <!-----------------------------------header -->
    <header>
        <div id="header">
            <div id="logoDivHeader">
                <img id="logoImage" src="./Tools/image/logoIcon.png">
                <p id="logoText">Equilibra</p>
            </div>
        </div>
    </header>
    <!-----------------------------------main -->
    <div id="main">
        <div id="contain">
            <?= $contenu ?>
        </div>
    </div>
    <!-----------------------------------footer -->
    <footer>
        <div id="footer">
            <div id="logoDivFooter">
                <img id="logoImage" src="./Tools/image/logoIcon.png">
                <p id="logoText">Equilibra</p>
            </div>
            <div id="footerText">
                <div id="footerTextLeft">
                    <p>EQUILIBRA SARL.</p>
                    <p>CHU Grenoble</p>
                    <p>34 Av. de l'Europe</p>
                    <p>38100 Grenoble</p>
                </div>
                <div id="footerTextRight">
                    <p>telephone : 06 01 11 12 00</p>
                    <p>mail : equilibra@gmail.com</p>
                    <p>suivez nous :</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>