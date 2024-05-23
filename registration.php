
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <div class="container">
        <h1>sign up</h1>
        <form action="" method="POST">
          <div class="input-field">
            <input type="text" name="firstname" />
            <span>First Name</span>
          </div>
            <div class="input-field">
            <input type="text" name="lastname" />
            <span>last name</span>
          </div>
            <div class="input-field">
            <input type="date" name="date_of_birth" />
            <span>birth day</span>
          </div>
        
          <div class="input-field">
            <input type="email" name="email" />
            <span>Email</span>
          </div>
            
          <div class="input-field">
            <input type="password" name="password" />
            <span>Password</span>
          </div>

          <button type="submit" name="send">sign up</button>
            <div class="input-field">
            <i>already have an account<a href="login.php">click login</a> </i>
           </div><h3 style="text-transform: uppercase;
           color: red; text-align: center;">
           <?php
$db=new mysqli('localhost','root','','online_anger_management_counseling_platform');
if (isset($_POST['send'])) {
  // code...

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$birthday=$_POST['date_of_birth'];
$email=$_POST['email'];

$s=mysqli_query($db,"SELECT * FROM users WHERE email='$email' ");
if (mysqli_num_rows($s)>0) {
  echo "email already exist";
}
else
{


$password=$_POST['password'];
$insert="INSERT INTO users VALUES('','$firstname','$lastname','$birthday','$email','$password')";

$checking=mysqli_query($db,$insert);

if ($checking) {
  echo "Welcome !";
}

else
{
  echo "oya bro";
}
}
}
?></h3>

        </form>
      </div>
</body>

</html>
<style>
    
  body
  {
    background: grey;
  }

.container {
    width: 24%;
    padding: 40px;
    background-color: white;
    position: relative;
    left: 35%;
    top: 20%;
    border-radius: 10px;
    animation: ant 3s linear infinite;
    transition-delay: 0.5s;
  }
  
  @keyframes ant {
    0% {
      transform: rotate();
    }
  }

  .container .input-field {
    position: relative;
    width: 100%;
    margin-top: 10px;
  }
  .container .input-field input,
  .container .input-field textarea {
    width: 100%;
    padding: 6px 0;
    margin: 6px 0;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #333;
    border-radius: 8px;
    outline: none;
    resize: none;
    font-family: Bradley Hand ITC;
    font-weight: bolder;
  }
  .container .input-field span {
    position: absolute;
    left: 0;
    padding: 5px 0;
    margin: 10px 0;
    font-size: 16px;
    pointer-events: none;
    transition: 0.9s;
    color: black;
  }
  .container h1 {
    text-align: center;
    color: #2161b5;
    text-transform: uppercase;
  }
  .container button {
    width: 100%;
    background-color: #2161b5;
    padding: 15px;
    border: none;
    margin-top: 20px;
    cursor: pointer;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
  }
  .container .input-field input:focus ~ span,
  .container .input-field input:user-valid ~ span,
  .container .input-field textarea:focus-visible ~ span,
  .container .input-field textarea:user-valid ~ span {
    color: #2161b5;
    font-size: 15px;
    transform: translateY(-20px);
  }
  </style>