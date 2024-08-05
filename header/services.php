<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $epassword = $_POST['epassword'];
}
include_once __DIR__ . '/../config.php'; // Adjust the path as needed


$conn = $GLOBALS['db_connection'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE designation='admin' AND email='$email' AND epassword='$epassword'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $userid=$row["email"];
        setcookie("email",$userid, time() + 3600, "/");
        header("Location: admin/user_req/index.php");
    }
} else {
    echo "Incorrect Password";
    header("Location: /header/services.html");
}
$conn->close();
?>
