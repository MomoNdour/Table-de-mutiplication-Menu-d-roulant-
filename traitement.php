<?php
    $nombre = $_POST["table"];//$nombre est le nombre que l'utilisateur a selectionné sur la liste
       echo "<h3>Table de ".$nombre."</h3>";
       echo "<table>";

 for($i=0;$i<11;$i++)//$i est le multiplicateur
    {
    $resultat = $nombre * $i;
    echo "<tr><td> ".$nombre." </td><td> x </td><td> ". $i." </td><td> = </td><td>".$resultat."</td></tr>";
    }
    echo "</table>";
?>