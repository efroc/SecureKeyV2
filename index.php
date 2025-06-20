<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once("src/classes/Traitement.php");
    $traitement = new Traitement("data.txt");

    echo($traitement->getPath());
    echo("<br>");
    echo($traitement->read());
    echo("<br>");

    $traitement->createFile("data2.txt");
    $traitement->write("hello");

    echo($traitement->getPath());
    echo("<br>");
    echo($traitement->read());
    echo("<br>");
    $traitement->add("its me");
    echo("<br>");
    echo($traitement->read());



?>