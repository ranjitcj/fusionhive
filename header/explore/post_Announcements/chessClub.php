<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Club</title>
    <?php
        if(isset($_COOKIE["user_name"])){
            $username=$_COOKIE["user_name"];
        }
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            position: relative;
            background: url('chessbg.jpeg') no-repeat center center/cover;
            color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        header a {
            border-radius: 50%;
            display: inline-block;
            border: none;
            margin: 0 10px;
            cursor: pointer;
            /* font-size: 1em; */
            height: 40px;
            width: 40px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .logo {
            width: 100px;
            vertical-align: middle;
            margin-left: 10px;
            border-radius: 50%;
        }
        .button {
            border-radius: 50%;
            background-color: #007BFF;
            display: inline-block;
            color: #fff;
            border: none;
            padding: 10px;
            margin: 0 10px;
            cursor: pointer;
            font-size: 1em;
            height: 40px;
            width: 40px;
        }
        .nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .nav .nav-item a{
            color: #000;
        }
        .nav .nav-item {
            margin: 0 10px;
            text-align: center;
        }
        .nav .nav-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }
        .nav .nav-item.active img {
            border: 2px solid #007BFF;
        }
        .nav .nav-item.active a {
            color: #007BFF;
            font-weight: bold;
        }
        .sections {
            display: none;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 10px 90px;
            border-radius: 8px;
        }
        .active-section {
            display: block;
        }
        .about, .daily-images, .tournament-links, .general-chat {
            margin: 10px 0;
        }
        .daily-images img {
            width: 100%;
            max-width: 200px;
            border: 2px solid #007BFF;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .tournament-links {
            margin: 20px 0;
        }
        .tournament-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .tournament-item:last-child {
            border-bottom: none;
        }
        .chat-section {
            display: flex;
            flex-direction: column;
            height: 300px;
            overflow-y: scroll;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .chat-message {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .chat-message img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .chat-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .chat-input input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }
        .chat-input button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .members-box {
            background: #fff;
            padding: 10px 25px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: fit-content;
        }
        .members-box img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .members-box .member {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .add-user{
            border-radius: 4px;
            border: 1px solid black;
            background-color: rgb(223, 223, 187);
            color: black;
            padding: 5px 10px;
            margin: 0 10px;
            font-size: 1em;
            font-weight: bold;
            /* height: 30px; */
        }
        .wb{
            background-image: url('data:image/svg+xml,<svg version="1.1" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="none" fill-rule="evenodd" id="flat" stroke="none" stroke-width="1"><path d="M30,60 C46.5685433,60 60,46.5685433 60,30 C60,13.4314567 46.5685433,0 30,0 C13.4314567,0 0,13.4314567 0,30 C0,46.5685433 13.4314567,60 30,60 Z" fill="%2357BB63"></path><path d="M30.0712615,46.2210462 C27.2108308,46.2210462 24.5235692,45.4899692 22.1856,44.2068923 L13.1538462,47.0769231 L16.0980923,38.3918769 C14.6130462,35.9523692 13.7575385,33.0915692 13.7575385,30.0336 C13.7575385,21.0934154 21.0612923,13.8461538 30.0716308,13.8461538 C39.0808615,13.8461538 46.3846154,21.0934154 46.3846154,30.0336 C46.3846154,38.9737846 39.0812308,46.2210462 30.0712615,46.2210462 Z M30.0712615,16.4241231 C22.5079385,16.4241231 16.3558154,22.5293538 16.3558154,30.0336 C16.3558154,33.0114462 17.3265231,35.7692308 18.9681231,38.0130462 L17.2548923,43.0670769 L22.5252923,41.3918769 C24.6912,42.8137846 27.2854154,43.6430769 30.0712615,43.6430769 C37.6334769,43.6430769 43.7867077,37.5382154 43.7867077,30.0339692 C43.7867077,22.5297231 37.6334769,16.4241231 30.0712615,16.4241231 L30.0712615,16.4241231 Z M38.3088,33.7617231 C38.2083692,33.5966769 37.9417846,33.4969846 37.5426462,33.2987077 C37.1424,33.1004308 35.1758769,32.1400615 34.8099692,32.0082462 C34.4429538,31.8760615 34.176,31.8092308 33.9097846,32.2065231 C33.6435692,32.6038154 32.8770462,33.4969846 32.6433231,33.7617231 C32.4099692,34.0268308 32.1769846,34.0600615 31.7771077,33.8614154 C31.3776,33.6631385 30.0889846,33.2440615 28.5611077,31.8923077 C27.3725538,30.8407385 26.5698462,29.5425231 26.3368615,29.1448615 C26.1035077,28.7479385 26.3121231,28.5334154 26.5122462,28.3358769 C26.6920615,28.1579077 26.9121231,27.8724923 27.1122462,27.6409846 C27.3123692,27.4091077 27.3788308,27.2440615 27.5117538,26.9789538 C27.6454154,26.7142154 27.5785846,26.4827077 27.4785231,26.2836923 C27.3784615,26.0854154 26.5783385,24.1329231 26.2452923,23.3383385 C25.9122462,22.5444923 25.5795692,22.6766769 25.3458462,22.6766769 C25.1124923,22.6766769 24.8459077,22.6434462 24.5793231,22.6434462 C24.3127385,22.6434462 23.8792615,22.7427692 23.5126154,23.1396923 C23.1463385,23.5369846 22.1136,24.4969846 22.1136,26.4491077 C22.1136,28.4016 23.5458462,30.288 23.7463385,30.5523692 C23.9460923,30.8167385 26.5118769,34.9536 30.5767385,36.5424 C34.6430769,38.1308308 34.6430769,37.6009846 35.3763692,37.5348923 C36.1085538,37.4688 37.7412923,36.5752615 38.0754462,35.6488615 C38.4081231,34.7217231 38.4081231,33.9271385 38.3088,33.7617231 L38.3088,33.7617231 Z" fill="%23ffffff"></path></g></svg>');
            color: transparent;
        }
        #daily-images {
            background-image: url("chessbg2.jpeg");
        }
        #daily-images img{
            /* display: block; */
            max-width: 200px;
            height: auto;
            margin: auto;
            border: 2px solid grey;
        }
    </style>
