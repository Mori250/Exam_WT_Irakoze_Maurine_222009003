<?php
    $conn = new mysqli('localhost','root' , '', 'online_anger_management_counseling_platform');

    $clientname = $_POST["clientname"];
    $email = $_POST["email"];
    $address= $_POST["address"];
    $password= $_POST["password"];



    $sql = "INSERT INTO clients VALUES('','$clientname','$address','$email' ,'$password') ";
  $checks=mysqli_query($conn,$sql);
    if ($checks) {
        echo "client info submitted successfully.";
    } else {
        echo "Error: " ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Client Page</h1>
    </header>
      <li><a href="index.php">Home</a></li>

    <main>
        <section class="client-form-section">
            <h2>Client Information</h2>
            <form action="" method="post">
                <label for="clientname">Client Name:</label>
                <input type="text" id="clientname" name="clientname" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Client Services. All rights reserved.</p>
    </footer>
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

header {
    background-color: #333;
    color: white;
    padding: 1rem;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2rem;
}

main {
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
}

.client-form-section {
    width: 100%;
    max-width: 400px;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.client-form-section h2 {
    margin-top: 0;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
    text-align: center;
}

form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
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
    width: 100%;
}

form input[type="submit"]:hover {
    background-color: #555;
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