<?php
    require_once('../../private/initialize.php');
?>
<?php

            $ticket = $_POST['ticketID'];
            $klantID = $_SESSION['klantID'];
            $aantal = $_POST['aantal'];
            $gegevensKlant = getGegevensKlant($klantID);
            $kaartKlant = getTicket($ticket);
            $type = $kaartKlant = getTicket($ticket);
            $prijs = $kaartKlant["ticketprijs"] * $aantal;
            $ticketType = $kaartKlant["ticketnaam"];


            $sql = "INSERT INTO bestelling SET
            ticketID = '$ticket',
            klantID = '$klantID',
            Totaal = '$prijs',
            aantal = '$aantal'
            ";
        
            
            // voegt alle bovenstaande toe aan bestellingen in het DB
          
           mysqli_query($db, $sql);
          header("Location: ../profiel.php");
?>
<br>Klik <a href="../profiel.php">hier</a> om uw bestellingen en profiel te bekijken.
</body>
</html>