<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='Form';
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if (!$conn) {
 
     echo "Connection failed!"; 
   }
?>