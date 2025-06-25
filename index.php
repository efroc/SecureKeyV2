<?php
    include_once("config.php");

    $request = $_GET['r'] ?? "home";
   
    switch($request) {
        case "home":
            include_once(CONTROLLER."home.php");
            break;

        default:
            http_response_code(404);
            exit;

    }
?>