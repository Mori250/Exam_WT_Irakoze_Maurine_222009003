<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>
<?php
$conn = new mysqli('localhost','root' , '', 'online_anger_management_counseling_platform');

    $reporter_name = $_POST["reporter_name"];
    $issue=$_POST['issue'];
    $reporter_email = $_POST["reporter_email"];
    $report_date= $_POST["report_date"];
    $report_subject= $_POST["report_subject"];



$sql = "INSERT INTO progress_reports VALUES('','$reporter_name','$issue', '$reporter_email','$report_date' ,'$report_subject') ";
  $checks=mysqli_query($conn,$sql);
    if ($checks) {
        echo "report submitted successfully.";
    } else {
        echo "Error: " ;
    } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>progress report</title>
</head>
<body>


<div class="section" id="progress_report">
    <h2>Progress Report</h2>
    <p>Check your progress here...</p>

    <h2>Advanced Counseling</h2>
    <p>Our advanced counseling techniques include cognitive behavioral therapy, mindfulness practices, and more to help you achieve optimal mental health.</p>

    <h2>Awesome Counseling Programs</h2>
    <p>Discover our awesome programs that are designed to support your personal growth, enhance your well-being, and empower you to achieve your life goals.</p>

    <!-- Additional content and images -->
    <h2>Personalized Approach</h2>
    <p>We understand that each individual is unique, and our counseling sessions are tailored to meet your specific needs and goals. Whether you're facing challenges in your personal life or seeking professional development, we're here to support you every step of the way.</p>
    <img src="personalized_approach.jpg" alt="Personalized Approach" width="300">

    <h2>Client Success Stories</h2>
    <p>Read inspiring stories from our clients who have transformed their lives with the help of our counseling services.</p>
    <img src="success_stories.jpg" alt="Client Success Stories" width="300">


  <h2>Report</h2>
    <p>Submit your report here...</p>

    <form action="" method="post">
        <label for="reporter_name">Reporter's Name:</label><br>
        <input type="text" id="reporter_name" name="reporter_name" required><br>

        <label for="issue">Issue:</label><br>
        <input type="text" id="issue" name="issue" required><br>

        <label for="reporter_email">Reporter's Email:</label><br>
<input type="email" id="reporter_email" name="reporter_email" required><br>

<label for="report_date">Report Date:</label><br>
<input type="date" id="report_date" name="report_date" required><br>

<label for="report_subject">Report Subject:</label><br>
<input type="text" id="report_subject" name="report_subject" required><br>




        <input type="submit" value="Submit">
    </form>
</body>
</html>

<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    background-color: #f4f4f4;
}

.section {
    padding: 2rem;
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.section h2 {
    color: #333;
    font-size: 1.8rem;
    border-bottom: 2px solid #ccc;
    padding-bottom: 0.5rem;
    margin-bottom: 1rem;
}

.section p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 1.5rem;
}

.section img {
    display: block;
    margin: 1rem 0;
    max-width: 100%;
    border-radius: 8px;
}

form {
    margin-top: 2rem;
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form input[type="date"],
form select,
form textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

form input[type="submit"] {
    display: inline-block;
    background-color: #333;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    margin-top: 1rem;
}

form input[type="submit"]:hover {
    background-color: #555;
}

</style>