function validation()
{
    var passwd=document.getElementById("pass");
    var cpasswd=document.getElementById("cpass");

    if(passwd.value.trim()=="" && cpasswd.value.trim()=="")
    {
        alert("Password Field Empty!");
        return false;
    }
    
    else if(passwd.value.length<9 )
    {
        alert("Weak Password! Enter a password with more than 9 Characters!");
        return false;
    }
    
    else if((passwd.value)!=(cpasswd.value))
    {
        alert("Password Doesnt Match!")
        return false;
    }
   
    else
    {
        return true;
    }

}