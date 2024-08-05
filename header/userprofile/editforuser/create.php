<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <div class="image-container">
            <div class="image-preview" id="imagePreview">
                <img src="" alt="Image Preview" class="image-preview__image" />
                <span class="image-preview__default-text">Image Preview</span>
            </div>
        </div>
        <div class="form-content">
            <form action="/header/userprofile/editforuser/post.php" method="post" enctype="multipart/form-data">
                <h1>User Details Form</h1>
                <h3>User Name:
                <?php
                    if(isset($_COOKIE["user_name"])){
                        echo $_COOKIE["user_name"];
                    }
                ?>
                </h3>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="fullname">

                <label for="bio">Bio:</label>
                <textarea type="text" id="bio" name="bio"></textarea>

                <label for="profilePic">Profile Picture:</label>
                <input type="file" id="profilePic" name="image" required accept="image/*" >

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        const profilePicInput = document.getElementById('profilePic');
        const imagePreview = document.getElementById('imagePreview');
        const imagePreviewImage = imagePreview.querySelector('.image-preview__image');
        const imagePreviewDefaultText = imagePreview.querySelector('.image-preview__default-text');

        profilePicInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                imagePreviewDefaultText.style.display = "none";
                imagePreviewImage.style.display = "block";

                reader.addEventListener('load', function() {
                    imagePreviewImage.setAttribute('src', this.result);
                });

                reader.readAsDataURL(file);
            } else {
                imagePreviewDefaultText.style.display = null;
                imagePreviewImage.style.display = null;
                imagePreviewImage.setAttribute('src', '');
            }
        });
    </script>
</body>
</html>
