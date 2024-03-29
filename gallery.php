<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - TechTrendz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Upload Form -->
    <section class="upload-form">
        <h1>Upload Image</h1>
        <form action="upload_image.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <button type="submit" class="btn">Upload</button>
        </form>
    </section>

    <!-- Image Gallery -->
    <section class="gallery-grid">
        <?php
            // Assuming $images contains paths to images fetched from the database
            $images = ["./images/gallery1.jpg", "./images/gallery2.jpg", "./images/gallery3.jpg", "./images/gallery4.jpg", "./images/gallery5.jpg", "./images/gallery6.jpg"];
            foreach ($images as $image) {
                echo "<div class='gallery-item'><img src='{$image}' alt='Gallery Image'></div>";
            }
        ?>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
