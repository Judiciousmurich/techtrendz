<!-- services.php -->

<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Technology Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="container">
        <h2>Our Services</h2>
        <ul>
            <?php 
            $services = getServices();
            foreach ($services as $service) {
                echo "<li>$service</li>";
            }
            ?>
        </ul>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>
