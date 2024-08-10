const express = require("express");
const app = express();
const port = process.env.PORT || 3001;

app.get("/", (req, res) => res.type('html').send(html));

const server = app.listen(port, () => console.log(`Example app listening on port ${port}!`));

server.keepAliveTimeout = 120 * 1000;
server.headersTimeout = 120 * 1000;

const html = `

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>fusionHive</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!--FONT AWESOME-->
    <!-- <script src="https://kit.fontawesome.com/82edee0263.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous">

    <!--CUSTOM STYLING-->
	<link rel="stylesheet" href="/css/style4php.css">
	<link rel="stylesheet" href="/css/horizontalbar.css">
	<link rel="stylesheet" href="/css/post1.css">


    <!--GOOGLE FONTS-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
   		<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap"rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Candal&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Candal&amp;family=Lora:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">


    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="/js/scripts.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js' defer></script>
	<link rel="stylesheet" href="/css/sideBarStyles.css">
	<script  src="/js/sideBarScript.js" defer></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>


	<style>
		.trenfeed{
			text-align:center;
		}
		.trenfeed div {
			display: inline-block;
			width:40%;
			padding:3px;
			font-size:1.5em;
			/* border:1px solid grey; */
			transition: all .25s;
		}
		.trenfeed div.active{
			background-color:#e0346a;
			color:#fff;
		}
		.visible{
			display:grid !important;
		}
		.post-cards{
			display:none;
		}

	</style>


</head>
<body>
	<?php
		include_once __DIR__ . '\load.php';
	?>
	<div class="fix-head"></div>


	<!--====================================================================================================================================-->
	<div class="body">
		<div class="slider-container">
			<div class="slider">

				<!--<img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MXw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 1">
				<img src="https://images.unsplash.com/photo-1604595704321-f24afaa2fa6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4NHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 2">
				<img src="https://images.unsplash.com/photo-1502465771179-51f3535da42c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4Mnw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 3">
				<img src="https://images.unsplash.com/photo-1492152587635-d4eec94ee072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 4">
				<img src="https://images.unsplash.com/photo-1502772066658-3006ff41449b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 5">
				<img src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4N3w&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 6">-->
				<img src="horiimages/clubs.jpg" alt="Slide 7">
				<img src="horiimages/im.jpeg" alt="Slide 8">
				<!-- <img src="horiimages/Clubs-Activities.jpg" alt="Slide 9"> -->
				<img src="horiimages/Clubs4.png" alt="Slide 10">
				<img src="horiimages//college-festival.jpg" alt="Slide 11">
				<img src="horiimages/ip.avif" alt="Slide 12">
				<img src="horiimages/stdnts.webp" alt="Slide 13">
				<img src="horiimages/steve.avif" alt="Slide 14">
				<img src="horiimages/ele.jpg" alt="Slide 15">
				<img src="horiimages/computerengineering.jpeg" alt="Slide 16">
				<img src="horiimages/electrical.avif" alt="Slide 17">
				<img src="horiimages/q22.webp" alt="Slide 18">
				<img src="horiimages/ip.avif" alt="Slide 19">
				<img src="horiimages/students.jpg" alt="Slide 20">
				<img src="horiimages/t43.png" alt="Slide 21">
				<!-- Duplicate images for looping effect -->
				<!--<img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MXw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 1">
				<img src="https://images.unsplash.com/photo-1604595704321-f24afaa2fa6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4NHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 2">
				<img src="https://images.unsplash.com/photo-1502465771179-51f3535da42c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4Mnw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 3">
				<img src="https://images.unsplash.com/photo-1492152587635-d4eec94ee072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 4">
				<img src="https://images.unsplash.com/photo-1502772066658-3006ff41449b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 5">
				<img src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4N3w&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 6">-->
				<img src="horiimages/clubs.jpg" alt="Slide 7">
				<!-- <img src="horiimages/Clubs-Activities.jpg" alt="Slide 8"> -->
				<img src="horiimages/Clubs4.png" alt="Slide 9">
				<img src="horiimages//college-festival.jpg" alt="Slide 10">
				<img src="horiimages/im.jpeg" alt="Slide 11">
				<img src="horiimages/ip.avif" alt="Slide 12">
				<img src="horiimages/stdnts.webp" alt="Slide 13">
				<img src="horiimages/steve.avif" alt="Slide 14">
				<img src="horiimages/students.jpg" alt="Slide 15">
				<img src="horiimages/computerengineering.jpeg" alt="Slide 16">
				<img src="horiimages/electrical.avif" alt="Slide 17">
				<img src="horiimages/q22.webp" alt="Slide 18">
				<img src="horiimages/ip.avif" alt="Slide 19">
				<img src="horiimages/students.jpg" alt="Slide 20">
				<img src="horiimages/t43.png" alt="Slide 21">
			</div>
		</div>
		<div class="slider-container">
			<div class="slider slider-reverse">
				<!--<img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MXw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 1">
				<img src="https://images.unsplash.com/photo-1604595704321-f24afaa2fa6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4NHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 2">
				<img src="https://images.unsplash.com/photo-1502465771179-51f3535da42c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4Mnw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 3">
				<img src="https://images.unsplash.com/photo-1492152587635-d4eec94ee072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 4">
				<img src="https://images.unsplash.com/photo-1502772066658-3006ff41449b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 5">
				<img src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4N3w&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 6">-->
				<img src="horiimages/clubs.jpg" alt="Slide 2">
				<!-- <img src="horiimages/Clubs-Activities.jpg" alt="Slide 1"> -->
				<img src="horiimages/Clubs4.png" alt="Slide 3">
				<img src="horiimages//college-festival.jpg" alt="Slide 4">
				<img src="horiimages/im.jpeg" alt="Slide 5">
				<img src="horiimages/ip.avif" alt="Slide 6">
				<img src="horiimages/stdnts.webp" alt="Slide 7">
				<img src="horiimages/steve.avif" alt="Slide 8">
				<img src="horiimages/students.jpg" alt="Slide 9">
				<img src="horiimages/computerengineering.jpeg" alt="Slide 16">
				<img src="horiimages/electrical.avif" alt="Slide 17">
				<img src="horiimages/q22.webp" alt="Slide 18">
				<img src="horiimages/ip.avif" alt="Slide 19">
				<img src="horiimages/students.jpg" alt="Slide 20">
				<img src="horiimages/t43.png" alt="Slide 21">
				<!-- Duplicate images for looping effect -->
				<!--<img src="https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MXw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 1">
				<img src="https://images.unsplash.com/photo-1604595704321-f24afaa2fa6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4NHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 2">
				<img src="https://images.unsplash.com/photo-1502465771179-51f3535da42c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4Mnw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 3">
				<img src="https://images.unsplash.com/photo-1492152587635-d4eec94ee072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 4">
				<img src="https://images.unsplash.com/photo-1502772066658-3006ff41449b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI5MHw&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 5">
				<img src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w5MTMyMXwwfDF8cmFuZG9tfHx8fHx8fHx8MTcyMTIxMTI4N3w&ixlib=rb-4.0.3&q=80&w=1080" alt="Slide 6">-->
				<img src="horiimages/clubs.jpg" alt="Slide 2">
				<!-- <img src="horiimages/Clubs-Activities.jpg" alt="Slide 1"> -->
				<img src="horiimages/Clubs4.png" alt="Slide 3">
				<img src="horiimages//college-festival.jpg" alt="Slide 4">
				<img src="horiimages/im.jpeg" alt="Slide 5">
				<img src="horiimages/ip.avif" alt="Slide 6">
				<img src="horiimages/stdnts.webp" alt="Slide 7">
				<img src="horiimages/steve.avif" alt="Slide 8">
				<img src="horiimages/students.jpg" alt="Slide 9">
				<img src="horiimages/computerengineering.jpeg" alt="Slide 16">
				<img src="horiimages/electrical.avif" alt="Slide 17">
				<img src="horiimages/q22.webp" alt="Slide 18">
				<img src="horiimages/ip.avif" alt="Slide 19">
				<img src="horiimages/students.jpg" alt="Slide 20">
				<img src="horiimages/t43.png" alt="Slide 21">
			</div>
		</div>
	</div>
	<!--====================================================================================================================================-->

	<div class="sidebar-overlay"></div>
	<aside id="sidebar" class="sidebar sidebar-default sidebar-fixed-left" role="navigation">
		<!-- Sidebar header -->
		<div class="sidebar-header header-cover" style="background-image: url(https://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg);">
			<!-- Top bar
			<div class="top-bar"></div>
			-->
			<!-- Sidebar toggle button -->
			<button type="button" class="sidebar-toggle">
				<b style="color:black;"></b>
			</button>
			<!-- Sidebar brand image -->

			<!--=================================================================/ SIDE BAR /=========================================================-->
			<?php
				if(isset($_COOKIE["user_name"])){
					include_once __DIR__ . '\config.php';
					$username=$_COOKIE["user_name"];
					$sql= "SELECT * FROM user WHERE username='$username' ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$image_data=$row['image_data'];
						}
					echo "<div class='sidebar-image'>";
					if (empty($image_data)){
						echo "<img src='defaultuserimage.jpg' alt='userpfp' class='body-image'>";
					}else
						echo "<img src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='' class='body-image'>";

					echo "</div>";
					echo "<a data-toggle='dropdown' class='sidebar-brand' href='#settings-dropdown'>".$username."</a>";
					echo "</div>";
					echo "<ul class='nav sidebar-nav'>";
					echo "<li><a href='/header/userprofile/index.php'><i class='sidebar-icon md-inbox'></i>Dashboard</a></li>";
					echo "<li><a href='/header/explore/post_Announcements/clubs.html'><i class='sidebar-icon md-send'></i>ANNOUNCEMENT</a></li>";
					echo "<li class='divider'></li>";
					echo "<li><a href='/post_Announcements/clubs.php'><i class='sidebar-icon md-star'></i>CLUBS</a></li>";
					echo "<li><a href='/post_Announcements/newsPage.html'><i class='sidebar-icon md-send'></i>ANNOUNCEMENT</a></li>";
					echo "<li><a href='/post_Announcements/promotion.html'><i class='sidebar-icon md-drafts'></i>PROMOTIONS</a></li>";
					echo "<li class='divider'></li>";
					echo "<li><a href='header/services.html'><i class='sidebar-icon md-drafts'></i>SERVICES</a></li>";
					echo "<li><a href='/header/signout.html' style='background-color: rgb(255, 173, 173);'><i class='sidebar-icon md-send'></i>Log-out</a></li>";
					echo "</ul>";
					}
				}else{
					echo "<div class='sidebar-image'>";
					echo "<img src='/images/defaultuserimage.jpg' alt='userpfp' class='body-image'>";
					echo "</div>";
					echo "<a data-toggle='dropdown' class='sidebar-brand' href='#settings-dropdown'>User</a>";
					echo "</div>";
					echo "<ul class='nav sidebar-nav'>";
					echo "<li><a href='/header/register.html'><i class='sidebar-icon md-send'></i>REGISTER</a></li>";
					echo "<li><a href='#'><i class='sidebar-icon md-inbox'></i>GLOBAL</a></li>";
					echo "<li class='divider'></li>";
					echo "<li><a href='/post_Announcements/clubs.php'><i class='sidebar-icon md-star'></i>CLUBS</a></li>";
					echo "<li><a href='/post_Announcements/newsPage.html'><i class='sidebar-icon md-send'></i>ANNOUNCEMENT</a></li>";
					echo "<li><a href='/post_Announcements/promotion.html'><i class='sidebar-icon md-drafts'></i>PROMOTIONS</a></li>";
					echo "<li class='divider'></li>";
					// echo "<li><a href='header/services.html'><i class='sidebar-icon md-drafts'></i>SERVICES</a></li>";
					echo "</ul>";
				}
			?>

	</aside>

	<div class="header-wrapper">
	<header class="headerBar">
			<div class="logoName" ><span>Fusion</span>Hive</div>
		<!-- Link sections -->
		<div class="nav" id="nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#footer">About</a></li>
                <li><a href="header/services.html">Services</a></li>
				<li>
						<a href="#">EXPLORE</a>
						<ul>
							<li><a href="/header/explore/post_Announcements/clubs.html">ANNOUNCEMENT</a></li>
							<li><a href="/post_Announcements/clubs.php">CLUBS</a></li>
							<li><a href="/post_Announcements/promotion.html">PROMOTIONS</a></li>
						</ul>
				</li>
                <li>
					<?php
						echo "<a style='min-width: 90px;' href='#'>";
						if(isset($_COOKIE["user_name"])){
							echo $_COOKIE["user_name"];
							echo "<i id='hi' class='fa fa-chevron-down'></i>";
							echo "</a>";
							echo "<ul>";
							echo "<li><a href='/header/userprofile/index.php'>Dashboard</a></li>";
							echo "<li><a href='/header/signout.html'>Sign-out</a></li>";
							echo "</ul>";
						}else {
							echo "<i id='hi' class='fa fa-user'></i>";
							echo "User";
							echo "<i id='hi' class='fa fa-chevron-down'></i>";
							echo "</a>";
							echo "<ul>";
							echo "<li><a href='/header/register.html'>Sign-up</a></li>";
							echo "</ul>";
						}
					?>
				</li>
			</ul>
		</div>

		<i class="mt sidebar-toggle" >
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</i>
	</header>
	</div>


	<!-- Page wrapper -->
	<div class="page-wrapper">
		<!-- post slider -->


		<!-- Content -->

		<div class="container">
			<div class="trenfeed" >
				<div class="recent-post-title active" id="tf1" onClick="document.getElementById('tf2').classList.remove('active');this.classList.add('active');document.getElementById('trending').classList.add('visible');document.getElementById('feed').classList.remove('visible');">Trending Posts</div>
				<div class="recent-post-title" id="tf2" onClick="document.getElementById('tf1').classList.remove('active');this.classList.add('active');document.getElementById('feed').classList.add('visible');document.getElementById('trending').classList.remove('visible');">Feed</div>
			</div>
			<div id="trending"  class="post-cards visible">
				<?php
					// Database connection parameters
					include_once __DIR__ . '\config.php'; // Adjust the path as needed

					$sql = "SELECT user.image_name AS userpicname, user.image_data AS userpic,user.username AS usernamefeeds, userpostreq.id AS postid, userpostreq.title, userpostreq.body, userpostreq.main_body, userpostreq.image_name AS post_image_name, userpostreq.image_data AS post_image_data, userpostreq.approved FROM user INNER JOIN userpostreq ON user.username = userpostreq.username";

					// Fetch data from the database
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							if(($row['approved']=='Approve') && ($row['postid']==56 ||$row['postid']==58 ||$row['postid']==55 ||$row['postid']==61 ||$row['postid']==64  )){
								$usernamefeeds=$row['usernamefeeds'];
								$postid=$row['postid'];
								$user_pic=$row['userpic'];
								$user_picname=$row['userpicname'];
								$user_post=$row['post_image_data'];
								$user_postname=$row['post_image_name'];
								$user_posttitle=$row['title'];

								echo "<div class='instagram-post'>";
								echo "<div class='post-header'>";

								if (empty($user_pic)){
									echo "<img onclick='userFunct(\"" . $usernamefeeds . "\")' class='profile-pic' src='defaultuserimage.jpg'>";
								}else
									echo "<img onclick='userFunct(\"" . $usernamefeeds . "\")' class='profile-pic' src='data:image/jpeg;base64," . base64_encode($user_pic) . "' alt='" . $user_picname . "'>";

								echo "<span onclick='userFunct(\"" . $usernamefeeds . "\")' class='username'>".$usernamefeeds."</span>";
								echo "</div>";
								echo "<img class='post-image' onclick='myFunct(" . $postid . ")' src='data:image/jpeg;base64," . base64_encode($user_post) . "' alt='" . $user_postname . "'>";

								echo "<div class='post-description'>";
								// echo "<span class='username'>".$usernamefeeds."</span>";
								echo "<a class='preview-text' >" . $user_posttitle . "</a>";
								echo "</div>";

								// echo "<div class='post-actions'>";
								// // echo "<button class='like-btn'>Like</button>";
								// echo "<i class='fa-solid fa-heart' aria-hidden='true'><button class='like-btn'>Like</button></i>";
								// echo " <i class='fa-solid fa-comment'><button class='comment-btn'>Comment</button></i>";
								// echo "<i class='fa-solid fa-share'><button class='share-btn'>Share</button></i>";
								// echo "</div>";

								// echo "<div class='add-comment'>";
								// echo "<input type='text' placeholder='Add a comment...'>";
								// echo "</div>";

								echo "</div>";
						}}
					}
				?>
			</div>
			<div id="feed" style="display:none" class="post-cards">
				<?php
					// Database connection parameters
					include_once __DIR__ . '\config.php'; // Adjust the path as needed

					$sql = "SELECT user.image_name AS userpicname, user.image_data AS userpic,user.username AS usernamefeeds, userpostreq.id AS postid, userpostreq.title, userpostreq.body, userpostreq.main_body, userpostreq.image_name AS post_image_name, userpostreq.image_data AS post_image_data, userpostreq.approved FROM user INNER JOIN userpostreq ON user.username = userpostreq.username";

					// Fetch data from the database
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							if($row['approved']=='Approve'){
								$usernamefeeds=$row['usernamefeeds'];
								$postid=$row['postid'];
								$user_pic=$row['userpic'];
								$user_picname=$row['userpicname'];
								$user_post=$row['post_image_data'];
								$user_postname=$row['post_image_name'];
								$user_posttitle=$row['title'];

								echo "<div class='instagram-post'>";
								echo "<div class='post-header'>";

								if (empty($user_pic)){
									echo "<img onclick='userFunct(\"" . $usernamefeeds . "\")' class='profile-pic' src='defaultuserimage.jpg'>";
								}else
									echo "<img onclick='userFunct(\"" . $usernamefeeds . "\")' class='profile-pic' src='data:image/jpeg;base64," . base64_encode($user_pic) . "' alt='" . $user_picname . "'>";

								echo "<span onclick='userFunct(\"" . $usernamefeeds . "\")' class='username'>".$usernamefeeds."</span>";
								echo "</div>";
								echo "<img class='post-image' onclick='myFunct(" . $postid . ")' src='data:image/jpeg;base64," . base64_encode($user_post) . "' alt='" . $user_postname . "'>";

								echo "<div class='post-description'>";
								// echo "<span class='username'>".$usernamefeeds."</span>";
								echo "<a class='preview-text' >" . $user_posttitle . "</a>";
								echo "</div>";

								// echo "<div class='post-actions'>";
								// // echo "<button class='like-btn'>Like</button>";
								// echo "<i class='fa-solid fa-heart' aria-hidden='true'><button class='like-btn'>Like</button></i>";
								// echo " <i class='fa-solid fa-comment'><button class='comment-btn'>Comment</button></i>";
								// echo "<i class='fa-solid fa-share'><button class='share-btn'>Share</button></i>";
								// echo "</div>";

								// echo "<div class='add-comment'>";
								// echo "<input type='text' placeholder='Add a comment...'>";
								// echo "</div>";

								echo "</div>";
						}}
					}
				?>
			</div>

			<script>
				function myFunct(postid) {
					// Redirect to single.php with the postid as a query parameter
					window.location.href = '/php/single.php?postid=' + encodeURIComponent(postid);
				}
				function userFunct(usernamefeeds) {
					// Redirect to index.php with the usernamefeeds as a query parameter
					window.location.href = '/feeds/index.php?usernamefeeds=' + encodeURIComponent(usernamefeeds);
				}
			</script>
		</div>

		<!--// Post Article -->
	</div>



	<!----------footer----------->
	<div class="footer" id="footer">
		<div class="footer-content">
			<div class="footer-section about">
				<h1 class="logo-text"> <span>Fusion</span>Hive</h1>
				<p>
					Connecting Inovators and Visionaries.
				</p>
				<div class="socials">
					<a href="#"> <i class="fa-brands fa-youtube"></i> </a>
					<a href="#">  <i class="fa-brands fa-twitter"></i> </a>
					<a href="#"> <i class="fa-brands fa-instagram"></i> </a>
					<a href="#"> <i class="fa-brands fa-facebook"></i> </a>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			&copy; fusionHive | Team Vikram
		</div>
		<!--
			-->
	</div>
	<!---------------------->

	<!-- slick js -->



	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {

			$('.post-wrapper').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2500,
				nextArrow: $('.next'),
				prevArrow: $('.prev'),
				responsive: [{
					/*
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }*/
				},
					{
						breakpoint: 1060,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 620,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}]

			});
		});
	</script>
</body>
</html>
'

