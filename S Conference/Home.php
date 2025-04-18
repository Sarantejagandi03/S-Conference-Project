<?php
$upload_dir = 'C:/xampp/htdocs/uploads/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely Professional University Event Management Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0; 
    padding: 0; 
    display: flex; 
    background-color: rgb(0, 0, 0); 
    overflow-x: hidden; 
}

header {
    background:rgb(0, 179, 128); 
    color: white; 
    padding: 15px 20px; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
}

.header-content {
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    width: 100%; 
}

.Sign-out {
    background: rgb(219, 149, 29); 
    padding: 35px 25px; 
    border-radius: 15px; 
    font-size: 25px;
    font-weight: bold;
    color: white; 
    text-decoration: none; 
    transition: background 0.3s; 
}

.Sign-out:hover {
    background: rgb(0, 179, 15); 
}
.box {
        background-color:rgb(2, 107, 149);
        border: 1px solid #ccc;
        border-radius: 8px;
        margin: 35px;
        padding: 20px;
        width: 600px;
        height:500px;
        font-size: 45px;
        font-weight: bold;
        color:rgb(255, 255, 255);
        box-shadow: 0 4px 15px rgb(255, 0, 0);
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .box:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }
    .round-image {
    width: 100px;
    height: 100px;
    margin-right: 20px;
    border-radius: 50%;
}

.sidebar {
            width: 250px;
            background: rgb(0, 179, 128); 
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 20px;
            left: -250px;
            transition: 0.3s;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background:rgb(6, 92, 138); 
        }
.menu-icon {
    font-size: 30px; 
    cursor: pointer; 
    position: absolute; 
    top: 15px; 
    left: 15px; 
    color: white; 
    background: rgb(2, 137, 183); 
    border: none; 
    padding: 10px; 
    border-radius: 5px; 
    transition: background 0.3s; 
}

.content {
    height: 100px; 
    margin-left: 20px; 
    padding: 20px; 
    flex-grow: 1; 
    transition: margin-left 0.3s; 
}



section {
    background: white; 
    padding: 20px; 
    margin-bottom: 20px; 
    border-radius: 5px; 
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
}

footer {
    text-align: center; 
    padding: 10px 0; 
    background:rgb(0, 0, 0); 
    color: white; 
    position: relative; 
    bottom: 0; 
    width: 100%; 
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2); 
}

h3 {
    text-align: center; 
    color: #333; 
    margin-bottom: 15px; 
}

.home {
    background-color: rgb(0, 0, 0); 
    color: white; 
    font-size: 20px; 
    background-image: url('Bg.webp'); 
    
}

