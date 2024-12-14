<?php
define("DB_HOST", "localhost");
define("DB_NAME", "mohamed_fitness");
define("DB_USER", "mhmediauoswebco_");
define("DB_PASS", "Hooyofc12!");
try {
    $Conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
    $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     $e->getMessage();
     exit();
}
?>
