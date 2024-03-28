<!-- functions.php -->

<?php
// Database Configuration
include('config.php');

// Function to get About content from database
function getAboutContent() {
    global $conn;
    $sql = "SELECT content FROM about";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['content'];
}
// Function to get services from database
function getServices() {
    global $conn;
    $services = array();
    $sql = "SELECT name FROM services";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $services[] = $row['name'];
    }
    return $services;
}
// Function to get gallery images from database
function getGalleryImages() {
    global $conn;
    $images = array();
    $sql = "SELECT url FROM gallery";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row['url'];
    }
    return $images;
}
// Function to get contact email from database

?>
