<?php

function getGegevensKlant($klantID) {
    global $db;
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "SELECT * FROM gebruiker WHERE KlantID = " . $klantID;

    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);

    return $result;
}

function getTicket($kaartenType) {
    global $db;
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $sql = "SELECT * FROM tickets WHERE ticketID = " . $kaartenType;
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}

function getBestellingen($klantID) {
    global $db;
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $sql = "SELECT * FROM bestellingen WHERE klantID = " . $klantID;
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}


?>