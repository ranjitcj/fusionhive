<?php
$unfpg = "";
$email = "";
$epassword = "";
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $epassword = $_POST['epassword'];
}
include_once __DIR__ . '/../config.php'; // Adjust the path as needed

// Access the database connection
$conn = $GLOBALS['db_connection'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE email='$email' AND epassword='$epassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $unfpg= $row["username"] ;
        setcookie("user_name",$unfpg, time() + 86400, "/");
        header("Location: \index.php");
    }
} else {
    echo "";
}
$conn->close();
?>