   
<?php
  $db = new mysqli('localhost', 'root','','online_anger_management_counseling_platform');
   $se="SELECT * FROM payments";
            $checks=mysqli_query($db,$se);
?>

   <li><a href="index.php">Home</a></li>
              <div class="t">
          <table border="1" cellspacing="0">
            <tr>
                <td colspan="8">table of payment pills and other portions</td>
            </tr>
            <tr>
                <td>payment id</td>
                <td>owner</td>
                <td>transction id</td>
                <td>payment date</td>
                <td>payment method</td>
                <td>payment status</td>
                <td>amount paid</td>
                <td>edit payment</td>
                <td>delete payment</td>
                
            </tr>
            <tr>
            <?php while ($row=mysqli_fetch_assoc($checks)) { ?>

                <td><?php echo $row['payment_id']; ?></td>
                <td><?php echo $row['owner']; ?></td>
                <td><?php echo $row['transactionID']; ?></td>
                <td><?php echo $row['payment_date']; ?></td>
                <td><?php echo $row['payment_method']; ?></td>
                <td><?php echo $row['transaction_status']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><a href="edit.php?edit=<?php echo $row['payment_id']; ?>">EDIT</a> </td>
                <td><a href="delete.php?delete=<?php echo $row['payment_id']; ?>">DELETE</a> </td>
                
            </tr>
        <?php } ?>

        </table></div></div>
        <style type="text/css">
            
 ul li a{

    font-size: 40px;
    color: white;
 }

        </style>