.search-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .search-input {
            width: 900px;
            height: 60px;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .search-button {
            background-color:rgb(0, 0, 0);;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
            margin-left: 10px;
            font-weight: bold;
        }

        .search-button:hover {
            background-color:rgb(0, 149, 179);;
            transform: translateY(-2px);
        }
.sidebar.active {
    left: 0; 
}

.content.active {
    margin-left: 260px; 
}

.event-container {
    display: flex; 
    justify-content: space-between; 
    margin-top: 20px; 
    color: black; 
}

.event-card {
    background: #06121e; 
    border: 1px solid #ccc; 
    color: rgb(0, 0, 0); 
    border-radius: 5px; 
    padding: 15px; 
    flex: 1; 
    font-size: 25px; 
    margin: 0 10px; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
    background-image: url('event.webp'); 
    transition: background 0.3s, box-shadow 0.3s, transform 0.3s; 
}

.event-card:hover {
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
    transform: translateY(-5px); 
}

.event-card h3 {
    margin-top: 0; 
    font-size: 1.5em; 
    color: rgb(0, 0, 0); 
}

.event-card p {
    font-size: 1.1em; 
    color: rgb(0, 0, 0); 
}

.social-icons {
    display: flex; 
    margin-top: 10px; 
    background: black; 
}

.social-icons a {
    margin: 0 10px; 
}


.event-slider {
    position: relative; 
    width: 100%; 
    height: 600px; 
    overflow: hidden; 
    text-align: center; 
    font-size: 45px; 
    font-weight: bold; 
    color: black; 
    padding: 0; 
    border: 10px solid black; 
    border-radius: 10px; 
}

.event-slide {
    position: absolute; 
    width: 100%; 
    height: 100%; 
    opacity: 0; 
    transition: opacity 0.8s ease-in-out; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
    box-sizing: border-box; 
}

.event-slide.active {
    opacity: 1; 
}

.nav-button {
    position: absolute; 
    top: 50%; 
    transform: translateY(-50%); 
    background-color: rgba(255, 255, 255, 0.7); 
    border: none; 
    padding: 10px; 
    cursor: pointer; 
    font-size: 18px; 
    border-radius: 5px; 
    z-index: 10; 
}


.prev {
    left: 10px; 
}

.next {
    right: 10px; 
}

.event-card img {
    width: 100%; 
    height: auto; 
    max-height: 150px; 
    object-fit: cover; 
    border-radius: 5px; 
    margin-bottom: 10px; 
}





.info-section {
    width: 100%; 
    margin: 20px auto; 
    padding: 20px; 
    background-color: rgb(8, 90, 123); 
    color: white; 
    border-radius: 10px; 
    display: flex; 
    gap: 20px; 
    justify-content: space-between; 
}

.about, .contact {
    flex: 1; 
    background: black; 
    padding: 20px; 
    border-radius: 10px; 
}

.about-container {
    display: flex; 
    gap: 20px; 
    align-items: center; 
}

.about-text {
    flex: 2; 
}

.about-image {
    flex: 1; 
}

.about-image img {
    width: 100%; 
    border-radius: 5px; 
}

.social-icons {
    display: flex; 
    gap: 10px; 
    justify-content: center; 
    margin: 10px 0; 
}

.social-icons img {
    width: 65px; 
    height: 65px; 
}

.contact hr {
    border: 1px solid white; 
    margin: 10px 0; 
}

.address {
    text-align: center; 
    margin-top: 10px; 
}

.footer-section {
    width: 100%; 
    background: #222; 
    color: white; 
    text-align: center; 
    padding: 20px; 
    margin-top: 20px; 
}
.flex-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}


@keyframes float {
    0% {
        transform: translatey(0);
    }
    50% {
        transform: translatey(-10px); 
    }
    100% {
        transform: translatey(0);
    }
}

.float-effect {
    animation: float 3s ease-in-out infinite;
}
.speaker-profile {
    transition: transform 0.3s;
}

.speaker-profile:hover {
    transform: scale(1.05);
}

.venue-link img {
    transition: transform 0.3s ease; 
}

.venue-link:hover img {
    transform: scale(1.05); 
}
.feedback-container {
    width: 400px;
    height: 600px;
    padding: 20px;
    margin: 0 auto;
    font-size: 25px;
    color: white;
}

.feedback-box input,
.feedback-box textarea {
    width: 100%;
    max-width: 200%;
    height: 100px;
    padding: 10px;
    font-size: 24px;
    color:black;
}

.feedback-box button {
    padding: 8px 12px;
    font-size: 25px;
    height: 100px;
}
.rolling-text {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    position: relative;
    color: white;
    font-size: 35px;
}

.rolling-text h3 {
    display: inline-block;
    animation: roll 10s linear infinite;
    margin: 0;
    color: red;
}

