<?php
 include("common.php");

 if(isset($_POST['email']))
 {
  $email = [$_POST['email']];
  $sql = "SELECT email FROM register where email = '$email'";
  $result=$conn->query($sql);
  $data=$result->num_rows;
  if(mysqli_num_rows($result) > 0)
  {
    echo "true";
  }
  else
  {
    echo "false";
  }
 }
 
?>