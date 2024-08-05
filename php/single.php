<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="/singlepost1/post.css">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400;0,700;1,400;1,700&family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">Fusion<span>Hive</span></div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">User Name</a></li>
            </ul>
        </nav>
    </header>

    <div class="post-wrapper">
        <?php
            include_once __DIR__ . '\..\redirect.php';

            // Database connection parameters
            include_once __DIR__ . '/../config.php'; // Adjust the path as needed

            $postid = $_GET['postid'];
            // Fetch data from the database
            $sql = "SELECT * FROM userpostreq WHERE id='$postid'";
            $result = $conn->query($sql);

            // Check if there are any records
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    $image_name = $row['image_name'];
                    $image_data = $row['image_data'];
                    //echo "<h1 class='heading'>" . $row["title"] . "</h1>";
                    echo "<img class='post-img' src='data:image/jpeg;base64," . base64_encode($image_data) . "' alt='" . $image_name . "'>";
                    echo "<h1 class='heading'>" . $row["title"] . "</h1>";
                    echo "&nbsp";
                    echo "<p class='post-description'>" . $row["main_body"] . "</p>";
                    echo "<p class='fa calender'>" . $row["created_at"] . "</p>";
                    echo "<div class='author-section'>";
                    echo "By ~ <span id='author'>".$row['username']."</span><br>";
                    echo "Contact : <span id='email'>abc@gmail.com</span>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            // Close connection
            $conn->close();
        ?>
        <!-- <img src="/singlepost/image_2.png" alt="Post Image" class="post-img">
        <div class="post-content">
            <h1 class="post-title">The Beauty of Science Exhibitions</h1>
            <p class="post-description">
                Science exhibitions have long been cherished as a platform where wonder meets education, where curiosity is sparked, and where innovation takes center stage. These exhibitions serve as a melting pot of ideas, bringing together scientists, educators, students, and enthusiasts to celebrate the marvels of science in all its glory. Let's embark on a journey through the vibrant world of a science exhibition, where discovery awaits at every turn.
                As you step into the exhibition hall, you're greeted by a symphony of sights and sounds – colorful displays, interactive exhibits, and the hum of excitement. Each corner holds a treasure trove of knowledge, inviting you to delve deeper into the realms of physics, chemistry, biology, and beyond.
                One of the most captivating aspects of a science exhibition is its hands-on approach to learning. Visitors are encouraged to touch, feel, and interact with the exhibits, fostering a deeper understanding of scientific concepts. From building simple machines to conducting fascinating experiments, there's no shortage of opportunities to engage both the mind and the senses.
                For many, science can seem abstract or intimidating, confined to textbooks and lectures. However, a science exhibition bridges this gap by bringing theory to life. Complex principles are simplified through engaging demonstrations and visual aids, making them accessible to audiences of all ages and backgrounds.
            </p>
            <div class="author-section">
                <img src="author-image.jpg" alt="Author Image" class="author-img">
                <div class="author-info">
                    <h2>Author: Saindane Yughandar</h2>
                    <p>Saindane Yughandar is a passionate science educator and writer who loves to share the wonders of science with others. With a background in physics and a talent for communication, Saindane inspires young minds to explore and appreciate the beauty of science.</p>
                    <p>Contact: <a href="mailto:abc@gmail.com">abc@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div> -->

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text">Fusion<span>Hive</span></h1>
                <p>
                    TrendCast is a blog website for our college students for the purpose of posting new trends. However, it is a very useful website.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i>&nbsp;987-654-321</span>
                    <span><i class="fas fa-envelope"></i>&nbsp;info@trendcast.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>

            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>

            <div class="footer-section contact-form">
                <h2>Contact us</h2>
                <form action="" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i> Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; codingpoets.com | Designed by Fusion Hive
        </div>
    </footer>
</body>
</html>
