<?php
$db_host   = 'wasteless-db-2.cqfifwed6h5w.us-east-1.rds.amazonaws.com';
$db_name   = 'wasteless-schema';
$db_user   = 'admin';
$db_passwd = 'password1#';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$conn = new PDO($pdo_dsn, $db_user, $db_passwd);
if (isset($_POST['delete'])) {
    $deleteQuery = "DELETE FROM leftovers WHERE leftovers_ID='" . $_POST['leftovers_ID'] . "';";
    if (isset($conn)) {
        $error = $conn->query($deleteQuery);
    }
    header("Location: index.php");
    exit;
}