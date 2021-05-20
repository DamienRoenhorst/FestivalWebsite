<?php require_once('../private/initialize.php');
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $telnr = $_POST["telnr"];
    $straat = $_POST["straat"];
    $huisnr = $_POST["huisnr"];
    $postcode = $_POST["postcode"];
    $woonplaats = $_POST["woonplaats"];

$sql = "SELECT * FROM gebruiker WHERE klantID =".$_SESSION["klantID"];
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if(!empty($voornaam) && $row["voornaam"] != $voornaam) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET voornaam='$voornaam' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}





if(!empty($achternaam) && $row["achternaam"] != $achternaam) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET achternaam='$achternaam' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}



if(!empty($email) && $row["email"] != $email) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET email='$email' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}


if(!empty($telnr) && $row["telnr"] != $telnr) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET telnr='$telnr' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}


if(!empty($straat) && $row["straat"] != $straat) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET straat='$straat' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}


if(!empty($huisnr) && $row["huisnr"] != $huisnr) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET huisnr='$huisnr' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}

if(!empty($postcode) && $row["postcode"] != $postcode) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET postcode='$postcode' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}


if(!empty($woonplaats) && $row["woonplaats"] != $woonplaats) {

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "UPDATE gebruiker SET woonplaats='$woonplaats' WHERE klantID =". $_SESSION["klantID"];

    $query = mysqli_query($db, $sql);
    header ("Location: profiel.php");
} else {
    header ("Location: profiel.php");
}
?>