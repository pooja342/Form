<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='Form';
  
  $target_dir = "uploads/";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if (!$conn) {
 
     echo "Connection failed!"; 
   }
   if(isset($_GET['submit']))
   {
      $email = $_GET['email'];
    //   $pword = password_hash($_GET['pword'], PASSWORD_DEFAULT);
    //   $pword=$_GET['pword'];
      $pword =md5($_GET['pword']);

      $query = "SELECT * FROM `register` WHERE email='$email' AND password='$pword'";
      $result = mysqli_query($conn, $query) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      if($rows==1)
      { 
        session_start();
        if( empty( $_SESSION['counter'] ) ) 
        {
           $_SESSION['email'] = $email;
           header("location:home.php");
        }
        else 
        {
          session_destroy();
           $_SESSION['email'] = $email;
           header("location:home.php");
        }
      }
      else
      {
        echo "something wrong";
      }
                     
   }
  
?>