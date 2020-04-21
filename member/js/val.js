$("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});


  
         $(function() {
           $("form[name='login']").validate({
             rules: {
               
               emailid: {
                 required: true,
                 emailid: true
               },
               passwd: {
                 required: true,
                 
               }
             },
              messages: {
               emailid: "Please enter a valid email address",
              
               passwd: {
                 required: "Please enter password",
                
               }
               
             },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
         


$(function() {
  
  $("form[name='reg']").validate({
    rules: {
      name: "required",
      lname: "required",
      emailid: {
        required: true,
        emailid: true
      },
      passwd: {
        required: true,
        minlength: 5
      }
    },
    
    messages: {
      name: "Please enter your firstname",
      lname: "Please enter your lastname",
      passwd: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      emailid: "Please enter a valid email address"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});
