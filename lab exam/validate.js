function validate()
{

 
    $rollno = document.getElementById("roln");
    $name = document.getElementById("namee");

    if($rollno.value.trim() == "" || $name.value.trim() == "")
    {
        alert("Please Fill the form!");
        return false;
    }

    else{
        return true;
    }
}  