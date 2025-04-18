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
            width: 600px;
            height: 800px;
            padding: 20px;
            background-color: aqua;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .badge {
            border: 2px solid rgb(102, 221, 130);
            padding: 50px;
            text-align: center;
            background-color: bisque;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 500px;
            height: 700px;
            font-size:25px;
        }
        .badge h2 {
            color:rgb(0, 0, 0);
        }
        .badge h3 {
            color:rgb(5, 171, 113);
            font-size: 50px;
            font-family: "Times New Roman", Times, serif;
        }
        .badge p {
            color:rgba(213, 0, 0, 0.9);
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $role = htmlspecialchars($_POST['role']);
        $event = htmlspecialchars($_POST['event']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        
        $registrationNumber = rand(0, 1000000);
        
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
            $image = $_FILES['profile_image']['tmp_name'];
            $imageData = file_get_contents($image);
            $base64 = base64_encode($imageData);
            $imageSrc = 'data:image/jpeg;base64,' . $base64; 
        } else {
            $imageSrc = ''; 
        }
        
        echo "<div class='badge'>";
        echo "<h2 class='text-xl font-bold'></h2>"; 
        if ($imageSrc) {
            echo "<img class='rounded-full w-24 h-24 mx-auto' src='$imageSrc' alt='Profile Image'>";
        }
        echo"<br>";
        echo "<h3 class='text-lg'>$name</h3>";
        echo"<br>";
        echo "<p><strong>Role:</strong> $role</p>";
        echo"<br>";
        echo "<p><strong>Event:</strong> $event</p>";
        echo"<br>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo"<br>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo"<br>";
        echo "<p><strong>Registration No:</strong> $registrationNumber</p>";
        echo "</div>"; 
    } else {
        echo "<form method='POST' action='badge.php' enctype='multipart/form-data' class='space-y-4'>";
        echo "<label class='form-label block'>Name: <input type='text' name='name' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<label class='form-label block'>Role: <input type='text' name='role' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<label class='form-label block'>Event: <input type='text' name='event' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<label class='form-label block'>Phone: <input type='text' name='phone' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<label class='form-label block'>Email: <input type='email' name='email' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<label class='form-label block'>Profile Picture: <input type='file' name='profile_image' accept='image/*' required class='mt-1 p-2 border border-gray-300 rounded w-full'></label>";
        echo "<input type='submit' value='Generate Badge' class='submit-btn w-full p-2 rounded cursor-pointer'>";
        echo "</form>";
    }
    ?>
</div>

</body>
</html>