@keyframes roll {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
@keyframes fall {
    0% {
        transform: translateY(-100%);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.falling-letter {
    display: inline-block;
    animation: fall 1s ease forwards;
}
   </style>
</head>


<body onclick="closeSidebar(event)">
    <button class="menu-icon" onclick="toggleSidebar(event)" id="menuButton">☰</button>
    <div class="sidebar" id="sidebar">
        <a href="#content">Home</a>
        <a href="#about">About Us</a>
        <a href="#event">Events</a>
        <a href="#contact">Contact Us</a>
        
        <a href="registration.php">Registration Management</a>
        <a href="registration.php">Speaker Management</a>
        <a href="registration.php">Feedback</a>
    </div>
    <div class="content" id="content">
    <header>
    <div class="header-content">
        <h1 id="falling-text" style="height:100px; padding:0px; font-size:50px; margin: 0;">
            <b id="animated-text">S - Conference Management System</b>
        </h1>
        <div>
            <a href="main.php" class="Sign-out">Sign-Out</a>
        </div>
       
    </div>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search events..." class="search-input">
        <button class="search-button" onclick="searchEvents()">Search</button>
    </div>
 
</header>
        <section class="home" id="home">
        <div class="event-slider" id="event">
                <button class="nav-button prev" onclick="changeSlide(-1)">&#10094;</button>
                <b>
                <div class="event-slide active" style="background-image: url('Web.avif');">
        <a href="registration.php" style="display: block; height: 100%; color: black; text-decoration: none;">
        <u> Event 1: Conference on Web Development - 25th May 2025 </u>
        </a>
    </div>
    <div class="event-slide" style="background-image: url('AI.png'); display: flex; flex-direction: column; justify-content: flex-end; height: 100%;">
    <a href="registration.php" style="display: block; color: white; text-decoration: none; padding: 10px;">
        <u>Event 2: AI & ML Summit - 10th May 2025</u>
    </a>
</div>


    <div class="event-slide" style="background-image: url('cyber.webp');">
        <a href="registration.php" style="display: block; height: 100%; color: black; text-decoration: none;">
        <u>Event 3: Cybersecurity Meetup - 5th May 2025 </u>
        </a>
</b> </div>
                <button class="nav-button next" onclick="changeSlide(1)">&#10095;</button>
            </div>
       
            <div class="event-container">
                <div class="event-card">
                <div class="rolling-text">
    <h3><b>Register for Upcoming Events</b></h3>
</div>
                    <h3><b>Upcoming Events</h3>
                    <p>Join us for upcoming events, keynote speeches, and Digital opportunities.</p>
                    <ul>
                    <li><strong>Event 1:</strong> Conference on Web Development - 25th May 25 
                    <p>Speaker: K.Umesh Reddy</p> 
                    <p>Venue: Heritage Hotel</p>
                    <p>Key-Note: Web-Development Projects </p>
                     <a href="registration.php">
                    <img src="Web.avif" alt="Web Development Conference" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
                </a>
            </li>
            <li>
                <strong>Event 2:</strong> AI & ML Summit - 15th May 
                <p>Speaker: K.Sai Vaishnav Kumar</p> 
                    <p>Venue: Imperial Hotel</p>
                    <p>Key-Note: Digitial World with A.I.</p>
                <a href="registration.php">
                    <img src="AI.png" alt="AI & ML Summit" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
                </a>
            </li>
            <li>
                <strong>Event 3:</strong> Cybersecurity Meetup - 10th May 
                <p>Speaker: K.Abhinavin</p> 
                    <p>Venue: Wonderland Hotel</p>
                    <p>Key-Note: Protection With Cyber-Security</p>
                <a href="registration.php">
                    <img src="cyber.webp" alt="Cybersecurity Meetup" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
                </a>
</li>
                    </ul>
                </div>
                <div class="event-card">
                <div class="rolling-text">
    <h3>Completed Events</h3>
</div>
                    <h3>Completed Events</h3>
                    <p>Take a look at our recently completed events and see what you missed!</p>
                    <ul>
                    <li><strong>Event 1:</strong> Conference on Bio-Chemistry - 12th March 25
                    <p>Speaker: G.Saran Teja</p> 
                    <p>Venue: Imperial Hotel</p>
                    <p>Key-Note: Bio-Chemistry.</p>
                    <a href="eventcomp.php">
                    <img src="bio.jpg" alt="Web Development Conference" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
</a>
                </li>
                        <li><strong>Event 2:</strong>  Conference on Agriculture - 10th March 25
                        <p>Speaker: A.Vivek Reddy</p> 
                    <p>Venue: Imperial Hotel</p>
                    <p>Key-Note: Agriculture</p> 
                    <a href="eventcomp.php">
                        <img src="agri.jpg" alt="Web Development Conference" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
</a>
                    </li>
                        <li><strong>Event 3:</strong> Code-US-Hackathon - 4th March 25
                        <p>Speaker: B.Thirumal Reddy</p> 
                    <p>Venue: Heritage Hotel</p>
                    <p>Key-Note: Hackathon</p> 
                    <a href="eventcomp.php">
                        <img src="hack.png" alt="Web Development Conference" style="width: 100%; height: auto; border-radius: 5px; margin-top: 10px;">
</b></a>
                    </li>
                    </ul>
                </div>
               
            </div>
            <div class="flex-container" style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;">
    <div style="display: flex; justify-content: center;">
        <div class="box" style="display: flex; flex-direction: column; align-items: center;">
            <img src="abstract.webp" style="width: 100px; height: 100px; border-radius: 50%;">
            <a href="abstract.php">1. Abstract of Event's<br><br><br>
                <p><u>View Details-></u></p>
            </a>
        </div>

        <div class="box" style="display: flex; flex-direction: column; align-items: center;">
            <img src="speakerlist.jpg" style="width: 100px; height: 100px; border-radius: 50%;">
            <a href="speakerlist.php">2. Speaker's-List<br><br><br>
                <p><u>View Details-></u></p>
            </a>
        </div>
        
        <div class="box" style="display: flex; flex-direction: column; align-items: center;">
            <img src="eventcomp.webp" style="width: 100px; height: 100px; border-radius: 50%;">
            <a href="eventcomp.php" style="font-size: 35px">3. Event-Completed/Completed Event Images<br><br><br>
                <p><u>View Details-></u></p>
            </a>
        </div>
    </div>
    
    <div style="display: flex; justify-content: center; margin-top: 10px;">
        <div class="box" style="display: flex; flex-direction: column; align-items: center;">
            <img src="implearn.png" style="width: 100px; height: 100px; border-radius: 50%;">
            <a href="implearn.php">4. Learning From Event<br><br><br>
                <p><u>View Details-></u></p>
            </a>
        </div>
        
        <div class="box" style="display: flex; flex-direction: column; align-items: center;">
            <img src="registration.jpg" style="width: 100px; height: 100px; border-radius: 50%;">
            <a href="registration.php" style="font-size: 35px" >5. Register for Upcoming Events:
                <br><br><br>
                Attende/Speaker Registration<br><br>
                <p><u>View Details-></u></p>
            </a>
        </div>
    </div>
</div>



            <div class="flex justify-between mt-10 gap-4">
            
    <!-- Speaker Profiles Section -->
    <div class="speaker-profiles bg-white p-4 rounded-lg shadow-lg w-1/2 mx-auto" style="background-image: url('Black.jpg');">
    <h3 class="text-2xl text-center text-white underline font-bold">FEATURED SPEAKERS</h3>
    <div class="flex justify-around mt-4 gap-4">
        <div class="speaker-profile text-center rounded-lg overflow-hidden bg-blue-300 p-6" style="width: 200px; height: 300px;">
            <img src="vais.jpeg" alt="Speaker 1" class="rounded-full w-32 h-32 mx-auto object-cover" style="width: 128px; height: 128px;">
            <h4 class="text-white font-bold">K.Sai Vaishnav</h4>
            <p class="text-white font-bold">Expert in AI and Machine Learning</p>
            <div class="star-rating" style="color: gold;">★★★★★</div>
        </div>
        <div class="speaker-profile text-center rounded-lg overflow-hidden bg-green-300 p-4" style="width: 200px; height: 300px;">
            <img src="Abhi.jpeg" alt="Speaker 2" class="rounded-full mx-auto object-cover" style="width: 128px; height: 128px;">
            <h4 class="text-white font-bold">K.Abhinavin</h4>
            <p class="text-white font-bold">Renowned Cybersecurity Specialist</p>
            <div class="star-rating" style="color: gold;">★★★☆☆</div>
        </div>
        <div class="speaker-profile text-center rounded-lg overflow-hidden bg-red-300 p-4" style="width: 200px; height: 300px;">
            <img src="um.jpeg" alt="Speaker 3" class="rounded-full mx-auto object-cover" style="width: 128px; height: 128px;">
            <h4 class="text-white font-bold">K.Umesh Reddy</h4>
            <p class="text-white font-bold">Web Development Guru</p>
            <div class="star-rating" style="color: gold;">★★★★☆</div>
        </div>
        <div class="speaker-profile text-center rounded-lg overflow-hidden bg-yellow-300 p-4" style="width: 200px; height: 300px;">
            <img src="saran.jpeg" alt="Speaker 4" class="rounded-full mx-auto object-cover" style="width: 128px; height: 128px;">
            <h4 class="text-white font-bold">Saran Teja</h4>
            <p class="text-white font-bold">Cloud Specialist</p>
            <div class="star-rating" style="color: white;">★★★★☆</div>
        </div>
    </div>
</div>


    <!-- Venue Details Section -->
    <div class="venue-details-container bg-white p-4 rounded-lg shadow-lg w-1/2" style="background-image: url('new2.jpg'); background-size: cover; background-position: center;">
    <h3 class="text-3xl text-center text-white font-bold mb-4">Venue Details</h3>
    <div class="flex justify-around mt-4">
        <div class="venue-profile text-center">
            <a href="https://www.google.com/maps/place/Heritage+Empress" target="_blank" class="venue-link">
                <img src="Heritage.jpg" alt="Heritage Empress" class="rounded-lg w-48 h-60" title="Click to view the venue">
                <span class="venue-text block mt-3 text-2xl text-white-600 font-bold">Heritage Empress</span>
            </a>
        </div>
        <div class="venue-profile text-center">
            <a href="https://www.google.com/maps/place/Wonderland+Farms" target="_blank" class="venue-link">
                <img src="Wonderland-Farms.jpg" alt="Wonderland Farms" class="rounded-lg w-48 h-60" title="Click to view the venue">
                <span class="venue-text block mt-3 text-2xl text-white-600 font-bold">Wonderland Farms</span>
            </a>
        </div>
        <div class="venue-profile text-center">
            <a href="https://www.google.com/maps/place/Imperial+Manor" target="_blank" class="venue-link">
                <img src="imperial.jpg" alt="Imperial Manor" class="rounded-lg w-48 h-60" title="Click to view the venue">
                <span class="venue-text block mt-3 text-2xl text-white-600 font-bold">Imperial Manor</span>
            </a>
        </div>
    </div>
    <p class="text-2xl text-white-600 font-bold">Click on the images to view the venue details</p>

</div>

</div>


        <div class="flex flex-col md:flex-row justify-center items-start py-10 space-x-8">
  

    <!-- Subscription Plans Section -->
    <div class="flex flex-col items-center w-full" >

    <h2 class="text-3xl font-bold mb-6 text-center bg-black text-white">Choose Your Subscription Plan</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-5xl float-effect">
   <!-- Basic Plan -->
   <div class="bg-green-300 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold mb-4 text-black">Basic Plan</h3>
        <p class="text-xl font-bold mb-4 text-black">Rs.100/month</p>
        <ul class="mb-6 text-black">
            <li class="mb-2">✔️ Access to basic features</li>
            <li class="mb-2">✔️ Email support</li>
            <li class="mb-2">✔️ Community access</li>
        </ul>
        <a href="payment.php">
        <button class="bg-green-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors duration-200">Choose Plan</button>
        </a>
    </div>

    <!-- Standard Plan -->
    <div class="bg-green-300 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold mb-4 text-black">Standard Plan</h3>
        <p class="text-xl font-bold mb-4 text-black">Rs.200/month</p>
        <ul class="mb-6 text-black">
            <li class="mb-2">✔️ Access to all basic features</li>
            <li class="mb-2">✔️ Priority email support</li>
            <li class="mb-2">✔️ Access to exclusive content</li>
        </ul>
        <a href="payment.php">
            <button class="bg-green-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors duration-200">Choose Plan</button>
        </a>
    </div>

    <!-- Premium Plan -->
    <div class="bg-green-300 shadow-lg rounded-lg p-6 text-center">
        <h3 class="text-2xl font-semibold mb-4 text-black">Premium Plan</h3>
        <p class="text-xl font-bold mb-4 text-black">Rs.370/month</p>
        <ul class="mb-6 text-black">
            <li class="mb-2">✔️ Access to all features</li>
            <li class="mb-2">✔️ 24/7 support</li>
            <li class="mb-2">✔️ Personalized recommendations</li>
        </ul>
        <a href="payment.php">
            <button class="bg-green-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors duration-200">Choose Plan</button>
        </a>
    </div>
</div>

    </div>
</div>

</section>

            <section class="info-section" id="info">
        <div class="about" id="about">
            <h2>About Us</h2>
            <hr> 
            <div class="about-container">
                <div class="about-text">
                    <p>We are dedicated to enhancing the conference experience with innovative digital solutions. Our platform offers seamless management of events, attendees, and schedules, ensuring that every participant has a fulfilling experience.</p>
                    <p>Our mission is to connect people through technology, making conferences more accessible and engaging for everyone involved. We believe in harnessing the power of digital tools to streamline the planning process, allowing organizers to focus on creating impactful content and experiences.</p>
                    <p>With our user-friendly interface, event organizers can easily set up and manage their events, from registration to feedback collection. Attendees can access all necessary information in one place, making it easier for them to engage with speakers, sessions, and networking opportunities.</p>
                    <p>We continuously strive for innovation, incorporating the latest technologies such as AI-driven analytics and virtual reality experiences to enhance our offerings. Our team is passionate about creating a vibrant community where ideas can flourish and connections can grow.</p>
                </div>
                
            </div>
        </div>
    
        <div class="contact" id="contact">
            <h2><b>Contact Us:</b></h2>
            <hr>
            <div class="social-icons">
                <a href="https://www.instagram.com/sai__vaishnav_/?next=%2F&hl=en" target="_blank">
                    <img src="insta1.jpg" alt="Instagram">
                </a>
                <a href="https://www.linkedin.com/in/karnam-sai-vaishnav-kumar-a080b6298/" target="_blank">
                    <img src="link.jpg" alt="LinkedIn">
                </a>
                <a href=" https://x.com/SaiVaishna20512?t=AIqwzsKwd2V0p80rdI_ClA&s=08" target="_blank">
                    <img src="x.jpg" alt="X">
                </a>
            </div>
            <div class="address">
                <p>Address: H-no 2-30, Jalandhar, Punjab, India</p>
                
                <p>Phone number: 7569052240</p>
                <p>karnamsai0909@gmail.com</p>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <p>&copy; 2025 Conference Management System. All rights reserved.</p>
    </footer>
</section>

    <script>
                function toggleSidebar(event) {
            event.stopPropagation();
            let sidebar = document.getElementById("sidebar");
            let content = document.getElementById("content");
            let menuButton = document.getElementById("menuButton");
            
            sidebar.classList.toggle("active");
            content.classList.toggle("active");

            menuButton.innerHTML = sidebar.classList.contains("active") ? "✖" : "☰";
        }
        
        function closeSidebar(event) {
            let sidebar = document.getElementById("sidebar");
            let menuButton = document.getElementById("menuButton");
            
            if (!sidebar.contains(event.target) && !menuButton.contains(event.target)) {
                sidebar.classList.remove("active");
                document.getElementById("content").classList.remove("active");
                menuButton.innerHTML = "☰";
            }
        }

        let slideIndex = 0;
        const slides = document.querySelectorAll(".event-slide");

        function showSlides() {
            slides.forEach(slide => slide.classList.remove("active"));
            slides[slideIndex].classList.add("active");
            slideIndex = (slideIndex + 1) % slides.length;
        }

        function changeSlide(direction) {
            slides.forEach(slide => slide.classList.remove("active"));
            slideIndex = (slideIndex + direction + slides.length) % slides.length;
            slides[slideIndex].classList.add("active");
        }

        setInterval(showSlides, 3000);


        function searchEvents() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const sections = document.querySelectorAll('.searchable');

    sections.forEach(section => {
        const text = section.textContent.toLowerCase();
        section.style.display = text.includes(input) ? '' : 'none';
    });
}


document.addEventListener("DOMContentLoaded", function() {
    const text = "S - Conference Management System";
    const animatedTextElement = document.getElementById("animated-text");

    function animateText() {
        animatedTextElement.innerHTML = '';
        text.split('').forEach((letter, index) => {
            const span = document.createElement("span");
            span.textContent = letter === " " ? "\u00A0" : letter;
            span.className = "falling-letter";
            span.style.animationDelay = `${index * 0.1}s`;
            animatedTextElement.appendChild(span);
        });

        setTimeout(animateText, (text.length * 100) + 1000);
    }

    animateText();
});

    </script>
</body>
</html>
