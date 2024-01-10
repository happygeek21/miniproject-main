function validate()
{
    var firstname=document.getElementById("firstname");
    var lastname=document.getElementById("lastname");
    var mail=document.getElementById("mail");
    var phone=document.getElementById("phone");
    var passwd=document.getElementById("passwd");
    var dob=document.getElementById("dob");
    var confirm_pass=document.getElementById("confirm_pass");

    if(firstname.value.trim()=="" && lastname.value.trim()=="" && mail.value.trim()=="" && phone.value.trim()=="" && passwd.value.trim()=="" && dob.value.trim()=="")
    {
        alert("The Form is Empty, Please Fill The Form!")
        return false;
    }
   
    else if (firstname.value.trim()==""){
        alert("firstname is empty!");
        return false;
    }
    
    else if(lastname.value.trim()=="")
    {
        alert("Lastname is empty!");
        return false;
    }

    else if(mail.value.trim()=="")
    {
        alert("Email Fields Are empty!");
        return false;
    }

    else if(phone.value.trim()=="")
    {
        alert("Phone number is empty!");
        return false;
    }

    else if(passwd.value.trim()=="")
    {
        alert("Password Field Empty!");
        return false;
    }

    else if(passwd.value.length<9)
    {
        alert("Weak Password! Enter a password with more than 9 Characters!");
        return false;
    }

    
    else if(dob.value.trim()="")
    {
        alert("Enter DOB to Continue!");
        return false;
    }
    else
    {
        return true;
    }

}