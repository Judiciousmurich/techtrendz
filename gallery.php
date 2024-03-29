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

    <section class="gallery-intro">
        <h1>Our Gallery</h1>
        <p>Explore our collection of technology-related images and visuals.</p>
    </section>

    <section class="gallery-grid">
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 1">
        </div>
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 2">
        </div>
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 3">
        </div>
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 4">
        </div>
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 4">
        </div>
        <div class="gallery-item">
            <img src="./images/about-tech.png" alt="Gallery Image 4">
        </div>
      
    </section>

    <?php include('footer.php'); ?>
</body>
</html>




  
        <!-- $images = getGalleryImages();
        foreach ($images as $image) {
                echo "<img src='$image' alt='Gallery Image'>"} -->
        <!-- Add more items as needed -->