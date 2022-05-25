<?php
    try {
        $base = new PDO("mysql:host=localhost; dbname=facebook","root","");
    }
    catch(exception $e) {
        die("Erreur".$e->getMessage());
    }

?>                   