<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Post</title>
    <link rel="stylesheet" href="/css/post1.css">
    <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        // Database connection parameters
        include_once __DIR__ . '\..\config.php'; // Adjust the path as needed

        // Access the database connection
        $conn = $GLOBALS['db_connection'];

        $sql = "SELECT user.image_name AS userpicname, user.image_data AS userpic, userpostreq.id AS postid, userpostreq.title, userpostreq.body, userpostreq.main_body, userpostreq.image_name AS post_image_name, userpostreq.image_data AS post_image_data FROM user INNER JOIN userpostreq ON user.username = userpostreq.username";

        // Fetch data from the database
        if(isset($_COOKIE["user_name"])){
            $username=$_COOKIE["user_name"];
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $postid=$row['postid'];
                $user_pic=$row['userpic'];
                $user_picname=$row['userpicname'];
                $user_post=$row['post_image_data'];
                $user_postname=$row['post_image_name'];
                $user_posttitle=$row['title'];

                echo "<div class='instagram-post'>";
                echo "<div class='post-header'>";
                echo "<img class='profile-pic' src='data:image/jpeg;base64," . base64_encode($user_pic) . "' alt='" . $user_picname . "'>";
                echo " <span class='username'>".$username."</span>";
                echo "</div>";

                echo "<img class='post-image' onclick='myFunct(" . $postid . ")' src='data:image/jpeg;base64," . base64_encode($user_post) . "' alt='" . $user_postname . "'>";

                echo "<div class='post-description'>";
                echo "<span class='username'>".$username."</span>";
                echo "<a class='description' >" . $user_posttitle . "</a>";
                echo "</div>";

                echo "<div class='post-actions'>";
                // echo "<button class='like-btn'>Like</button>";
                echo "<i class='fa-solid fa-heart' aria-hidden='true'><button class='like-btn'>Like</button></i>";
                echo " <i class='fa-solid fa-comment'><button class='comment-btn'>Comment</button></i>";
                echo "<i class='fa-solid fa-share'><button class='share-btn'>Share</button></i>";
                echo "</div>";

                echo "<div class='add-comment'>";
                echo "<input type='text' placeholder='Add a comment...'>";
                echo "</div>";

                echo "</div>";
            }
        }
    ?>
    <script>
        function myFunct(postid) {
            // Redirect to single.php with the postid as a query parameter
            window.location.href = 'single.php?postid=' + encodeURIComponent(postid);
        }
    </script>

</body>
</html>
