<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $speaker_name = $_POST['speaker_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    $social_links = $_POST['social_links'];
    $expertise = $_POST['expertise'];

    $profile_picture = $_FILES['profile_picture'];
    $company_logo = $_FILES['company_logo'];

    $upload_dir = 'uploads/';

    move_uploaded_file($profile_picture['tmp_name'], $upload_dir . basename($profile_picture['name']));
    move_uploaded_file($company_logo['tmp_name'], $upload_dir . basename($company_logo['name']));

    echo "Speaker registered successfully!";
} else {
    echo "Invalid request method.";
}
?>
