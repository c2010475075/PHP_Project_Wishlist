<?php
$handle = fopen ("gb.txt", "r"); // Datei öffnen zum Lesen

while ( $inhalt = fgets ($handle))
{
    echo $inhalt."<br>";
}
fclose($handle);
?>
