<html>
    <head>
        <title> form register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
    </head>
    <body>
     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">LOGIN PAGE</h1>
                <form action="loginoperation.php" method="get"  >
                    <div class="row g-3">
                    <div class="col-md-6">
                        <label for="your-email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="your-email" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="your-surname" class="form-label">password</label>
                        <input type="text" class="form-control" id="your-surname" name="pword" required>
                    </div>
                    <div class="col-12">
                        <div class="row">
                        <div class="col-md-4">
                            <button data-res="<?php echo $sum; ?>" type="submit" name="submit" class="btn btn-dark w-100 fw-bold" >Send</button>
                        </div>
                        </div>
                    </div>
                    <a href="http://localhost/PhpAssignment/first/">create  new account</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>