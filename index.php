<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
 

    <title>index</title>
</head>
<body>
    <div class="body-back">
<section id="home">
         <ul class="menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#appointment">Appointment</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="header.php">Header</a></li>
            <li><a href="logout.php">log out</a></li>
        </ul>
  
      <div class="started">

        <p> Welcome Mr/Ms
         <i style="color: blue; font-size: 40px; text-transform: uppercase;">
        <?php 
        $con = new mysqli('localhost', 'root', '', 'online_anger_management_counseling_platform');

        $sel = mysqli_query ($con,"SELECT firstname FROM users WHERE email='$_SESSION[email]'");
        $row=mysqli_fetch_assoc($sel);
        echo $row['firstname']; ?></i>
         to <span>online anger management counseling</span> website
        Coping mechanisms are strategies that help people deal with stress and uncomfortable emotions</p></div>
         <br>
       
      
        <button class="btn">get started</button> 

        
       </section>
</div>
<section id="about">
    
 <section class="about-us">

        <h1>About Us</h1>
        <div class="first-pic">
             <div class="im1">
            <img src="index.jpg">
        </div>
        <div class="st-p">
        <p>Welcome to our <span>Online Anger Management Counseling</span> About the Author: I’m Cassie Jewell, mental health professional and creator of this site, Mind Remake Project. I am a licensed professional counselor (LPC), licensed substance abuse treatment practitioner (LSATP), and board-approved clinical supervisor in Virginia. I have a master’s degree in Community Counseling and am currently working in the field. When I’m not writing or counseling, I’m traveling the world.</p></div>
       
</div>  
        <div class="second-pic">
            <div class="im2">
            <img src="manager.jpg">
        </div>
        <div class="nd-p">
        <p>Our team of certified professionals provides personalized counseling services tailored to meet the unique needs of each client. With years of experience in the field, we utilize evidence-based techniques to support you on your journey to emotional well-being.</p></div>
        </div>
        <div class="third-pic">
            <div class="im3">
            <img src="index.jpg">
        </div>
        <div class="rd-p">
        <p>Our mission is to create a safe and supportive environment where you can explore your feelings and develop the skills needed to handle life's challenges with confidence and resilience.</p></div>
        
    </div>
      
    </section>
<section id="services">
    
  <section class="services">
        <h1>Our Services</h1>
        <div class="service">
            <h2>Individual Counseling</h2>
            <p>Personalized one-on-one counseling sessions to help you manage anger and develop coping strategies tailored to your unique needs.</p>
        </div>
        <div class="service">
            <h2>Group Therapy</h2>
            <p>Join a supportive group environment to share experiences and learn from others who are also working to manage their anger.</p>
        </div>
        <div class="service">
            <h2>Workshops and Seminars</h2>
            <p>Attend our specialized workshops and seminars to gain in-depth knowledge and practical skills for managing anger and stress.</p>
        </div>
        <div class="service">
            <h2>Online Resources</h2>
            <p>Access a variety of online resources including articles, videos, and self-help tools to support your anger management journey.</p>
        </div>
    </section>

</section>
</section>

<section id="contact">
<style>
header {
    background-color: #333;
    color: white;
    padding: 1rem 0;
    text-align: center;
    text-transform: uppercase;
}
header::after{
    content: "";
    position: relative;
    border-bottom: 2px solid white;

}

header h1 {
    margin: 0;
}

main {
    padding: 2rem;
    display: flex;
    justify-content: center;
}

section#contact-form {
    width: 100%;
    max-width: 600px;
    background-color: #f4f4f4;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section#contact-form h2 {
    margin-top: 0;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: none;
}

button {
    display: inline-block;
    background-color: green;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

button:hover {
    background-color: #388e3c;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

</style>
<div class="contain-contact">


<header>
        <h1>Contact Us</h1>
    </header>

    <main>
        <section id="contact-form">
            <h2>Get in Touch</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>


</div>

    
</section>
<section id="appointment">
 <div class="body-back">
        <div class="t" style="padding-left: 30%; padding-top: 10%; text-align: center; ">
          <table border="1" cellspacing="0" style="width: 50%; font-size: 25px; text-transform: capitalize; background-color: #ffffff8c; left: 30%; top: 30%; border-radius: 8px;   border-left: 20px solid #4CAF50;">
            <tr>
                <td colspan="8" style="text-transform: uppercase; padding: 20px;">table of appointments</td>
            </tr>
            <tr>
                <td>id</td>
                <td>patient</td>
                <td>counseling issues</td>
                <td>appointment date    </td>
                <td>appointment status</td>
               
                
            </tr>
            <tr>
              <?php  
              $db = new mysqli('localhost', 'root','','online_anger_management_counseling_platform');
   
 $se="SELECT * FROM appointments";
            $checks=mysqli_query($db,$se);

              ?>
            <?php while ($row=mysqli_fetch_assoc($checks)) { ?>

                <td><?php echo $row['appointment_id']; ?></td>
                <td><?php echo $row['patients']; ?></td>
                <td><?php echo $row['counseling issues']; ?></td>
                <td><?php echo $row['appointment_date']; ?></td>
                <td><?php echo $row['appointment_status']; ?></td>
              
                
            </tr>
        <?php } ?>

        </table></div>

    </div>
</section>
</body></html>
