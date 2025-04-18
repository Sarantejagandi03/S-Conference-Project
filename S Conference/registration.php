


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    body{
        
    background-image: url('Bg.webp'); 
    }
    header{
        background-color: black; 
        height: 100px; 
        color: white; 
        padding: 40px; 
        text-align: center; 
        font-size: 35px;
        font-family: 'Times New Roman', Times, serif;
    }
.registration-container {
    margin-top: 20px; 
    width: 50%; 
    text-align: center; 
    background:rgb(5, 75, 137); 
    padding: 30px; 
    border-radius: 10px; 
    color: white;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s; 
}

.registration-container:hover {
    transform: translateY(-2px); 
}

.registration-form {
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    color: black;
    font-size: 16px; 
}

.registration-form input,
.registration-form select,
.registration-form textarea {
    padding: 21px; 
    font-size: 16px; 
    background:rgb(0, 0, 0);
    margin: 10px 0; 
    width: 100%; 
    max-width: 450px; 
    border: 1px solidrgb(0, 0, 0); 
    border-radius: 5px; 
    transition: border 0.3s; 
    color: white;
}

.registration-form input:focus,
.registration-form select:focus,
.registration-form textarea:focus {
    border: 1px solid #000000; 
    outline: none; 
    font-size: 25px; 
}

.registration-container button {
    padding: 12px 20px; 
    font-size: 25px; 
    background-color:rgb(0, 124, 25); 
    color: white; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    margin-top: 10px; 
    transition: background 0.3s; 
}

.registration-container button:hover {
    background-color: #000000; 
}

.terms-container {
    display: flex; 
    align-items: center; 
    gap: 10px; 
    margin-bottom: 20px; 
    color: black; 
}

input[type="checkbox"] {
    width: auto; 
    margin: 0; 
}

.terms-label {
    font-size: 14px; 
    margin: 0; 
}

.speaker-management-container {
    margin-top: 20px; 
    width: 50%; 
    background:rgb(0, 38, 71); 
    padding: 30px; 
    border-radius: 10px; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
}

.speaker-management-container h3 {
    margin-bottom: 20px; 
    color: #333; 
}

.speaker-management-form {
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    width: 100%; 
    max-width: 450px; 
}

.speaker-management-form input,
.speaker-management-form textarea {
    padding: 21px; 
    font-size: 16px; 
    margin: 10px 0; 
    width: 100%; 
    background: rgb(0, 0, 0);
    border: 10px solidrgb(3, 30, 58); 
    border-radius: 5px; 
    color:white;
    transition: border 0.3s; 
}

.speaker-management-form input:focus,
.speaker-management-form textarea:focus {
    border: 10px solidrgb(0, 30, 63); 
    outline: none; 

}

.speaker-management-container button {
    padding: 12px 20px; 
    font-size: 16px; 
    background-color: rgb(0, 124, 25); 
    color: white; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    margin-top: 10px; 
    transition: background 0.3s; 
}

.speaker-management-container button:hover {
    background-color: #0056b3; 
}
.registration-container {
 
 background-size: cover; 
 color:black;
 padding: 30px; 
 border-radius: 10px; 
 box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
 color: white; 
 font-size:35px;
}

