<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Login</title>
<link rel="stylesheet" href="change_form.css">
<script src="http://localhost/miniproject-main/forgotpassword/password.js"></script>
</head>
<body>

    <div class="" id="preloader">


    </div>
    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">
                </header>
                <form onsubmit="return validation()" action="change.php" method="post">
                
                    
                                
                                
                    <div class="fields">
                            
                        <label>Password</label>
                        <input type="password" name="passwd" id="pass" placeholder="Password" >
                            
                    </div>
                    
                    <div class="fields">
                            
                            <label>Confirm Password</label>
                            <input type="password" name="cpasswd" id="cpass" placeholder="Confirm Password" >
                                
                        </div>
                    
                        
                    <div class="fields-button">
                        <input type="submit" value="Change Password" >
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