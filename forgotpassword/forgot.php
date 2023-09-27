<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Login</title>
<link rel="stylesheet" href="forgot.css">
<script src="http://localhost/miniproject-main/forgotpassword/email-valid.js"></script>
</head>
<body>

    <div class="" id="preloader">


    </div>
    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">
                   
                </header>
                <form onsubmit="return form_validate()" action="forgot-action.php" method="post">
                
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="text" name="mail" id="mail" placeholder="Enter Registered E-Mail" >
                                    
                    </div>
                                
                    <div class="fields-button">
                        <input type="submit" value="Send Reset Link" id="1">
                    </div>
                                
                        
                </form>
            </section>
    </div>
    <script>
        var loader=document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display="none";})
    </script>


</body>
</html>