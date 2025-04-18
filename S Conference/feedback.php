<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);
    $event = htmlspecialchars($_POST['event']);
    $speaker = htmlspecialchars($_POST['speaker']);

    echo "<script>alert('Feedback Submitted Successfully! Thank you, $name, for your feedback.');</script>";
    echo "<div class='container'>";
    echo "<div class='feedback-container bg-white p-4 rounded-lg shadow-lg' style='background-image: url(\"venue.jpg\"); background-size: cover; background-position: center;'>";
    echo "<h2 style='font-size: 25px; color: black;'><b>Feedback Submitted Successfully</b></h2>";
    echo "<p style='color: black;'>Thank you, $name, for your feedback!</p>";
    echo "<p style='color: black;'><strong>Event:</strong> $event</p>";
    echo "<p style='color: black;'><strong>Speaker:</strong> $speaker</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<div class='container'>";
    echo "<div class='feedback-container bg-white p-4 rounded-lg shadow-lg' style='background-image: url(\"venue.jpg\"); background-size: cover; background-position: center;'>";
    echo "<h3 style='font-size: 25px; color: black;'><b>Feedback & Ratings</b></h3>";
    echo "<form action='feedback.php' method='POST'>";
    echo "<div class='feedback-form' style='display: flex; flex-direction: column; align-items: center;'>";
    echo "<input type='text' name='name' placeholder='Your Name' required style='padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;'>";
    echo "<input type='email' name='email' placeholder='Your Email' required style='padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;'>";
    echo "<input type='text' name='event' placeholder='Event' required style='padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;'>";
    echo "<input type='text' name='speaker' placeholder='Speaker' required style='padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;'>";
    echo "<textarea name='feedback' placeholder='Your Feedback' required style='padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;'></textarea>";
    echo "<button type='submit' style='padding: 12px 20px; font-size: 16px; background-color: rgb(0, 124, 25); color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;'>Submit Feedback</button>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
}
?>
