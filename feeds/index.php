<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/header/userprofile/pfpleftu.css">
    <link rel="stylesheet" href="/css/post1.css">
    <style>h1{text-align:left !important;}</style>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>User Profile</title>
</head>
<body>
    <?php
      // Database connection parameters
      include_once __DIR__ . '\..\config.php';
      $usernamefeeds = $_GET['usernamefeeds'];
      $sql = "SELECT * FROM user WHERE username='$usernamefeeds'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $fullname=$row['fullname'];
      $bio=$row['bio'];
      $image_name = $row['image_name'];
      $image_data = $row['image_data'];
    ?>
    <div class="profile-wrapper">
        <div class="container">
          <div class="header-container" style="background:url('/header/userprofile/background_pp.jpg')">
              <!-- <img src="/background_pp.jpg" alt="" class="header-image" style="z-index: 0;"/> -->
              <div class="header" style="z-index: 2;">
                <svg fill="#ffffff" style="opacity:0;" eight="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg" class="header-icon">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
                <svg fill="#ffffff" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg" class="u-float-right header-icon">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                  <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
                <h1 class="main-heading">
                <?php
                  echo "$usernamefeeds";
                ?>
                </h1>
                <span class="tag" >+ Add</span>
              </div> <!-- END header -->
            </div>

            <div class="overlay-header"></div>

            <div class="body">
              <?php
                if (empty($image_data)){
                  echo "<img src='/images/defaultuserimage.jpg' alt='userpfp' class='body-image'>";
                }else
                  echo "<img src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='' class='body-image'>";
              ?>
              <span class="body-stats">Followers <span>0</span></span>
              <span class="body-stats">Following <span>0</span></span>
              <div class="u-clearfix"></div>
              <div class="body-info">
                <h1>
                <?php echo $fullname; ?>
                </h1>
                <p>
                  <?php echo $bio; ?>
                </p>

              </div>
            </div>

          </div>

        <!-- Posts Section -->
        <div class="posts-section" id="posts-section">
          <!-- User posts will be displayed here -->
          <?php
            // Database connection parameters
            include_once __DIR__ . '\..\config.php'; // Adjust the path as needed
            $usernamefeeds = $_GET['usernamefeeds'];
            $sqld = "SELECT user.image_name AS userpicname, user.image_data AS userpic, userpostreq.id AS postid, userpostreq.title, userpostreq.body, userpostreq.main_body, userpostreq.image_name AS post_image_name, userpostreq.image_data AS post_image_data, userpostreq.approved, userpostreq.created_at FROM user INNER JOIN userpostreq ON user.username = userpostreq.username WHERE user.username='$usernamefeeds' order by created_at desc";

            // Fetch data from the database
            $result = $conn->query($sqld);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $postid=$row['postid'];
                    $user_pic=$row['userpic'];
                    $user_picname=$row['userpicname'];
                    $user_post=$row['post_image_data'];
                    $user_postname=$row['post_image_name'];
                    $user_posttitle=$row['title'];
                    $user_poststatus=$row['approved'];
                    echo "<div class='instagram-post'>";
                    echo "<div class='post-header'>";

                    echo "<img class='profile-pic' src='data:image/jpeg;base64," . base64_encode($user_pic) . "' alt='" . $user_picname . "'>";
                    echo "<span class='username'>".$usernamefeeds."</span>";
                    echo "</div>";

                    echo "<img class='post-image' onclick='myFunct(" . $postid . ")' src='data:image/jpeg;base64," . base64_encode($user_post) . "' alt='" . $user_postname . "'>";
                    echo "<div class='post-description'>";
                    echo "<span class='username'>".$usernamefeeds."</span>";
                    echo "<a class='description' >" . $user_posttitle . "</a>";
                    echo "<h3 class='btn read-more'>".$user_poststatus."</h3>";
                    echo "</div>";
                    echo "<div class='post-actions'>";
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
                  window.location.href = '/post/single.php?postid=' + encodeURIComponent(postid);
              }
          </script>
        </div>
        <!-- /Posts Section -->

        <script>
          function myFunctionbio() {
                    window.location.href = '/header/userprofile/editforuser/create.php';
                }
          function addPost() {
              window.location.href = '/header/userprofile/addpostforuser/create.php';
          }
        </script>
    </div>

</body>
</html>
