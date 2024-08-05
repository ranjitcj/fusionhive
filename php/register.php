<?php
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['username'];
        $email = $_POST['email'];
        $epassword = $_POST['epassword'];
        $ecpassword = $_POST['ecpassword'];
    }
    include_once __DIR__ . '/../config.php'; // Adjust the path as needed

    // Access the database connection
    $conn = $GLOBALS['db_connection'];
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $sql = "INSERT INTO user(username, email, epassword, ecpassword) VALUES ('$user_name', '$email', '$epassword','$ecpassword')";
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        // header("Location: index.html");
        $unfpg=$user_name;
        setcookie("user_name",$unfpg, time() + 86400, "/");
        header("Location: \index.php");
        exit();
    }
    else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>