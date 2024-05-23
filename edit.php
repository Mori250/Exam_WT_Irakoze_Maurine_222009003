<?php
  $db = new mysqli('localhost', 'root','','online_anger_management_counseling_platform');
if (isset($_POST['send'])) {

  $edit=$_GET['edit'];
   
               $username=$_POST['username'];
              $card_number=$_POST['card_number'];
           
               $pay=$_POST['pay'];
               $amount=$_POST['amount']; 
$update="UPDATE payments SET owner='$username', transactionID='$card_number',amount='$amount',payment_method='$pay' WHERE payment_id='$edit' ";
$checking=mysqli_query($db,$update);
if ($checking) {
  // code...
  header('location:payment update & delete.php');
}
else 
{
  echo "nn";
}
}
?>
<form action="" method="POST">
                     <div class="pay-table"> 
                     <div class="pay">   
                     <label for="expiry_date">Owner:</label><br>
        <input type="text" id="username" name="username" placeholder="fullnames"><br>
                  
       
        <label for="card_number"> Transaction ID Card:</label><br>
        <input type="text" id="card_number" name="card_number"><br>
        
     
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
                             

 </form>