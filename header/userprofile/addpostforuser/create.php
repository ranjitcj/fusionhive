<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="/header/userprofile/addpostforuser/styles.css">
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
            <form action="/header/userprofile/addpostforuser/post.php" method="post" enctype="multipart/form-data">
                <h1>Post Details</h1>
                <label>User Name:
                <?php
                    if(isset($_COOKIE["user_name"])){
                        echo $_COOKIE["user_name"];
                    }
                ?>
                </label>

                <label for="name">Title:</label>
                <input type="text" id="title" name="title" class="text-input" required>

                <label for="bio">Body:</label>
                <textarea type="text" id="body" name="body" required></textarea>

                <label for="bio">Main Body:</label>
                <textarea type="text" id="message" name="message" class="text-input contact-input" placeholder="Your message...." required></textarea>

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
