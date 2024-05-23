<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="log.css">
   
    <title>login</title>

    <style type="text/css">
      .baking
      {
        width: 90%;
        display: flex;

      }
      .picture
      {
        width: 45%;
      }


    </style>
  </head>
  <body>
    <div class="container">
     
      <div class="sign-up">
        
         
        <form method="POST">
          
          
           <div class="header">
            <h2 id="headfield">sign in</h2>
          </div>
          <div class="input">
            <input type="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="input">
            <input type="password" name="password" placeholder="Enter your password" />
          </div><br>
         <i>create account</i>&nbsp;<a href="registration.php">click me</a>
         <br><br><br>
          <div class="btn">
          <button type="submit" name="send" id="signbtn">login</button>
          </div><h5 style="font-size: 16px;
  text-transform: uppercase;
  color: #0262d6;">
          <?php
$db = new mysqli('localhost', 'root', '', 'online_anger_management_counseling_platform');
if (isset($_POST['send'])) {


$email = $_POST["email"];
$password=$_POST['password'];
$sel = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
$check =$db->query($sel);


    $row = mysqli_num_rows($check);
    if ($row==0) {
    echo "Invalid email or password";
    
  
} else {
  session_start();
  $_SESSION['email']=$email;
    header("location:index.php");
}
}
?></h5>
        </form>
      </div>
    </div></div>
    <script>
      let signupbtn = document.getElementById("signupbtn");
      let signinbtn = document.getElementById("signinbtn");
      let replace = document.getElementById("replace");
      let headfield = document.getElementById("headfield");
      let signbtn = document.getElementById("signbtn");

      signinbtn.onclick = function () {
        replace.style.maxHeight = "0";
        headfield.innerHTML = "sign in";
        signupbtn.classList.add("signbtn");
        signinbtn.classList.remove("signbtn");
      };
      signupbtn.onclick = function () {
        replace.style.maxHeight = "75px";
        headfield.innerHTML = "sign up";
        signinbtn.classList.add("signbtn");
        signupbtn.classList.remove("signbtn");
      };
    </script>
  </body>
</html>

