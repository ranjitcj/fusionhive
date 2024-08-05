<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    include_once __DIR__ . '\..\..\..\config.php'; // Adjust the path as needed

    // Access the database connection
    $conn = $GLOBALS['db_connection'];

    if(isset($_COOKIE["user_name"])){
        $username=$_COOKIE["user_name"];
        // Prepare and bind parameters
        $title = $_POST['title'];
        $body = $_POST['body'];
        $main_body = $_POST['message'];
        $image = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];

        $img_data = addslashes(file_get_contents($image));
        // $sql = "UPDATE user SET fullname='$fullname',bio='$bio',image_name='$image_name',image_data='$img_data' WHERE username='$id' ";
        $sql = "INSERT INTO userpostreq (username, title, body, main_body, image_name, image_data,approved) VALUES ('$username','$title','$body','$main_body','$image_name', '$img_data','Retrieve')";
        if ($conn->query($sql) === TRUE) {
            header("Location: \header\userprofile\index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
}
?>
