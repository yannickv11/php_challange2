<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beheren</title>

</head>
<style>
    #wrapper{
        margin: auto;
        max-width: 1200px;
    }

    img {
        display: block;
        margin: auto;
    }
    table {
        margin: auto;
        width: 250px;
    }

    table, tr , td , th {
        border: solid 1px black;
        border-collapse: collapse;
        padding: 20px;
    }
</style>
<body>
<div id="wrapper">
    <div id="header">
        <span><img src="monkey-business.jpg"></span>
        <img src="monkey_swings.png">
    </div>
    <?php
    //include ('opdracht8DB.php');

    // 1. Connectie maken met de DB
    $dbc = mysqli_connect('localhost','yannick','1234','apen','8889') or die('error connecting');
    //2. Kijken in de database en alle mailadressen tevoorschijn halen
    $query = "SELECT * FROM aap 
JOIN aap_has_leefgebied ON aap_has_leefgebied.idaap = aap.idaap 
JOIN leefgebied ON leefgebied.idleefgebied = aap_has_leefgebied.idleefgebied
 ";
    $result = mysqli_query($dbc,$query) or die('error query');
    echo '<table>';
    //3. Loopje waarin alle mailadressen in beeld worden gebracht
    while ($row = mysqli_fetch_array($result)) {
        $naam = $row['soort'];
        $omschrijving = $row['omschrijving'];


        echo '<tr>';
        echo "<td>$naam</td> <td> $omschrijving </td>";
        echo '</tr>';
    }
    echo '</table>';
    ?>
</div>
</body>
</html>