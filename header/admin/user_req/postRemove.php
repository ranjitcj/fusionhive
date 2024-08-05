<?php

include_once __DIR__ . '\..\..\..\adminredirect.php';

include_once __DIR__ . '../../../../config.php'; // Adjust the path as needed

// Access the database connection
$conn = $GLOBALS['db_connection'];


$id = $_POST['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $sql_insert = "DELETE FROM userpostreq WHERE id=$id";
$sql_insert = "UPDATE userpostreq SET approved='deleted' WHERE id=$id";
if ($conn->query($sql_insert) === TRUE) {
                header("Location: /header/admin/user_req/index.php");
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }


?>
