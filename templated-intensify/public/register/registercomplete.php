<html>
    <body>
<?php 
    require_once('../../private/initialize.php');
?>
<?php
    // print_r($_POST);
    if(!empty($_POST['voornaam']) && 
    isset($_POST['tussenvoegsel']) && 
    !empty($_POST['achternaam']) && 
    !empty($_POST['email']) && 
    !empty($_POST['telnr']) && 
    !empty($_POST['straat']) && 
    !empty($_POST['huisnr']) && 
    !empty($_POST['postcode']) && 
    !empty($_POST['woonplaats']) && 
    !empty($_POST['wachtwoord'])){
        ?>
        
        <?php

            $voornaam = $_POST['voornaam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $email = $_POST['email'];
            $telnr = $_POST['telnr'];
            $straat = $_POST['straat'];
            $huisnr = $_POST['huisnr'];
            $postcode = $_POST['postcode'];
            $woonplaats = $_POST['woonplaats'];
            $wachtwoord = $_POST['wachtwoord'];

            // echo "$voornaam,$achternaam,$email";

            $sql = "INSERT INTO gebruiker SET 
            voornaam = '$voornaam',
            tussenvoegsel = '$tussenvoegsel',
            achternaam = '$achternaam',
            email = '$email',
            telnr = '$telnr',
            straat = '$straat',
            huisnr = '$huisnr',
            postcode = '$postcode',
            woonplaats = '$woonplaats',
            wachtwoord = '$wachtwoord'";

           // print_r($db);
           mysqli_query($db, $sql);

            if(mysqli_affected_rows($db) === 1){
                echo "<h1> Gebruiker $voornaam $achternaam is toegevoegd aan de database!</h1>";
            }

        ?>

    <?php } else {
        header("Location: register.php");
    } ?>

Klik <a href="../login/login.php"> hier</a> om in te loggen.
</body>
</html>