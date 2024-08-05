<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">
    <!-- admin style -->
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/header/admin/stlyeforadd.css">
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
    <title>Admin Section - Add Topics</title>
</head>
<body>
    <?php
        include_once __DIR__ . '\..\..\..\adminredirect.php';
    ?>
    <div class="admin-wrapper">
        <!-- left sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="/header/admin/posts/index.php"><i class="fas fa-edit"></i> Manage Posts</a></li>
                <li><a href="/header/admin/users/index.php"><i class="fas fa-user"></i> Manage Users</a></li>
                <li><a href="index.php"><i class="fas fa-folder"></i> Manage Topics</a></li>
                <li><a href="/header/admin/user_req/index.php"><i class="fas fa-envelope"></i> Manage User Request</a></li>
            </ul>
        </div>
        <!-- /left sidebar -->
        <!-- admin content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topics</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Add Topic</h2>
                <form action="create.php" method="post">
                    <div>
                        <h3><label>Name</label></h3>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <h3><label>Description</label></h3>
                        <input type="text" name="Description" class="text-input">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big"><a href="/index.php" style="color: white; text-decoration: none;">Add Topic</a></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- admin content -->
    </div>
</body>
</html>
