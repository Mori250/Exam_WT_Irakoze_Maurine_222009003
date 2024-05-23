<?php
  $db = new mysqli('localhost', 'root','','online_anger_management_counseling_platform');

  $delete=$_GET['delete'];
  $del="DELETE FROM payments WHERE payment_id='$delete' ";
  $checks=mysqli_query($db,$del);
  if ($checks) {
    // code...
    header('location:payment update & delete.php');
  }

?>