<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!-- admin style -->
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/header/admin/style.css">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom script -->
    <script src="/js/scripts.js"></script>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap"rel="stylesheet">
    <title>Admin Section - Manage Users</title>
</head>
<body>
    <?php
        include_once __DIR__ . '\..\..\..\adminredirect.php';
    ?>
    <!-- Admin page wrapper-->
    <div class="admin-wrapper">
        <!--left sidebar  -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="/header/admin/posts/index.php"><i class="fas fa-edit"></i> Manage Posts</a></li>
                    <li><a href="/header/admin/users/index.php"><i class="fas fa-user"></i> Manage Users</a></li>
                    <li><a href="/header/admin/topics/index.php"><i class="fas fa-folder"></i> Manage Topics</a></li>
                    <li><a href="/header/admin/user_req/index.php"><i class="fas fa-envelope"></i> Manage User Request</a></li>
                </ul>
            </div>
            <!--/left sidebar  -->
            <!-- admin content -->
            <div class="admin-content">
                <?php
                // Database connection parameters
                include_once __DIR__ . '\..\..\..\config.php'; // Adjust the path as needed

                // Access the database connection
                $conn = $GLOBALS['db_connection'];
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                // Fetch data from the database
                $sql = "SELECT * FROM userpostreq WHERE approved!='deleted' order by created_at desc";

                $result = $conn->query($sql);
                // Check if there are any records
                if ($result->num_rows > 0) {
                    echo "<div class='content'>";
                    echo "<h2 class='page-title'>Manage User Request</h2>";
                    echo "<table>";
                    echo "<thead>";
                    echo "<th>View</th>";
                    echo "<th>Title</th>";
                    echo "<th>Date</th>";
                    echo "<th colspan='3'>Action</th>";
                    echo "</thead>";
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tbody>";
                        $postid=$row["id"];
                        echo "<tr>";
                        echo "<td><a onclick='myFunct(" . $postid . ");'><i class='fa-solid fa-eye'></i></a></td>";

                        echo "<td>" . $row["title"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "<td>" . '<form action="post.php" method="post" enctype="multipart/form-data"><input type="hidden" name="id" value="' . $row["id"] . '"><input type="submit" name="submit" value="' . (($row["approved"]=="Approve")?"Retrieve":"Approve") . '" class="btn"></form>' . "</td>";
                        echo "<td>" . '<form action="postRemove.php" method="post" enctype="multipart/form-data"><input type="hidden" name="id" value="' . $row["id"] . '"><input type="submit" name="submit" value="Delete" class="del-btn"></form>' . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<div class='content'>";
                    echo "<h3>No Posts Request Yet</h3>";
                    echo "</div>";
                }
                // Close connection
                //$conn->close();
                ?>
            </div>
            <!-- admin content -->
        </div>
        <!-- /page  wrapper -->
        <script>
			function myFunct(postid) {
				// Redirect to single.php with the postid as a query parameter
				window.location.href = '/header/admin/user_req/postview.php?postid=' + encodeURIComponent(postid);
			}
        </script>
</body>
</html>

