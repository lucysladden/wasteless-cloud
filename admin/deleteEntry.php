<?php
$db_host   = '192.168.56.13';
$db_name   = 'wastelessdb';
$db_user   = 'webuser';
$db_passwd = 'wastelessdb_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$conn = new PDO($pdo_dsn, $db_user, $db_passwd);
if (isset($_POST['delete'])) {
    $deleteQuery = "DELETE FROM leftovers WHERE leftovers_ID='" . $_POST['leftovers_ID'] . "';";
    if (isset($conn)) {
        $error = $conn->query($deleteQuery);
    }
    header("Location: admin.php");
    exit;
}