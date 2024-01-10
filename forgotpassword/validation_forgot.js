function forgot_validate()
{
    

    var emailid = document.getElementById("mail");
    var dob=document.getElementById("dob");
    var phone=document.getElementById("phone");
    
    
    if(!emailid.value.trim().endsWith("@gmail.com") && dob.value.trim()=="" && phone.value.trim()=="")
    {
        alert("The Form is Empty, Please Fill The Form!");
        return false;
    }
    
    else if(!emailid.value.trim().endsWith("@gmail.com"))
    {
        alert("Please Enter a Valid E-Mail Address");
        return false;
    }

    else if(dob.value.trim()=="")
    {
        alert("Date of Birth is Empty!");
        return false;
    } 
    else if(phone.value.trim()=="")
    {
        alert("Phone Number is Empty!");
        return false;
    }
    
    else
    {
        return true;
    }
}