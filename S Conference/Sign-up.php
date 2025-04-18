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

$message = ""; 
$password = "";
$confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];

    if (strlen($password) < 8) {
        $message = "Password must contain at least 8 characters.";
    } elseif (!preg_match("/[A-Z]/", $password)) {
        $message = "Password must contain at least one uppercase character.";
    } elseif (!preg_match("/[!@$%^&*]/", $password)) {
        $message = "Password must contain at least one special character.";
    } elseif ($password !== $confirm_password) {
        $message = "Passwords do not match. Please try again.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (first_name, last_name, dob, username, password, country, gender) VALUES ('$firstName', '$lastName', '$dob', '$username', '$hashed_password', '$country', '$gender')";

        if ($conn->query($sql) === TRUE) {
            header("Location: signin.php");
            exit();
        } else {
            $message = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .scrollable-select {
            height: 150px;
            overflow-y: auto;
        }
        .input-field {
            height: 50px;
            font-size: 1.125rem;
        }
        .select-field {
            height: 50px;
            font-size: 1.125rem;
        }
        .form-container {
            min-height: 600px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
        }
    </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('login.jpg');">
    <header class="bg-black bg-opacity-500 text-white py-4 text-center" style="height: 100px;">
        <h1 class="text-5xl text-2xl font-bold">Welcome to S - Conference Management</h1>
    </header>

    <div class="flex justify-center items-center h-full p-2">
        <div class="bg-white rounded-lg shadow-lg form-container">
            <h2 class="text-center text-white bg-green-600 p-2 rounded text-2xl font-bold">Welcome !!!</h2>
            <form method="POST">
                <label for="firstName" class="block mt-1 text-lg font-bold">First Name:</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required class="border border-gray-300 rounded p-1 w-full mt-1 input-field">

                <label for="lastName" class="block mt-1 text-lg font-bold">Last Name:</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required class="border border-gray-300 rounded p-1 w-full mt-1 input-field">

                <label for="dob" class="block mt-1 text-lg font-bold">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required class="border border-gray-300 rounded p-1 w-full mt-1 input-field" placeholder="dd-mm-yyyy">

                <label for="username" class="block mt-1 text-lg font-bold">Create Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required class="border border-gray-300 rounded p-1 w-full mt-1 input-field">

                <label for="password" class="block mt-1 text-lg font-bold">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required value="<?php echo htmlspecialchars($password); ?>" class="border border-gray-300 rounded p-1 w-full mt-1 input-field">

                <label for="confirm_password" class="block mt-1 text-lg font-bold">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required value="<?php echo htmlspecialchars($confirm_password); ?>" class="border border-gray-300 rounded p-1 w-full mt-1 input-field">

                <label for="country" class="block mt-1 text-lg font-bold">Country:</label>
                <select id="country" name="country" required class="border border-gray-300 rounded p-1 w-full mt-1 select-field scrollable-select">
                    <option value="">Select your country</option>
                    <option value="India">India</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <option value="Australia">Australia</option>
                    <option value="Other">Other</option>
                </select>

                <label for="gender" class="block mt-1 text-lg font-bold">Gender:</label>
                <select id="gender" name="gender" required class="border border-gray-300 rounded p-1 w-full mt-1 select-field scrollable-select">
                    <option value="">Select your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Rather Not To Say">Rather Not To Say</option>
                </select>

                <div class="flex items-center mt-1">
                    <input type="checkbox" id="terms" name="terms" required class="mr-1">
                    <label for="terms" class="text-lg font-bold">I accept all terms and conditions</label>
                </div>
                <p class="mt-1 text-lg font-bold">Already have an account? <a href="signin.php" class="text-blue-600">Sign In</a>.</p>
                <input type="submit" value="Sign Up" class="bg-green-600 text-white rounded p-1 w-full mt-2 hover:bg-blue-700 text-lg font-bold">
            </form>
        </div>
    </div>

    <footer class="bg-black bg-opacity-80 text-white text-center py-4" style="height: 100px;">
        <p class="text-3xl">&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>

    <script>
        function showErrorMessage(message) {
            if (message) {
                Swal.fire({
                    title: 'Error',
                    text: message,
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                        title: 'text-xl font-bold',
                        content: 'text-lg'
                    }
                });
            }
        }
    </script>

    <?php if (!empty($message)) { ?>
        <script>
            showErrorMessage("<?php echo $message; ?>");
        </script>
    <?php } ?>
</body>
</html>
