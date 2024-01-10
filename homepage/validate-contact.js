function validate()
{
    var firstname=document.getElementById("firstname");
    var lastname=document.getElementById("lastname");
    var mail=document.getElementById("mail");
    

    if(firstname.value.trim()=="" && lastname.value.trim()=="" && mail.value.trim()=="")
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

    else
    {
        return true;
    }

}