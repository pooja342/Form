<?php
   include('common.php');
?>
<html>
 <head>
    <title>jquery plugin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 </head>
 <script>
$(document).ready(function() {
  $("#basic-form").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      age: {
        required: true,
        number: true,
        min: 18
      },
      email: {
        required: true,
        email: true
        return $("#email").val()
      },
      weight: {
        required: {
          depends: function(elem) {
            <?php
             $sql = 'SELECT email FROM register ';
             $data = mysql_query( $sql, $conn );
             while($row = mysqli_fetch_assoc($data)) {
                ?>
                 return $("#age").val() = <?php echo $row['email']; ?>
                <?php
            }
        ?>
            return $("#age").val() > 50
          }
        },
        number: true,
        min: 0
      }
    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters"
      },
      age: {
        required: "Please enter your age",
        number: "Please enter your age as a numerical value",
        min: "You must be at least 18 years old"
      },
      email: {
        email: "The email should be in the format: abc@domain.tld",
      },
      weight: {
        required: "People with age over 50 have to enter their weight",
        number: "Please enter your weight as a numerical value"
      }
    }
  });
});
 </script>
 <body>
 <form id="basic-form" action="" method="post">
    <p>
      <label for="name">Name <span>(required, at least 3 characters)</span></label>
      <input id="name" name="name">
    </p>
  <p>
      <label for="age">Your Age <span>(minimum 18)</span></label>
      <input id="age" name="age">
    </p>
    <p>
      <label for="email">E-Mail <span>(required)</span></label>
      <input id="email" name="email">
    </p>
  <p>
    <label for="weight">Weight <span>(required if age over 50)</span></label>
    <input id="weight" name="weight">
    </p>
    <p>
      <input class="submit" type="submit" value="SUBMIT">
    </p>
</form>
 </body>
</html