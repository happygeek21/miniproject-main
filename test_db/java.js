
function status_update(value,id)
{  
    //alert(id);  
    let url = "http://localhost/miniproject-main/test_db/index.php";  
    window.location.href= url+"?id="+id+"&status="+value;  
}  
 