<?php
ini_set('mbstring.internal_encoding' , 'UTF-8');
$dbname="wp";
$dbhost="161.34.66.85";
$dbuser="sakura";
$dbpassword="5R8xQ/ftnMH9";

$dsn = "mysql:dbname=".$dbname.";host=".$dbhost.";charset=utf8";


try {
    $db = new PDO($dsn, $dbuser, $dbpassword);
    echo '1';
} catch (PDOException $e) {
    echo '2 ' . $e->getMessage();
    echo '<br><a href="index.php">戻る</a>';
    session_start();
    $_SESSION = array();
    exit;
}    

