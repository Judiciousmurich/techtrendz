<!-- contact.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Technology Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    

    <div class="contact_banner">
    <div>
        <h1>Contact Us</h1>
        <i>
            <a href="/taskserverside">Home</a> / Contact Us
        </i>
        
    </div>
</div>
<div class="contact">
    
    </div>
</div>
<div class="main_contact">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3997.2206226128244!2d34.75716801427406!3d-0.08665449921950933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a58aece8e9003%3A0xd7416e62f9f3ef1e!2sKisumu%2C%20Kenya!5e0!3m2!1sen!2snp!4v1648541159647"
            width="100%"
            height="550"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Rental Location Map"
        ></iframe>
    </div>
    <div class="contact_form">
        <form>
            <h1>Drop a Line</h1>
            <input type="text" name="name" placeholder="Name" />
            <input type="email" name="email" placeholder="Email" /><br />
            <textarea placeholder="Message"></textarea>
            <button class="btn" type="submit">
                Submit
            </button>
        </form>
    </div>
</div>

    <?php include('footer.php'); ?>
</body>
</html>
