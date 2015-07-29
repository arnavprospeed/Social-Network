function validateForm() {
    //Phone number validation
    var x = document.forms["signup"]["phone_no"].value;
    var test_phoneno = /^\d{10}$/;
    alert("hello");
    if(!x.match(test_phoneno))
       {

         return false;
       }

    //username validation
    var x = document.forms["signup"]["username"].value;
    var test_phoneno = /^\d{20}$/;
    if(!x.match(test_phoneno))
       {

          return false;
       }

    //password validation
    x = document.forms["signup"]["password"].value;
    var test_password = /^\d{10}$/;
    if(!x.match(test_password))
       {

         return false;
       }

    //Full name validation
    x = document.forms["signup"]["name"].value;
    var test_name = /^[A-Za-z]+$/;
    if(!x.match(test_name))
       {

         return false;
       }

    //email id validation
    x = document.forms["signup"]["email_id"].value;
    alert(x);
    var test_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(!x.match(test_email))
       {
           return false;
       }
    return true;
}
