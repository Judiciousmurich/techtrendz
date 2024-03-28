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
    
    <div class="container">
        <h2>About Us</h2>
        <p><?php echo getAboutContent(); ?></p>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>
