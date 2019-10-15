<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 9-4-2019
 * Time: 13:30
 */

// post array uitlezen
$leefgebied = $_POST['leefgebied'];

// Data in database stoppen

// verbinding maken met database:
$dbc = mysqli_connect('localhost', 'yannick' ,'1234', 'apen', '8889') or die('error conecting');
// opdracht (query) schrijven
$query = "INSERT INTO leefgebied VALUES (0,'$leefgebied')";
//query uitvoeren
$result = mysqli_query($dbc,$query) or die('error query.');
// verbinding verbeken
mysqli_close($dbc);

// bevestigen dat data in database staat
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database<br>';
    echo $leefgebied. '<br>';

} else {
    echo 'sorry, er is iets misgegaan probeer het opnieuw.';
}