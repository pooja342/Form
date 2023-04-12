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
                url: "./checkemail.php",
                type: "post",
                data: {
                  email:function(){
                  return $("#email").val();
                  }
                  }
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
            remote: "Email already used!"
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