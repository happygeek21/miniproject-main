function validate()
{
    var firstname=document.getElementById("firstname");
    var lastname=document.getElementById("lastname");
    var mail=document.getElementById("mail");
    var phone=document.getElementById("phone");
    var passwd=document.getElementById("passwd");

    if(firstname.value.trim()=="")
    {
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
    else
    {
        return true;
    }

}