<?php

$conn = new mysqli('localhost','root' , '', 'online_anger_management_counseling_platform');

    $session_date= $_POST["session_date"];
    $duration_minutes = $_POST["duration_minutes"];
 



$sql = "INSERT INTO session VALUES('','$session_date','$duration_minutes') ";
  $checks=mysqli_query($conn,$sql);
    if ($checks) {
        echo "session info submitted successfully.";
    } else {
        echo "Error: " ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
      <li><a href="index.php">Home</a></li>
    <div class="session-page">
        <h2>Session Page</h2>
        <form action="" method="post">
      
            <label for="session_date">Session Date:</label>
            <input type="date" id="session_date" name="session_date" required>

            <label for="duration_minutes">Duration (Minutes):</label>
            <input type="number" id="duration_minutes" name="duration_minutes" required>

            <input type="submit" value="Submit">
        </form>
    </div>
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

.session-page {
    padding: 2rem;
    max-width: 400px;
    margin: 3rem auto;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.session-page h2 {
    color: #333;
    font-size: 1.8rem;
    border-bottom: 2px solid #ccc;
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
    text-align: center;
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input[type="text"],
form input[type="date"],
form input[type="number"] {
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
    width: 100%;
}

form input[type="submit"]:hover {
    background-color: #555;
}

</style>