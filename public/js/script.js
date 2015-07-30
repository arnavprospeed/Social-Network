function validateForm() {
    //Phone number validation
    var x = document.forms["signup"]["phone_no"].value;
    var test_phoneno = /^\d{10}$/;

    if(!x.match(test_phoneno))
       {
         alert("hello p");
         return false;
       }

    //username validation
    var x = document.forms["signup"]["username"].value;
    var test_username = "";
    if(!x.match(test_username))
       {
          alert("hello u");
          return false;
       }

    //password validation
    x = document.forms["signup"]["password"].value;
    var test_password = "";
    if(!x.match(test_password))
       {
         alert("hello p");
         return false;
       }

    //Full name validation
    x = document.forms["signup"]["name"].value;
    var test_name = /^[A-Za-z]+$/;
    if(!x.match(test_name))
       {
         alert("hello n");
         return false;
       }

    //email id validation
    x = document.forms["signup"]["email_id"].value;
    var test_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(!x.match(test_email))
       {
         alert("hello e");
           return false;
       }
       alert("yo");
    return true;
}
