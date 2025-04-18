<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Events - Bio-Chemistry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        background-image: url('Bg.webp'); 
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: white;
    }

    .event {
        background-color:   rgb(0, 179, 128);
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .event h2 {
        color: #333;
    }

    .event p {
        color: black;
        font-size: 25px;
        line-height: 1.6;
        margin: 5px 0;
    }

    .event img {
        width: 100%;
        max-width: 600px;
        border-radius: 8px;
        margin: 10px 0;
    }

    .event-details {
        text-align: center;
    }

    .image-gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }

    .image-box {
        width: calc(25% - 20px); 
        height: 200px;
        margin: 10px;
        background-color: black;
        border: 5px solid red;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition: border-color 0.3s, transform 0.3s; 
        cursor: pointer;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .image-box:hover {
        border-color: #333;
        transform: scale(1.05); 
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        margin: auto;
        display: block;
        width: auto;
        max-width: 90%;
        max-height: 90%;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }
</style>
<body>
    <div class="container">
        <h1>Completed Events on Bio-Chemistry</h1>

        <div class="event">
            <h2>Bio-Chemistry</h2>
            <img src="web.avif" alt="Web Development Conference">
            <div class="event-details">
                <p><strong>Event 1:</strong> Conference on Agriculture</p>
                <p><strong>Date:</strong> 10th March 2025</p>
                <p><strong>Speaker:</strong> A. Vivek Reddy</p>
                <p><strong>Venue:</strong> Imperial Hotel</p>
                <p><strong>Key-Note:</strong> Agriculture</p>
            </div>
        </div>

        <div class="event">
            <h2>Agriculture</h2>
            <img src="agri.jpg" alt="Code-US Hackathon">
            <div class="event-details">
                <p><strong>Event 2:</strong> Code-US Hackathon</p>
                <p><strong>Date:</strong> 4th March 2025</p>
                <p><strong>Speaker:</strong> B. Thirumal Reddy</p>
                <p><strong>Venue:</strong> Heritage Hotel</p>
                <p><strong>Key-Note:</strong> Hackathon</p>
            </div>
        </div>

        <div class="image-gallery">
            <div class="image-box" onclick="openModal('c1.jpg')"><img src="c1.jpg" alt="Image 1"></div>
            <div class="image-box" onclick="openModal('c2.jpg')"><img src="c2.jpg" alt="Image 2"></div>
            <div class="image-box" onclick="openModal('c3.jpg')"><img src="c3.jpg" alt="Image 3"></div>
            <div class="image-box" onclick="openModal('c4.jpg')"><img src="c4.jpg" alt="Image 4"></div>
            <div class="image-box" onclick="openModal('c5.jpg')"><img src="c5.jpg" alt="Image 5"></div>
            <div class="image-box" onclick="openModal('c6.jpg')"><img src="c6.jpg" alt="Image 6"></div>
            <div class="image-box" onclick="openModal('c7.jpg')"><img src="c7.jpg" alt="Image 7"></div>
            <div class="image-box" onclick="openModal('c8.jpg')"><img src="c8.jpg" alt="Image 8"></div>
            <div class="image-box" onclick="openModal('c9.jpg')"><img src="c9.jpg" alt="Image 9"></div>
            <div class="image-box" onclick="openModal('c10.jpg')"><img src="c10.jpg" alt="Image 10"></div>
            <div class="image-box" onclick="openModal('c11.jpg')"><img src="c11.jpg" alt="Image 11"></div>
            <div class="image-box" onclick="openModal('c12.jpg')"><img src="c12.jpg" alt="Image 12"></div>
            <div class="image-box" onclick="openModal('c13.jpg')"><img src="c13.jpg" alt="Image 13"></div>
            <div class="image-box" onclick="openModal('c14.avif')"><img src="c14.avif" alt="Image 14"></div>
            <div class="image-box" onclick="openModal('c15.jpg')"><img src="c15.jpg" alt="Image 15"></div>
        </div>

        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
    </div>

    <script>
        function openModal(imageSrc) {
            const modal = document.getElementById("myModal");
            const modalImage = document.getElementById("modalImage");
            modal.style.display = "flex";
            modalImage.src = imageSrc;
        }

        function closeModal() {
            const modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            const modal = document.getElementById("myModal");
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
