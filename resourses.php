<?php

$conn = new mysqli('localhost','root' , '', 'online_anger_management_counseling_platform');

    $resource_type = $_POST["resource_type"];
 
    $description= $_POST["description"];
    $resource_date= $_POST["resource_date"];



    $sql = "INSERT INTO resources VALUES('','$resource_type','$description' ,'$resource_date') ";
  $checks=mysqli_query($conn,$sql);
    if ($checks) {
        echo "resources info submitted successfully.";
    } else {
        echo "Error: " ;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resources Page</h1>
    </header>
  <li><a href="index.php">Home</a></li>
    <main>
        <section class=""submit_resource">
            <h2>Submit a Resource</h2>
            <form action="" method="post">
                <label for="resource_type">Resource Type:</label>
                <input type="text" id="resource_type" name="resource_type" required><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea><br>

        

                <label for="resource_date">Resource Date:</label>
                <input type="date" id="resource_date" name="resource_date" required><br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Resources Page. All rights reserved.</p>
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
}

.resource-form {
    width: 100%;
    max-width: 600px;
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-top: 0;
    color: #333;
    font-size: 1.8rem;
    border-bottom: 2px solid #ccc;
    padding-bottom: 0.5rem;
    margin-bottom: 1rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input[type="text"],
input[type="url"],
textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

input[type="submit"] {
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
 input[type="submit"]:hover {
    background-color: #555;
}


</style>