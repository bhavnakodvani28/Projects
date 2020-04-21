function validatePhone() {
    var a = document.getElementById('phone').value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
 document.getElementById('phone').style.border="";
    }
    else {
        document.getElementById('phone').style.border="2px solid red";
        
    }
}

function validateZip() {
    var a = document.getElementById('zip').value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
 document.getElementById('zip').style.border="";
    }
    else {
        document.getElementById('zip').style.border="2px solid red";
        
    }
}
function compPassword(){

 var password = document.getElementById('password').value; 
 var repassword = document.getElementById('repassword').value;
 if(password!= repassword){

    document.getElementById('repassword').style.border="2px solid red";

 }
 else
 {
document.getElementById('repassword').style.border="";

 }
}