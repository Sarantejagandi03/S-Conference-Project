<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Payment Gateway Form Design</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: rgb(0, 28, 81); 
            
        background-image: url('bg.webp'); 
        }
        header {
            background-color: black;
            color: white;
            text-align: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            height: 100px;
            line-height: 100px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 25px;
        }

        .container form {
            width: 800px;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        form .row {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .row .column {
            flex: 1 1 250px;
        }

        .column .title {
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .column .input-box {
            margin: 15px 0;
        }

        .input-box span {
            display: block;
            margin-bottom: 10px;
        }

        .input-box input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .column .flex {
            display: flex;
            gap: 15px;
        }

        .flex .input-box {
            margin-top: 5px;
        }

        .input-box img {
            height: 34px;
            margin-top: 5px;
            filter: drop-shadow(0 0 1px #000);
        }

        form .btn {
            width: 100%;
            padding: 12px;
            background: rgb(23, 2, 161);
            border: none;
            outline: none;
            border-radius: 6px;
            font-size: 17px;
            color: #fff;
            margin-top: 5px;
            cursor: pointer;
            transition: .5s;
        }

        form .btn:hover {
            background: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <header>
        <h1 class="text-2xl">Welcome to S - Conference Management</h1>
    </header>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="column">
                    <h3 class="title">QR Code</h3>
                    <div class="input-box">
                        <img src="qr.webp" alt="QR Code" style="width: 100%; height: auto; border-radius: 8px;">
                        <img src="paytm.jpg" alt="Paytm QR Code" style="width: 100%; height: 60px; border-radius: 8px;">
                        <img src="phonepe.jpg" alt="PhonePe QR Code" style="width: 100%; height: 60px; border-radius: 8px;">
                    </div>
                </div>
000000
                <div class="column">
                    <h3 class="title">Payment</h3>
                    <div class="input-box">
                        <span>Cards Accepted :</span>
                        <img src="cards.jpg" alt="" style="width: 100%; height: 60px;">
                    </div>
                    <div class="input-box">
                        <span>Name On Card :</span>
                        <input type="text" placeholder="Name On Card">
                    </div>
                    <div class="input-box">
                        <span>Credit Card Number :</span>
                        <input type="number" placeholder="1111 2222 3333 4444">
                    </div>
                    <div class="input-box">
                        <span>Exp. Month :</span>
                        <input type="text" placeholder="May">
                    </div>

                    <div class="flex">
                        <div class="input-box">
                            <span>Exp. Year :</span>
                            <input type="number" placeholder="2025">
                        </div>
                        <div class="input-box">
                            <span>CVV :</span>
                            <input type="number" placeholder="123">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    <footer class="bg-black bg-opacity-80 text-white text-center py-2">
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>
</body>

</html>
