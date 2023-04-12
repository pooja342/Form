<?php
 include("common.php");
 if(isset($_POST['email']))
 {
  $email = $_POST['email'];
  $sql = "SELECT email FROM register where email = '$email'";
  $result=$conn->query($sql);
    if($result->num_row > 0)
    {
     return false;
    }
    else
    {
      return true;
    }
 }
?>
