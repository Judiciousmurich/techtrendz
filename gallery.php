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
            // Database connection
            $db = new mysqli('localhost', 'root', 'jMm@0000', 'serversidetask');

            // Check connection
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            // Fetch images from database// Assume your table and column names
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='gallery-item'><img src='{$row['image_path']}' alt='Gallery Image'></div>";
                }
            } else {
                echo "No images found";
            }

            $db->close();
        ?>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