.speaker-management-container {
 background: url('new.jpg') no-repeat center center; 
 background-size: cover; 
 padding: 30px; 
 border-radius: 10px; 
 box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
 color: white; 
}
.flex-container {
            display: flex; 
            justify-content: space-between; 
            margin-top: 20px; 
        }
        .registration-container, .speaker-management-container{
            flex: 1; 
            margin: 10px; 
            min-width: 300px; 
            border-radius: 10px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            background-size: cover; 
            color: white; 
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
footer{
    background-color: black; 
    color: white; 
    text-align: center; 
    padding: 20px; 
    font-size: 20px; 
    font-family: 'Times New Roman', Times, serif;
}
@keyframes roll {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
</style>
<body>
<header>
        <h1 class="text-2xl">S - Conference Management</h1>
    </header>
          <!-- Registration Section -->
<form action="badge.php" method="POST" enctype="multipart/form-data">

<div class="flex-container">

    <div class="registration-container" id="registration" style="background-image: url('new2.jpg'); background-size: cover; background-position: center;">
    <div class="rolling-text">
    <h3><b>Registration for Attende/Sponsor</b> </h3>
</div>
        <b>
        <h3 style="font-size 50px; color: white;">Register for Upcoming Events</h3>
        </b>
        <div class="registration-form" style="background-image: url('s3.jpg'); background-size: cover; background-position: center;" >
            <input type="text" name="name" placeholder="Your Name" required style="color: white;">
            <input type="email" name="email" placeholder="Your Email" required style="color: white;">
            <input type="tel" name="phone" placeholder="Your Phone Number" required style="color: white;">
            <input type="text" name="organization" placeholder="Organization/Company (if applicable)" style="color: white;">
            <input type="text" name="payment_details" placeholder="Payment Details (if applicable)" style="color: white;">
            <textarea name="special_requests" placeholder="Special Requests (e.g., dietary restrictions, accessibility needs)" style="color: white;"></textarea>
            <label for="profile_image" style="margin-top: 10px; color:white; font-size:35px;"><b>Upload Profile Image:</b></label>
            <input type="file" name="profile_image" accept="image/*" required>
            <select name="role" required style="color: white;">
                <option value="" disabled selected>Select Role</option>
                <option value="attendee">Attendee</option>
                <option value="sponsor">Sponsor</option>
            </select>
            <select name="event" required style="color: white;">
                <option value="" disabled selected>Select Event</option>
                <option value="Conference on Web Development - March 25">Conference on Web Development - 25th May 2025</option>
                <option value="AI & ML Summit - April 10">AI & ML Summit - 10th May 2025</option>
                <option value="Cybersecurity Meetup - May 5">Cybersecurity Meetup - 5th May 2025</option>
            </select>
            <div class="terms-container">
                <input type="checkbox" required>
                <label for="terms" class="text-2xl font-bold text-center text-white">I agree to the terms & conditions</label>
            </div>
            <form action="badge.php" method="post">
    <button type="submit">Register</button><br><br><br>
</form>
        </div>
        <br>
        <div class="feedback-container bg-white p-4 rounded-lg shadow-lg" style="background-image: url('venue.jpg'); background-size: cover; background-position: center;" id="feedback">
        <div class="rolling-text">
    <h3><b>Feedback & Ratings</b> </h3>
</div>
<h3 style="font-size: 25px; color: black;"><b>Feedback & Ratings</b></h3>
<form action="feedback.php" method="POST">
    <div class="feedback-form" style="display: flex; flex-direction: column; align-items: center;">
        <input type="text" name="name" placeholder="Your Name" required style="padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;">
        <input type="email" name="email" placeholder="Your Email" required style="padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;">
        
        <input type="event" name="event" placeholder="Event" required style="padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;">
        
        <input type="speaker" name="speaker" placeholder="Speaker" required style="padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;">
        <textarea name="feedback" placeholder="Your Feedback" required style="padding: 10px; margin: 10px 0; width: 100%; max-width: 450px; color: black;"></textarea>
        <button type="submit" style="padding: 12px 20px; font-size: 16px; background-color:rgb(0, 124, 25); color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px;">Submit Feedback</button>
    </div>
</form>

</div>

    </div>

    <div class="speaker-management-container" id="speakers" style="background-image: url('s1.jpg'); background-size: cover; background-position: center;">
    <div class="rolling-text">
    <h3><b>Only Speaker Registration</b></h3>
</div>
        <h3 style="font-size:25px; color:black;"><b>Speaker Registration & Profile Management</b></h3>
     
        <form action="speakerbadge.php" method="POST" enctype="multipart/form-data">
            <div class="speaker-management-form"  >
                <input type="text" name="speaker_name" placeholder="Speaker Name" required style="color: white;">
                <input type="email" name="email" placeholder="Email" required style="color: white;">
                <input type="tel" name="phone" placeholder="Phone Number" required style="color: white;">
                <textarea name="bio" placeholder="Bio" required style="color: white;"></textarea>
                <input type="text" name="social_links" placeholder="Social Links (comma-separated)" required style="color: white;">
                <input type="text" name="expertise" placeholder="Areas of Expertise" required style="color: white;">
                <label for="profile_image" style="margin-top: 10px; color:black; font-size:20px;"><b>Upload Profile Image:</b></label>
                <input type="file" name="profile_picture" accept="image/*" required>

                <!-- Session Management Section -->
                <label for="profile_image" style="margin-top: 10px; color:black; font-size:20px;"><b>Session Management</b></label>
                <input type="text" name="session_title" placeholder="Session Title" required style="color: white;">
                <input type="text" name="session_duration" placeholder="Duration (in minutes)" required style="color: white;">
                <input type="text" name="session_venue" placeholder="Venue" required style="color: white;">
                <input type="text" name="co_speakers" placeholder="Co-Speakers (comma-separated)" required style="color: white;">

                <div class="abstract-submission-container" id="abstract-submission">
    <h3 style="font-size: 20px; color:black;"><b>Abstract Submission</b></h3>
    <form action="upload_abstract.php" method="POST" enctype="multipart/form-data">
        <div class="abstract-submission-form">
            <input type="text" name="abstract_title" placeholder="Abstract Title" required style="color: white;">
            <textarea name="abstract_text" placeholder="Abstract Text" required style="color: white;"></textarea>
            <input type="text" name="keywords" placeholder="Keywords (comma-separated)" required style="color: white;">
            <input type="file" name="abstract_file" accept=".pdf,.doc,.docx" required>

          
        </div>
    </form>
</div>
                <button type="submit" >Register Speaker</button>
            </div>
        </form>

    </div>
</div>
<footer>
        <p>&copy; 2025 Your Website. All Rights Reserved.</p>
    </footer>
</body>
</html>
