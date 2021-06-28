<?php
if($_POST['e1']<>"") // wenn das feld "eintrag" nicht leer ist
{
    $handle = fopen ("gb.txt","a"); // gb.txt wird von php automatisch erzeugt
    fwrite ($handle, $_POST['e1']);
    fwrite ($handle, "\r\n");
    fclose($handle);
    echo "Danke-Ihre Daten wurden gespeichert";
    exit;
}
else { echo "Kein Eintrag"; }
?>
