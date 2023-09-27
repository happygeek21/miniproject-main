<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JS | Quiz</title>
<script>
counter = 1;
var name = ""; var phone = ""; var email = ""; var address = "";

function getQuizdata()
{
var txtdata = document.getElementById('datatext').value;

if(txtdata == "")
{
alert("Enter the details!");
document.getElementById('datatext').focus();
}
else
{
if(counter == 1)
{
name = txtdata;
document.getElementById('datatext').value = "";
document.getElementById('lables').innerHTML = "Enter your phone number:";
document.getElementById('datatext').focus();
}
else if(counter == 2)
{
phone = txtdata;
document.getElementById('datatext').value = "";
document.getElementById('lables').innerHTML = "Enter your email:";
document.getElementById('datatext').focus();
}
else if(counter == 3)
{
email = txtdata;
document.getElementById('datatext').value = "";
document.getElementById('lables').innerHTML = "Enter your address:";
document.getElementById('datatext').focus();
}
else
{
address = txtdata;
document.getElementById('details').innerHTML = "<h3>Entered Details</h3><br>Your Name: "+name+"<br> Your Phone: "+phone+"<br> Your Email: "+email+"<br> Your Address: "+address;
}
counter++;
}
}
</script>
</head>

<body>
<h2>Quiz</h2>
<div id="details">
        <form>
        <h3 id="lables">Enter your name:</h3>
        <input type="text" name="datatext" id="datatext" required>
        <br><br>
        <input type="button" value="Next" onClick="getQuizdata()">
        </form>
    </div>
</body>
</html>