<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>payment</title>
</head>
<style type="text/css">






 ul {
    position: fixed;
    z-index: 100;
   padding-left: 100px;
   }
  ul li {
    margin: 20px;
    position: relative;
    list-style: none;
    width: 200px;
    background: grey;
    padding: 10px;
    z-index: var(--i);
  text-align: center;
  display: inline-block;
  }
  ul li a {
    text-decoration: none;
    
    text-transform: uppercase;
    color: white;
  }
  ul li:hover a {
    color: white;
  }
  

  
  ul li:hover {
    background: #2161b5;
    transform: translateX(50px);
    margin: 10px;
    transition: 0.5s;
  }

  ul li::after {
    box-shadow: -100px 120px 20px rgba(15, 14, 13, 0.223);
  }








  img
    {
        width: 300px;
        height: 300px;
        box-shadow: 5px 20px 20px black;
        border-radius: 5px;
        overflow: hidden;
       
    }
    img:hover {
    transform: scale(1.07);
     transition: transform 1s ease;
}
    .cards
    {
        display: flex;
        text-align: center;
        padding: 20px;
        justify-content: space-between;
    }
    table
    {
        width: 40%;
       
    }
  .pay-table
  {
    width: 100%;
    display: flex;
    justify-content: space-between;

  }
  .t{
    width: 60%;
    padding-right: -40px;
    font-size: 20px;
    text-align: center;
   box-shadow: 5px 10px 20px 20px lightgrey;
  }

 input, select
 {
    width: 100%;
    padding: 20px;
 }
 select
 {
    width: 114%;
 }
 .btn{
    border: 1px solid #3498db;
    background: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family:  'montserrat';
    cursor: pointer;
    color: #3498db;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    transition: 1.5s;

}
.btn:hover{
    background-color: #3498db;
    color: #fff;
    transition: 1.5s;
}


h1, h2 {
    color: #2c3e50;
    text-transform: uppercase;
    font-weight: 700;
    margin: 0 0 10px;
}

h1 {
    font-size: 2.5em;
    text-align: center;
    margin-top: 20px;
}

h2 {
    font-size: 1.8em;
}

/* Container for the Payment Section */
.payment-container {
    width: 80%;
   
   
    background-color: #ffffff;
    margin: 40px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    border-left: 5px solid #4CAF50;
    
}

.payment-method {
    margin-top: 30px;
}

.payment-method h2 {
    margin-bottom: 15px;
    border-bottom: 2px solid #4CAF50;
    display: inline-block;
    padding-bottom: 5px;
}

.payment-method p {
    font-size: 1.6rem;
    line-height: 1.8;
    color: #555;
}

/* Paragraph Styling */
p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
}

/* Responsive Design */
@media (max-width: 600px) {
    .payment-container {
        padding: 20px;
        width: 95%;
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
    }



</style>
<body>

      
    <ul>
      <li style="--i: 4SSS"><a href="index.php">home</a></li>
      <li style="--i: 3"><a href="payment.php">payment</a></li>
       <li style="--i: 2"><a href="support_group.php">support group</a></li>
       <li style="--i: 1"><a href="log out.php">log out</a></li>
    </ul>
</div>

    <br><br><br><br><br><br>
<div class="payment">
    <div class="payment-method">
        <h1>Payment</h1>
        <p>We offer a variety of payment options to make it easy for you to access our services. Please choose the method that works best for you.</p>
     
            <div class="payment-method">
                <h2>Credit/Debit Card</h2>
                <p>We accept all major credit and debit cards. You can make a secure payment online through our payment portal.</p>
            </div>
<div class="payment-container">
            <div class="cards">
              <div class="STARTER">
             <h3 class="text-uppercase">STARTER</h3>
             <img src="R.jpeg">
            <div class="pricing_price">
                <h4 class="text-white">$19</h4>
                <p class="text-white">per month</p>
                </div></div>

     
                  
              <div class="STARTER">
             <h3 class="text-uppercase">PREMIUM</h3>
             <img src="Mastercard-Symbol.jpg">
            <div class="pricing_price">
                <h4 class="text-white">$39</h4>
                <p class="text-white">per month</p>
                                </div></div>                          
                                   

                            
              <div class="STARTER">
             <h3 class="text-uppercase">ADVICES</h3>
             <img src="zero-balance-credit-card.jpg">
            <div class="pricing_price">
                <h4 class="text-white">$59</h4>
                <p class="text-white">per month</p>
                                </div></div></div></div></div>
                        </div>
                     <form action="" method="POST">
                     <div class="pay-table"> 
                     <div class="pay">   
                     <label for="expiry_date">Owner:</label><br>
        <input type="text" id="username" name="username" placeholder="fullnames"><br>
                  
       
        <label for="card_number"> Transaction ID Card:</label><br>
        <input type="text" id="card_number" name="card_number"><br>
        
         
        <label for="expiry_date">Date:</label><br>
        <input type="datetime-local" id="date" name="date" placeholder="MM/YYYY"><br>
        
        <label for="cvv">CVV:</label><br>
        <input type="text" id="cvv" name="cvv"><br>
        <label for="method">payment method</label>
        <select name="pay">
            <option disabled selected>select payment method</option>
            <option> BANK TRANSFER</option>
          
            <option>CREDIT CARD</option>
            <option>DEBT CARD</option>
            <option>MOMO</option>
            <option>DIGITAL WALLET</option>
            <option>CRYPTOCURRUNCIES</option>
           
        </select><br>
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount" ><br>
        
        <button type="submit" name="send" class="btn">Submit Payment</button>
    </form></div> 
                             
        
              <?php  
              $db = new mysqli('localhost', 'root','','online_anger_management_counseling_platform');
              if (isset($_POST['send'])) {
               
              
               $username=$_POST['username'];
              $card_number=$_POST['card_number'];
               $date=$_POST['date'];
               $pay=$_POST['pay'];
               $amount=$_POST['amount'];    
               $in="INSERT INTO payments VALUES('','$username','$card_number','$amount','$date','$pay','COMPLETED')";
               $ch=mysqli_query($db,$in);
          
              

               if ($ch) {
               echo '<script type="text/javascript">alert("This is a JavaScript alert!");</script>';
               }
}
         ?>
 </form>
</body>
</html>