<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 15-10-2019
 * Time: 10:32
 */

$dbc = mysqli_connect('localhost','yannick','1234','apen','8889') or die('error connecting');
$query = "SELECT * FROM aap";
$result = mysqli_query ($dbc , $query) or die('error querying');
?>
<html>
<head>
    <title>opdracht 2</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Bangers&display=swap');
        #wrapper{
            margin: auto;
            max-width: 1200px;
        }

        #header{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #list_content{
            display: flex;
            justify-content: center;
        }

        #list_content ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #list_content ul li a{
            text-decoration: none;
            color: #FF8400;
            font-family: 'Bangers', 'arial';
            font-size: 35px;
            font-weight: 700;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <span><img src="monkey-business.jpg"></span>
        <img src="monkey_swings.png">
    </div>
    <div id="list_content">
        <ul>
            <?php
            while ($row = mysqli_fetch_array($result)){
                echo "<li><a href='https://www.google.nl/search?q=" . $row['idaap'] . "&tbm=isch'>" . $row['soort'] . "</a></li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html
