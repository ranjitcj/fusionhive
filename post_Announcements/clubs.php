<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Clubs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('globebg.jpg');

            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-family: 'Verdana', sans-serif;
            text-align: center;
            color: #333;
        }
        .club {
            display: flex;
            align-items: flex-start;
            border-left: 6px solid #06c7e9; /* Colored border on the left */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow */
            margin-bottom: 20px;
            padding: 15px;
            border-top-left-radius: 8px; /* Rounded top left corner */
            border-bottom-left-radius: 8px; /* Rounded bottom left corner */
            position: relative; /* Position for absolute elements inside */
        }
        .hr{
            height: 2px;
            background-color: #666;
            border-radius: 10px;
            width: 70%;
            margin-inline: auto;
        }
        .club img {
            width: 150px;
            height: 150px;
            border-top-left-radius: 8px; /* Rounded top left corner for image */
            border-bottom-left-radius: 8px; /* Rounded bottom left corner for image */
            margin-right: 20px;
        }
        .club-content {
            flex: 1;
            /* border: 1px solid rgb(156, 156, 156); */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding-top: 10px ;
            padding-inline: 10px ;
            backdrop-filter: blur(5px);
            border-radius: 5px;
        }
        .club h2 {
            font-family: 'Georgia', serif;
            margin-top: 0;
            color: #111;
        }
        .club p {
            margin-bottom: 10px;
            color: #333;
            line-height: 1.6;
        }
        .club p:last-child {
            margin-bottom: 0;
        }
        .apply-btn {
            background-color: #06c7e9;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
            position: absolute;
            bottom: 15px;
            right: 15px;
        }
        .apply-btn:hover {
            background-color: #0056b3;
        }

        /* Responsive adjustments */
        @media (max-width: 600px) {
            .club {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px;
            }
            .club img {
                width: 100%;
                max-width: 100%;
                height: auto;
                margin: 0 0 10px 0;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px; /* Rounded top right corner for image in mobile */
            }
            .apply-btn {
                position: relative;
                margin-top: 10px;
                bottom: auto;
                right: auto;
                width: 100%; /* Full width button in mobile */
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>College Clubs</h1>
        <div class="hr"></div>

        <div class="club" style="background-image: url('probg.jpg');border-color:#b844c7 ;">
            <img src="prologo.jpg" alt="Programming Club">
            <div class="club-content">
                <h2 style="color:#fff;">Programming Club</h2>
                <p style="color:#fff;">The Programming Club focuses on coding competitions and software development projects. Members learn advanced programming techniques, participate in hackathons, and collaborate on real-world applications. It's a great opportunity for students interested in technology and software engineering.</p>
                <p style="color:#fff;">Meeting Time: Fridays, 4:00 PM - 6:00 PM</p>
                <p style="color:#fff;">Contact: John Doe (<a href="mailto:johndoe@example.com">johndoe@example.com</a>)</p>
                <a href="#" class="apply-btn">Apply</a>
            </div>
        </div>

        <div class="club" style="background-image: url('musicbg.jpg');">
            <img src="musicLogo.png" alt="Music Club">
            <div class="club-content">
                <h2 style="color:#fff;">Music Club</h2>
                <p style="color:#fff;">The Music Club is dedicated to promoting musical creativity and appreciation among students. Activities include jam sessions, vocal and instrumental workshops, and organizing musical performances across various genres. Whether you're a performer or a music enthusiast, there's something for everyone!</p>
                <p style="color:#fff;">Meeting Time: Mondays, 3:00 PM - 5:00 PM</p>
                <p style="color:#fff;">Contact: Sarah Johnson (<a style="color:#379bff;" href="mailto:sarahjohnson@example.com">sarahjohnson@example.com</a>)</p>
                <a href="#" class="apply-btn">Apply</a>
            </div>
        </div>

        <div class="club" style="background-image: url('artbg.jpg');border-color: #4b4b4b;">
            <img src="artLogo.jpeg" alt="Art Club">
            <div class="club-content">
                <h2>Art Club</h2>
                <p>The Art Club provides a creative outlet for students interested in visual arts. Members explore various mediums such as painting, drawing, sculpture, and digital art. The club hosts exhibitions, collaborative projects, and workshops led by professional artists to nurture artistic skills and appreciation.</p>
                <p>Meeting Time: Thursdays, 2:00 PM - 4:00 PM</p>
                <p>Contact: David Lee (<a href="mailto:davidlee@example.com">davidlee@example.com</a>)</p>
                <a href="#" class="apply-btn">Apply</a>
            </div>
        </div>

        <div class="club" style="background-image: url('chessbg.jpeg');border-color: #ffcb31;">
            <img src="chesslogo.jpeg" alt="chess Club">
            <div class="club-content">
                <h2 style="color:#fff;">Chess Club</h2>
                <p style="color:#fff;">The Club provides a great space for chess players. Daily puzzels, studies, games, and turnaments are open to all. </p>
                <p style="color:#fff;">Meeting Time: Thursdays, 2:00 PM - 4:00 PM</p>
                <p style="color:#fff;">Contact: David Lee (<a style="color:#379bff;" href="mailto:davidlee@example.com">davidlee@example.com</a>)</p>
                <a href="/post_Announcements/chessClub.php" class="apply-btn">Apply</a>
            </div>
        </div>

        <div class="club" style="background-image: url('photobg.jpg');border-color: #fff959;">
            <img src="photgraphyLogo.jpeg" alt="Photography Club">
            <div class="club-content">
                <h2>Photography Club</h2>
                <p>The Photography Club organizes workshops, photo walks, and exhibitions to explore different genres and techniques of photography. Members learn to capture moments, develop their visual storytelling skills, and share their passion for photography with the campus community.</p>
                <p>Meeting Time: Saturdays, 10:00 AM - 12:00 PM</p>
                <p>Contact: Michael Brown (<a href="mailto:michaelbrown@example.com">michaelbrown@example.com</a>)</p>
                <a href="#" class="apply-btn">Apply</a>
            </div>
        </div>

        <div class="club" style="background-image: url('debatebg,jpg.jpg');border-color: #ff9c40;">
                    <img src="debateLogo.png" alt="Debate Club">
                    <div class="club-content">
                        <h2>Debate Club</h2>
                        <p>The Debate Club provides a platform for students to improve their critical thinking and public speaking skills through weekly debates on various topics. It fosters intellectual discussion, enhances argumentative abilities, and prepares members for competitive debates at both regional and national levels.</p>
                        <p>Meeting Time: Wednesdays, 5:00 PM - 7:00 PM</p>
                        <p>Contact: Jane Smith (<a href="mailto:janesmith@example.com">janesmith@example.com</a>)</p>
                        <a href="#" class="apply-btn">Apply</a>
                    </div>
        </div>
    </div>
</body>
</html>

<!-- https://www.freepik.com/vectors/research-background -->
<!-- https://www.frc.edu/art/annual-art-student-exhibition -->
<!-- https://codingartistweb.com/2022/09/how-to-detect-swipe-direction-with-javascript/ ->>>>>>--->
<!-- https://www.youtube.com/playlist?list=PLNCevxogE3fgy0pAzVccadWKaQp9iHspz -->
<!-- create an html webpage to display announcements/news from college. Make it such that a horizontal news bar should always scroll the latest news in short. Add as much details as you can. make it as the news/announcements should be one below other and each announcement card should contain a centered header in bold and the date of publish and name of publisher on right. which should be followed by the actual content. for now make 1 announcement regarding the open seats for second year student association. make it as descriptive as possible! create other announcement regarding recently declared Engineering results. add shadows wherever possible and different color elements. make the webpage responsive. -->
