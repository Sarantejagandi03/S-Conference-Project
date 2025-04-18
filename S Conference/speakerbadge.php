<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badge Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: bisque;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            
    background-image: url('Bg.webp'); 
        }
        .container {
            width: 800px;
            padding: 20px;
            background-color: aqua;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .badge {
            border: 2px solid #4A90E2;
            padding: 50px;
            text-align: center;
            background-color:  bisque;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 700px;
            height: 850px;
            font-size: 25px;
            color: white;
        }
        .badge h2 {
            color: #4A90E2;
        }
        .badge h3 {
            color: rgb(0, 0, 0);
            font-size: 55px;
            
            font-weight: Bold;
            font-family: "Times New Roman", Times, serif;
        }
        .badge p {
            color: rgb(5, 171, 113);
            font-size: 30px;
            font-weight: Bold;
        }
        .form-label {
            margin-top: 1rem;
            color: #333;
        }
        .form-input {
            margin-top: 0.5rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            width: 100%;
        }
        .submit-btn {
            margin-top: 1rem;
            padding: 0.5rem;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #357ABD;
        }
    </style>
</head>
<body>

<div class="container">
<?php
    $imageSrc = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $speakerName = htmlspecialchars($_POST['speaker_name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $bio = htmlspecialchars($_POST['bio']);
        $socialLinks = htmlspecialchars($_POST['social_links']);
        $expertise = htmlspecialchars($_POST['expertise']);
        $sessionTitle = htmlspecialchars($_POST['session_title']);
        $coSpeakers = htmlspecialchars($_POST['co_speakers']);
        $abstractTitle = htmlspecialchars($_POST['abstract_title']);
        $abstractText = htmlspecialchars($_POST['abstract_text']);
        $keywords = htmlspecialchars($_POST['keywords']);
        $registrationNumber = rand(0, 1000);
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == UPLOAD_ERR_OK) {
            $image = $_FILES['profile_image']['tmp_name'];
            $imageData = file_get_contents($image);

            if ($imageData === false) {
                echo "<p>Failed to read image data.</p>";
            } else {
                $base64 = base64_encode($imageData);
                $imageSrc = 'data:image/jpeg;base64,' . $base64;
            }
        } else {
            if (isset($_FILES['profile_image'])) {
                echo "<p>Error uploading image: " . $_FILES['profile_image']['error'] . "</p>";
            }
        }

        echo "<div class='badge'>";
        if ($imageSrc) {
            echo "<img class='rounded-full w-24 h-24 mx-auto' src='$imageSrc' alt='Profile Image'>";
        }
        echo "<h3 class='text-lg'>$speakerName</h3>";
        echo"<br>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "<p><strong>Bio:</strong> $bio</p>";
        echo "<p><strong>Social Links:</strong> $socialLinks</p>";
        echo "<p><strong>Areas of Expertise:</strong> $expertise</p>";
        echo "<p><strong>Session Title:</strong> $sessionTitle</p>";
        echo "<p><strong>Co-Speakers:</strong> $coSpeakers</p>";
        echo "<p><strong>Abstract Title:</strong> $abstractTitle</p>";
        echo "<p><strong>Abstract Text:</strong> $abstractText</p>";
        echo "<p><strong>Keywords:</strong> $keywords</p>";
        
        echo "<p><strong>Registration No:</strong> $registrationNumber</p>";
        echo "</div>";
    } else {
        echo "<form method='POST' action='speakerbadge.php' enctype='multipart/form-data' class='w-full'>";
        echo "<label class='form-label'>Speaker Name: <input type='text' name='speaker_name' required class='form-input'></label>";
        echo "<label class='form-label'>Email: <input type='email' name='email' required class='form-input'></label>";
        echo "<label class='form-label'>Phone Number: <input type='text' name='phone' required class='form-input'></label>";
        echo "<label class='form-label'>Bio: <textarea name='bio' required class='form-input'></textarea></label>";
        echo "<label class='form-label'>Social Links (comma-separated): <input type='text' name='social_links' required class='form-input'></label>";
        echo "<label class='form-label'>Areas of Expertise: <input type='text' name='expertise' required class='form-input'></label>";
        echo "<label class='form-label'>Upload Profile Image: <input type='file' name='profile_image' accept='image/*' required class='form-input'></label>";
        echo "<label class='form-label'>Session Title: <input type='text' name='session_title' required class='form-input'></label>";
        echo "<label class='form-label'>Duration (in minutes): <input type='number' name='duration' required class='form-input'></label>";
        echo "<label class='form-label'>Venue: <input type='text' name='venue' required class='form-input'></label>";
        echo "<label class='form-label'>Co-Speakers (comma-separated): <input type='text' name='co_speakers' required class='form-input'></label>";
        echo "<label class='form-label'>Abstract Title: <input type='text' name='abstract_title' required class='form-input'></label>";
        echo "<label class='form-label'>Abstract Text: <textarea name='abstract_text' required class='form-input'></textarea></label>";
        echo "<label class='form-label'>Keywords (comma-separated): <input type='text' name='keywords' required class='form-input'></label>";
        echo "<input type='submit' value='Generate Badge' class='submit-btn'>";
        echo "</form>";
    }
    ?>
</div>

</body>
</html>
