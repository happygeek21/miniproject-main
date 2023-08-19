
function form_validate()
{
//var first_name = document.getElementById("fname").value;
//var last_name = document.getElementById("lname").value;
var email = document.getElementById("mail").value;
//var phone = document.getElementById("ph").value;

var email_reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

/*if(first_name == "")
{
alert("Enter First Name");
return false;
}
if(last_name == "")
{
alert("Enter Last Name");
return false;
}*/

/*if(phone=="" || isNaN(phone))
{
alert("phone number cannot be empty and has to be in number");
return false;
}*/
//if(phone.length!=10)
//{
//alert("phone number must be 10 digits");
//return false;
//}

if(email == "" && !email.match(email_reg))
{
alert("Enter Email....field cannot be empty");
return false;
}
}
