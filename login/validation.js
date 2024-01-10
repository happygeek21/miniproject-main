function form_validate(){
    
    var password = document.getElementById("passwd");
    var emailid = document.getElementById("mail");
    
    
    if (!emailid.value.trim().endsWith("@gmail.com") && (password.value.trim()==""))
    {
        alert("Form is Empty, Please Fill the Form To Continue!");
        return false;
    }
    
    else if(!emailid.value.trim().endsWith("@gmail.com"))
    {
        alert("Please Enter a Valid E-Mail Address");
        return false;


    }

    else if(password.value.trim()=="") {
        alert("Password Fields Empty!");
        return false; 

    }
    
    else{
        return true;
    }
}