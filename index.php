<?php
    /*
        Stampare stringa verde se la var PASS passata in GET = Boolean, altrimenti stampare stringa rossa
    */

    $pwd = $_GET['password'];

    if ($pwd == 'Boolean') {
        echo "<p style='color:green'>Puoi entrare</p>";
    } else {
        echo "<p style='color:red'>Non puoi entrare</p>";
    }
?>
