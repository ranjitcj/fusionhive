<?php
include_once __DIR__ . '\config.php'; // Adjust the path as needed

// Access the database connection
$conn = $GLOBALS['db_connection'];
if(isset($_COOKIE["email"])){
    $checkid = $_COOKIE["email"];
}
$sql = "SELECT * FROM user WHERE designation='admin' AND email='$checkid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Redirect if user exists
        continue;
        //exit(); // Ensure script stops here after redirect
    }
} else {
    // Redirect if user doesn't exist
    header("Location: /index.php");
    //exit(); // Ensure script stops here after redirect
}

// $conn->close(); // Closing connection if needed
?>
