<html>
    <head>
        <title>demoo</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" ></script>
    </head>
    <body>
        <form id="myForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <input type="text" id="name" name="name">
            <br>
            <input type="submit" value="Submit">
        </form>
        <script>
            jQuery(document).ready(function($) {
                // Validate the email field using jQuery Validation Plugin
                $("#myForm").validate({
                    rules: {
                    email: {
                    required: true,
                    email: true,
                    remote: {
                    url: "checkemail.php", // URL to check if email already exists in database
                    type: "post", // HTTP method to use for the AJAX request
                    data: { // Additional data to send along with the request
                    email: function() {
                    return $("#email").val();
                    }
                    }
                    }
                    }
                    },
                    messages: {
                    email: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address",
                    remote: "This email address is already taken"
                    }
                    }
                });
            });
        </script>
    </body>
</html>