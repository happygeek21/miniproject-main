function form_validate(){
    
    
    var emailid = document.getElementById("mail");
    if(!emailid.value.trim().endsWith("@gmail.com"))
    {
        alert("Please Enter a Valid E-Mail Address");
        return false;
    }

    
    else{
        return true;
    }
}