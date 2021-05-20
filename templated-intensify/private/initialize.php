<?php
    // Assign file paths to PHP constants
    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory
    session_start();
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');
    
  

    define("WWW_ROOT", 'http://localhost/Periode3/FestivalWebsite/templated-intensify/public/');

     require_once('database.php');
    
    $db = db_connect();
    require_once('functions.php');
?>