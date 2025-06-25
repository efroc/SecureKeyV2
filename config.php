<?php
    /**====== Configurations =====**/
    ini_set('display_errors','on');
    error_reporting(E_ALL);

    $host = $_SERVER['HTTP_HOST'];
    $root = __DIR__."/";

    // path root
    define('HOST', $host."/projects/SecureKeyV2/");
    define('ROOT', $root);

    // path repositories
    define('CONTROLLER', ROOT."app/controllers/");
    define('MODEL', ROOT."app/models/");
    define('VIEW', ROOT."app/views/");
    define('ASSET', ROOT."public/assets/");

    // path storage
    define('STORAGE', ROOT."storage/");
?>