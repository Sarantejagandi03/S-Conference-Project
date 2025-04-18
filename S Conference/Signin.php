<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "register"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result === FALSE) {
        $error_message = "SQL Error: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "No user found with that username.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }

        function showError(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body class="bg-cover bg-center min-h-screen flex flex-col justify-between" style="background-image: url('login.jpg');">
    <header class="bg-black bg-opacity-80 text-white py-4 text-center">
        <h1 class="text-2xl">Welcome to S - Conference Management</h1>
    </header>

    <div class="flex flex-1 justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
            <h2 class="text-center text-white bg-green-600 py-2 rounded">Welcome Back !!!</h2>
            <form method="POST" action="">
                <label for="username" class="block mt-4"><b>Username:</b></label>
                <input type="text" id="username" name="username" placeholder="Username" required class="w-full p-3 border border-gray-300 rounded mt-1">

                <label for="password" class="block mt-4">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required class="w-full p-3 border border-gray-300 rounded mt-1">

                <div class="flex items-center gap-2 mt-4">
                    <input type="checkbox" id="terms" name="terms" required class="w-5 h-5">
                    <label for="terms" class="terms-label"><b>I accept all terms and conditions</b></label>
                </div>

                <input type="submit" value="Sign-In" class="bg-green-600 text-white rounded py-2 mt-4 w-full hover:bg-blue-700 cursor-pointer">
            </form>

            <p class="mt-4 text-center">
                <a href="sign-up.php" class="text-green-500 text-xl font-bold">Don't have an account? Sign up here.</a>
            </p>
            <div style="display: flex; gap: 100px;">
    <img src="go.jpg" alt="Description of Image" class="your-css-classes" style="width: 100px; height: 45px;" />
    <img src="x1.png" alt="Description of Image" class="your-css-classes" style="width: 73px; height: 50px;" />       

            </div> 
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-white text-center py-2">
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>

    <script>
        showError("<?php echo addslashes($error_message); ?>");
    </script>
</body>
</html>
