
<html>
    <head>
        <title>WELCOME PAGE</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
         <?php
            include('common.php');
            session_start();
            $email=$_SESSION['email'];
            $query = "SELECT * FROM `register` where email ='$email'";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <img src="./upload-files/<?php echo $row['image']; ?>">
                    <h1>WELCOME <?php echo $row['name']; ?></h1>
                    <h1>MyEmail <?php echo $row['email']; ?></h1>
                    <?php
                }
            } 
        ?>
         <h2><a href="logout.php" name ="logout">Logout</a></h2>
    </body>
</html>

