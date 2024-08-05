<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/header/userprofile/profileposts.css"> -->
    <link rel="stylesheet" href="pfpleftu.css">
    <link rel="stylesheet" href="/css/post1.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>User Profile</title>
    <style>h1{text-align:left !important;}
    .post-cards {
    /* grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); */
    grid-template-columns: repeat(3,1fr);
    gap: 0;
}
    </style>
</head>
<body>
    <?php
    // Database connection parameters
    include_once __DIR__ . '\..\..\config.php';
    if(isset($_COOKIE["user_name"])){
      $username=$_COOKIE["user_name"];
    }
    $sql = "SELECT * FROM user WHERE username='$username' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $fullname=$row['fullname'];
        $bio=$row['bio'];
        $image_data=$row['image_data'];
      }
    }
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
                <a href="/index.php">
                  <svg fill="#ffffff" height="18" viewBox="0 0 547.596 547.596" width="18" xmlns="http://www.w3.org/2000/svg" class="u-float-right header-icon">
                    <g>
                      <path d="M540.76,254.788L294.506,38.216c-11.475-10.098-30.064-10.098-41.386,0L6.943,254.788
                        c-11.475,10.098-8.415,18.284,6.885,18.284h75.964v221.773c0,12.087,9.945,22.108,22.108,22.108h92.947V371.067
                        c0-12.087,9.945-22.108,22.109-22.108h93.865c12.239,0,22.108,9.792,22.108,22.108v145.886h92.947
                        c12.24,0,22.108-9.945,22.108-22.108v-221.85h75.965C549.021,272.995,552.081,264.886,540.76,254.788z"/>
                    </g>
                  </svg>
                </a>
                <h1 class="main-heading">
                <?php
                  echo "$username";
                ?>
                </h1>
                <span class="tag" >+ Add</span>
              </div>
            </div>

            <div class="overlay-header"></div>

            <div class="body">
              <?php
                if (empty($image_data)){
                  echo "<img src='defaultuserimage.jpg' alt='userpfp' class='body-image'>";
                }else
                  echo "<img src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='' class='body-image'>";
              ?>

              <!-- <img src="https://s17.postimg.cc/xcbukrwdr/Hugh_Jackman_f.jpg" alt="Hugh Jackman" class="body-image" /> -->
              <div class="body-action-button u-flex-center" onclick="addPost()">
                <svg fill="#ffffff" height="28" viewBox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                  <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
              </div>
              <div class="body-action-button u-flex-center" style="top:-82px;right:65px;" onclick="myFunctionbio()">
                 <svg fill="#fff" style="transform:scale(.5);color:white;" height="400px" width="400px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.001 502.001" xml:space="preserve">
                    <g>
                      <g>
                        <g>
                          <path d="M489.809,32.002l-19.797-19.798C462.142,4.333,451.679,0,440.551,0s-21.59,4.333-29.459,12.202l-14.99,14.99
                            l-1.959-1.959c-3.905-3.904-10.235-3.905-14.143,0L62.146,343.088l0.011,0.004c-0.911,0.91-1.658,1.992-2.169,3.215
                            l-29.102,69.719L0.782,488.148c-1.562,3.742-0.71,8.056,2.157,10.923c1.913,1.914,4.472,2.93,7.073,2.93
                            c1.297,0,2.605-0.252,3.851-0.772l72.123-30.105c0.002-0.001,0.004-0.002,0.005-0.003l69.712-29.099
                            c1.223-0.51,2.305-1.257,3.215-2.168l0.004,0.011L476.778,122.01c1.875-1.875,2.929-4.419,2.929-7.071
                            c0-2.652-1.054-5.196-2.929-7.071l-1.959-1.959l14.99-14.989C506.052,74.676,506.052,48.246,489.809,32.002z M28.611,473.399
                            L43.596,437.5l20.915,20.914L28.611,473.399z M84.466,450.085l-32.541-32.54l20.772-49.763l61.532,61.531L84.466,450.085z
                            M151.852,418.65L83.36,350.159l271.839-271.84l68.492,68.492L151.852,418.65z M437.834,132.669l-68.492-68.492l17.73-17.73
                            l68.492,68.492L437.834,132.669z M475.666,76.776L460.822,91.62l-50.431-50.432l14.844-14.844
                            c4.091-4.091,9.53-6.344,15.316-6.344s11.227,2.253,15.317,6.344l19.797,19.797C484.111,54.588,484.111,68.33,475.666,76.776z"/>
                          <path d="M255.258,199.397L110.627,344.029c-3.905,3.905-3.905,10.237,0,14.143c1.953,1.953,4.512,2.929,7.071,2.929
                            s5.118-0.977,7.071-2.929l144.632-144.633c3.905-3.905,3.905-10.237,0-14.142C265.495,195.492,259.165,195.492,255.258,199.397z"
                            />
                          <path d="M300.255,154.4l-18.213,18.213c-3.905,3.905-3.905,10.237,0,14.143c1.953,1.952,4.512,2.929,7.071,2.929
                            s5.118-0.977,7.071-2.929l18.213-18.213c3.906-3.905,3.906-10.237,0.001-14.143C310.492,150.496,304.162,150.496,300.255,154.4z"
                            />
                        </g>
                      </g>
                    </g>
                 </svg>
              </div>
              <span class="body-stats">Followers <span>0</span></span>
              <span class="body-stats">Following <span>0</span></span>
              <div class="u-clearfix"></div>
              <div class="body-info">
                <h1>
                <?php
                  if (empty($fullname)){
                    echo "<h2 onclick='myFunctionbio()'>Edit Your Name</h2>  ";
                  }else{
                    echo "$fullname";
                  }
                ?>
                </h1>
                <p>
                <?php
                  if (empty($bio)){
                    echo "<h3 onclick='myFunctionbio()'>Edit Your bio</h3>  ";
                  }else{
                    echo "$bio";
                  }
                ?>
                </p>

              </div>

            </div>

          </div>

        <div class="posts-section" id="posts-section">
          <!--=======================================================-->

          <!--=======================================================-->
          <h1 style="text-align:center !important;">Posts</h1>
          <div class="post-cards">
          <!-- User posts will be displayed here -->
          <?php
            // Database connection parameters
            include_once __DIR__ . '\..\..\config.php'; // Adjust the path as needed
            if(isset($_COOKIE["user_name"])){
              $username=$_COOKIE["user_name"];
              echo "";
            }
            $sql = "SELECT user.image_name AS userpicname, user.image_data AS userpic, userpostreq.id AS postid, userpostreq.title, userpostreq.body, userpostreq.main_body, userpostreq.image_name AS post_image_name, userpostreq.image_data AS post_image_data, userpostreq.approved, userpostreq.created_at FROM user INNER JOIN userpostreq ON user.username = userpostreq.username WHERE user.username='$username' order by created_at desc";

            // Fetch data from the database
            $result = $conn->query($sql);
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
                    // echo "<div class='post-header'>";
                    // echo "<img class='profile-pic' src='data:image/jpeg;base64," . base64_encode($user_pic) . "' alt='" . $user_picname . "'>";
                    // echo " <span class='username'>".$username."</span>";
                    // echo "</div>";

                    echo "<img class='post-image' onclick='myFunct(" . $postid . ")' src='data:image/jpeg;base64," . base64_encode($user_post) . "' alt='" . $user_postname . "'>";
                    // echo "<div class='post-description'>";
                    // echo "<span class='username'>".$username." | </span>";
                    // echo "<a class='description' >" . $user_posttitle . "</a>";
                    // echo "<h3 class='btn read-more'>".$user_poststatus."</h3>";
                    // echo "</div>";
                    // echo "<div class='post-actions'>";
                    // echo "<i class='fa-solid fa-heart' aria-hidden='true'><button class='like-btn'>Like</button></i>";
                    // echo " <i class='fa-solid fa-comment'><button class='comment-btn'>Comment</button></i>";
                    // echo "<i class='fa-solid fa-share'><button class='share-btn'>Share</button></i>";
                    // echo "</div>";
                    // echo "<div class='add-comment'>";
                    // echo "<input type='text' placeholder='Add a comment...'>";
                    // echo "</div>";
                    echo "</div>";
                }
            }
          ?>
          <script>
              function myFunct(postid) {
                  // Redirect to single.php with the postid as a query parameter
                  window.location.href = '/php/single.php?postid=' + encodeURIComponent(postid);
              }
          </script>
        </div>
        </div>
        <!-- /Posts Section -->

        <!-- Add Post Button -->
        <button class="add-post-btn" onclick="addPost()">
            <i class="fas fa-plus"></i>
        </button>
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
