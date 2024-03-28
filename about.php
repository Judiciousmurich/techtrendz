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
    
    <div>
    <div class="about_banner">
        <div>
            <h1>About Us</h1>
            <i>
                <a href="/">Home</a> / About Us
            </i>
        </div>
    </div>

    <div class="member_infos">
        <h1>Who are we?</h1>
        <div class="member_info">
            <!-- Example of a single member, replicate this block for each member -->
            <div class="user">
                <img src="agentImage.jpg" class="img" alt="Profile" />
                <div>
                    <h3>Profile Info</h3><br/>
                    <h3>email@example.com</h3><br/>
                    <h3>John Doe</h3><br/>
                    <p>+1234567890</p><br/>

                    <p>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                    </p>
                </div>
            </div>
           
        </div>
    </div>
</div>

    <?php include('footer.php'); ?>
</body>
</html>