</head>
<body>
    <header>
        <img src="chesslogo.jpeg" alt="Club Logo" class="logo">
        <h1>Chess Club</h1>

        <a target="_balnk" href="https://chat.whatsapp.com/Bj79qnGXJnp7H1Fkl92V4L">
            <button class="button wb">.</button>
        </a>
        <button onclick='myFunct()' class="add-user">Join As Member</button>

    </header>
    <?php
        isset($_COOKIE["user_name"]);
        echo $_COOKIE['user_name'];
    ?>
    <div class="nav">
        <div class="nav-item active" onclick="showSection('about',0)">
            <!-- <img src="about-logo.png" alt="About"> -->
            <a href="#" style="text-decoration: none;">About</a>
        </div>

        <div class="nav-item" onclick="showSection('daily-images',1)">
            <!-- <img src="images-logo.png" alt="Daily Images"> -->
            <a href="#" style="text-decoration: none;">Daily Images</a>
        </div>
        <div class="nav-item" onclick="showSection('tournament-links',2)">
            <!-- <img src="tournament-logo.png" alt="Tournament Links"> -->
            <a href="#" style="text-decoration: none;">Tournament Links</a>
        </div>
        <div class="nav-item" onclick="showSection('general-chat',3)">
            <!-- <img src="chat-logo.png" alt="General Chat"> -->
            <a href="#" style="text-decoration: none;">Chat</a>
        </div>
    </div>

    <div id="about" class="sections active-section">
        <h2>About Us</h2><hr>
        <p>Welcome to the Chess Club! Our club has been a cornerstone for chess enthusiasts since 2020. We host regular tournaments, weekly practice sessions, and provide a platform for members to engage and improve their skills.</p>
        <h3>Past Achievements</h3>
        <ul>
            <li>2021 National Chess Championship Winners</li>
            <li>2022 Regional Chess League Runners-up</li>
            <li>2023 Grandmasters Invitational Finalists</li>
        </ul>
        <div class="members-box">
            <h4>Recent Members</h4>
            <div class="member"><img src="jute.jpg" alt="User 1"> <span>Sarthak</span></div>
            <div class="member"><img src="jute.jpg" alt="User 2"> <span>Ranjit</span></div>
            <div class="member"><img src="jute.jpg" alt="User 3"> <span>Yughandar</span></div>
            <div class="member"><img src="jute.jpg" alt="User 3"> <span>Neeraj</span></div>
        </div>
    </div>

    <div id="daily-images" class="sections">
        <h2>Daily Puzzels</h2><hr>
        <img src="c1.jpeg" alt="Daily Image 1">
        <img src="c2.jpeg" alt="Daily Image 2">
        <img src="c3.jpeg" alt="Daily Image 3">
    </div>

    <div id="tournament-links" class="sections">
        <h2>Tournament Links</h2><hr>
        <p><i>Note: The link to join will be shared in chat 30 min beforehand.</i></p>
        <div class="tournament-item">
            <h3>The Swiss tournament.</h3>
            <p>This will  be open to all participants. <br> Date 23 dec 2023 @5pm IST</p>
        </div>
        <div class="tournament-item">
            <h3>HyperBullet Arena.</h3>
            <p>Open to all user. <br> Duration 1 hour. <br> Date 2 Jan 2024 @5pm IST</p>
        </div>
        <div class="tournament-item">
            <h3>Rapid 10+15.</h3>
            <p>Only 1500+. <br> Duration 2 hour. <br> Date 9 Jan 2024 @4pm IST</p>
        </div>
        <div class="tournament-item">
            <h3>Round Robbin tournament.</h3>
            <p>This will  be open to all. <br> Date 15 Jan 2024 @5:30pm IST</p>
        </div>
    </div>

    <div id="general-chat" class="sections">
        <h2>Chat</h2>
        <div class="chat-section">
            <div class="chat-message">
                <img src="user1.jpeg">
                <div class="message">yo!</div>
            </div>
            <div class="chat-message">
                <img src="user2.jpeg">
                <div class="message">Up for game?</div>
            </div>
            <div class="chat-message">
                <img src="user1.jpeg">
                <div class="message">busy rn..</div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Type your message here...">
            <button>Send</button>
        </div>
    </div>

    <script>
			// window.location.href = '/php/single.php?postid=' + encodeURIComponent(postid);
            <?php
            // not worked while testing thus commented
            //   function myFunct(username) {
                //   include_once __DIR__ . '\redirect.php';
                //   $conn = $GLOBALS['db_connection'];
                //   if(isset($_COOKIE["user_name"])){
                //       $checkid = $_COOKIE["user_name"];
                //     }
                //     $sql = "INSERT INTO user (username) VALUES=('$checkid')";
	        	// }   
                ?>
        function showSection(id,index) {
            const sections = document.querySelectorAll('.sections');
            sections.forEach(section => {
                section.classList.remove('active-section');
            });

            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.classList.remove('active');
            });

            navItems[index].classList.add('active');
            document.getElementById(id).classList.add('active-section');
            // document.querySelector(`.nav-item img[alt="${id.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase())}"]`).parentElement.classList.add('active');
        }
    </script>
</body>
</html>