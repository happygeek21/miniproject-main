var email=Document.getElementByid('email');
var model=Document.getElementByid('model');
var complaint=Document.getElementByid('complaint');
var desc=Document.getElementByid('desc');

if(model.value.trim()=="")
{
    alert("Model Number is Empty, Kindly Enter Model Number!");
    return false;
}


else if(complaint.value.trim()=="")
{
    alert("Model Number is Empty, Kindly Enter Model Number!");
    return false;
}

else if(desc.value.trim()=="")
{
    alert("Model Number is Empty, Kindly Enter Model Number!");
    return false;
}


else if(!email.value.trim().endsWith("@gmail.com"))
{
    alert("Invalid Email");
    return false;
}

else{
    return true;
}