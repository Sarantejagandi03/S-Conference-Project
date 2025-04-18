<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(0, 140, 195);
            
    background-image: url('Bg.webp'); 
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: white;
            font-size: 45px; 
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
        header {
            background-color: black;
            height: 100px;
            color: white;
            padding: 40px;
            text-align: center;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
            height: 80px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery-item {
            background-color: rgb(0, 99, 112);
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 10px;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
            transition: transform 0.3s, background-color 0.3s;
            text-align: center; 
        }

        .gallery-item:hover {
            transform: scale(1.05); 
            background-color: rgb(71, 255, 237);
        }

        .gallery-item img {
            width: 150px;
            height: 150px; 
            border-radius: 75%; 
            object-fit: cover;
            display: block; 
            margin: 0 auto; 
        }

        .info {
            font-size: 20px;
            color: black;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="text-3xl">S - Conference Management</h1> 
    </header>
    <div class="gallery-container">
        <h1>Expert Speaker</h1>
        <div class="gallery">
            <div class="gallery-item">
                <img src="vais.jpeg" alt="Vais">
                <p class="info">
                    Email: karnamsai0909@gmail.com<br>
                    Contact-No: 7569052240<br>
                    Area Of Expertise: AI and ML<br>
                    <div class="star-rating" style="color: gold;">★★★★★</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="uday.jpeg" alt="Uday">
                <p class="info">
                    Email: eedarauday@gmail.com<br>
                    Contact-No: 722566998<br>
                    Area Of Expertise: Art<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="vivek.jpeg" alt="Vivek">
                <p class="info">
                    Email: vivekreddy23@gmail.com<br>
                    Contact-No: 7896541587<br>
                    Area Of Expertise: Agriculture<br>
                    <div class="star-rating" style="color: gold;">★★★☆☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="um.jpeg" alt="Umesh">
                <p class="info">
                    Email: umesh24@gmail.com<br>
                    Contact-No: 9638745216<br>
                    Area Of Expertise: Web Development<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="thiru.jpeg" alt="Thiru">
                <p class="info">
                    Email: thirumalreddy36@gmail.com<br>
                    Contact-No: 7569483219<br>
                    Area Of Expertise: Hackathon<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="sri.jpeg" alt="Srinivas">
                <p class="info">
                    Email: srinivas56@gmail.com<br>
                    Contact-No: 9876543210<br>
                    Area Of Expertise: Graphic Design<br>
                    <div class="star-rating" style="color: gold;">★★★☆☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="shankar.png" alt="Shankar">
                <p class="info">
                    Email: shankar@gmail.com<br>
                    Contact-No: 9123456789<br>
                    Area Of Expertise: Digital Marketing<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="bhu.png" alt="Bhu">
                <p class="info">
                    Email: bhuvan14@gmail.com<br>
                    Contact-No: 9234567890<br>
                    Area Of Expertise: Content Writing<br>
                    <div class="star-rating" style="color: gold;">★★★☆☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="saran.jpeg" alt="Saran">
                <p class="info">
                    Email: sara12n@gmail.com<br>
                    Contact-No: 9345678901<br>
                    Area Of Expertise: Cloud Specialist<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="venky.png" alt="Venky">
                <p class="info">
                    Email: venky@gmail.com<br>
                    Contact-No: 9456789012<br>
                    Area Of Expertise: Blockchain Technology<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="abhi.jpeg" alt="Abhinavin">
                <p class="info">
                    Email: abhinavin23@example.com<br>
                    Contact-No: 9567890123<br>
                    Area Of Expertise: Cybersecurity<br>
                    <div class="star-rating" style="color: gold;">★★★★★</div>
                </p>
            </div>
            <div class="gallery-item">
                <img src="deep.png" alt="Deepak">
                <p class="info">
                    Email: deepak54@gmail.com<br>
                    Contact-No: 9678901234<br>
                    Area Of Expertise: Data-Science<br>
                    <div class="star-rating" style="color: gold;">★★★★☆</div>
                </p>
            </div>
        </div>
    </div>
    <footer >
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>
</body>
</html>