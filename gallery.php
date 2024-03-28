<!-- gallery.php -->

<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Technology Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="container">
        <h2>Gallery</h2>
        <?php 
        $images = getGalleryImages();
        foreach ($images as $image) {
            echo "<img src='$image' alt='Gallery Image'>";
        }
        ?>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>
