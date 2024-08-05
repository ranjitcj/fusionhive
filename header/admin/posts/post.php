<?php

include_once __DIR__ . '\..\..\..\adminredirect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    include_once __DIR__ . '\..\..\..\config.php'; // Adjust the path as needed

    // Access the database connection
    $conn = $GLOBALS['db_connection'];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $title = $_POST['title'];
    $body = $_POST['body'];
    $main_body = $_POST['main_body'];
    $image = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $img_data = addslashes(file_get_contents($image));
    $sql = "INSERT INTO userpostreq (title, body, main_body, image_name, image_data) VALUES ('$title','$body','$main_body','$image_name', '$img_data')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
