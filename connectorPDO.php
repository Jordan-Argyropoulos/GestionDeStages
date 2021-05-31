<!DOCTYPE html>


<?php

function debug($text)
{
    ?><pre><?php print_r($text); ?></pre><?php
}


include("../config.php");


// $arrayMonths = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", 
//                   "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// foreach($arrayMonths as $value)
// {
//     $requete = "INSERT INTO mois_annee (nom_mois)
//             VALUES ($value)";
//     $pdo->exec($requete);
// }
// echo debug($value);
$requete = "SELECT * FROM etudiants";
$resObj = $pdo->query($requete);
$resTabInt = $resObj->fetchAll(PDO::FETCH_OBJ);

foreach($resTabInt as $value)
{
    $req = "SELECT * FROM etudiants";
    $pdo->exec($req);
}

foreach ($value as $values)
    {
        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Email</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "</td>" . "<td style='background-color:red; text-align:center;'>" . $values . "</td>" ;
                echo "</tr>" ;
            echo "</tbody>";
        echo "</table>";
    }?>






</html>