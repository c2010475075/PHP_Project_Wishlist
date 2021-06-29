<?php
if($_POST['e1']<>"") // wenn das feld "Title" nicht leer ist
{
    $handle = fopen ("gb.txt","a"); // gb.txt wird von php automatisch erzeugt
   echo "Title:"; fwrite ($handle, $_POST['e1']);
    fwrite ($handle, "\r\n");
    fwrite ($handle, $_POST['e2']);
    fwrite ($handle, "\r\n");
    fwrite ($handle, $_POST['e3']);
    fwrite ($handle, "\r\n");
    fwrite ($handle, $_POST['e4']);
    fwrite ($handle, "\r\n");
    fclose($handle);
    echo "Danke-Ihre Daten wurden gespeichert";
    exit;
}
else { echo "Kein Eintrag! Bitte geben Sie ihre Daten vollständig ein!"; }
?>
