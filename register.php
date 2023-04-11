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
  
  if(isset($_POST['submit']))
  {
    $username=$_POST['name'];
    $email=$_POST['email'];
    $pword = md5($_POST['pword']);
    $query = "SELECT * FROM `register` WHERE email='$email'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1)
    {
      echo "email already resgistered!!  try again";
    }
    else
    {
      if(isset($_FILES['image']))
        { 
          $path=$_FILES['image']['tmp_name'];
          $name=$_FILES['image']['name'];

          if(move_uploaded_file($path, "upload-files/". $name))
          {
            $sql = "insert into register (name,email,password,image) VALUES ('$username','$email','$pword','$name')";
            if((mysqli_query($conn, $sql)))
            { 
              header("location:home.php");
            }
            else
            {
              echo "noo";
            }
          }    
        } 
    }
      
    
  }


  

?> 