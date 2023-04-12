<html>
    <head>
        <title> form register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script src = "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" ></script>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">Register Page</h1>
                <form action="method.php" id="validationform" method="post" enctype="multipart/form-data" >
                    <div class="row g-3">
                    <div class="col-md-6">
                        <label for="your-name" class="form-label">Your Name</label>
                        <input type="text"  class="form-control" id="your-name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-surname" class="form-label">password</label>
                        <input type="text"  class="form-control" id="your-surname" name="pword" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email"  class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-subject" class="form-label">Upload Picture</label>
                        <input type="file"  class="form-control" id="your-subject" name="image">
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <div class="col-md-4">
                            <button data-res="<?php echo $sum; ?>" type="submit" id ="submit" name="submit" class="btn btn-dark w-100 fw-bold" >Send</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
                <script>
                 jQuery(document).ready(function($){
                    $("#validationform").validate({
                      rules:{
                            name:{
                              required :true,
                            },
                            email:{
                              required :true,
                              email: true,
                              remote: {
                                url: "./emailcheck.php",
                                type: "post",
                                },
                              },
                            pword:{
                              required :true,
                              minlength: 10,
                            },
                            image:{
                              required :true,
                            },
                        },
                      messages: {
                          name:{
                            required:"enter the name",
                          },
                          email:{
                            required: "Please enter your email address.",
                            email: "Please enter a valid email address.",
                            remote: "Email already registered!"
                          },
                          pword:{
                            required:"enter the pword",
                            minlength: "10 lenght are valid!"
                          },
                          image:{
                            required:" images requied!",
                          },
                        },
                        submitHandler: function(form) {
                        form.submit();
                     }
                    });
                  });
                </script>
            </div>
          </div>
        </div>
    </body>
</html>