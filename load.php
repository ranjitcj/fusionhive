<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <style>
        /* Initial loading screen styles */
        #loading-screen {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #fff; /* Background color for the loading screen */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it is above other content */
        }

        #loading-screen img {
            width: 150px; /* Adjust the logo size */
            height: auto;
        }

        /* Once the content is loaded, hide the loading screen */
        body.loaded #loading-screen {
            display: none;
        }
    </style>
</head>
<body>
    <div id="loading-screen">
        <img src="fusionhive-high-resolution-logo-black.png" alt="Website Logo">
    </div>

    <!-- Your actual website content starts here -->
    <div id="content" style="display:none;">
        <?php
        echo "";
        ?>
    </div>

    <script>
        // JavaScript to hide the loading screen once the page is fully loaded
        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
            document.getElementById('content').style.display = 'block';
        });
    </script>
</body>
</html>
