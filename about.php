<!-- about.php -->

<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Technology Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    
   
    <div class="about_banner">
        <div>
            <h1>About Us</h1>
            <i>
                <a href="/taskserverside">Home</a> / About Us
            </i>
        </div>
</div>
     <div class="about-wrapper">
        <div class="about-text">
            <h1>Welcome to TechTrendz</h1>
            <h2>Who We Are</h2>
            <p>
                TechTrendz is a leading technology news platform providing the latest insights on tech innovations, software developments, and gadget reviews. We are dedicated to offering comprehensive and in-depth analysis for tech enthusiasts and professionals.
            </p>
            <a href="contact.php" class="contact-link">Contact Us</a>
        </div>
        <div class="about-image">
            <img src="./images/about-tech.png" alt="Our Team at Work">
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
