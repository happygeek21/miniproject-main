<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Login</title>
<link rel="stylesheet" href="login.css">
<script src="http://localhost/miniproject-main/login/validation.js"></script>
</head>
<body>


    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="200login.gif" alt="" srcset="">
                </header>
                    
              
                
                
                <form onsubmit="return form_validate()" action="login-action.php" method="post">
                
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="email" name="email" id="mail" placeholder="E-Mail" >
                                    
                    </div>
                                
                                
                    <div class="fields">
                            
                        <label>Password</label>
                        <input type="password" name="passwd" id="passwd" placeholder="Password" >
                            
                    </div>
                    
                    <div class="links">
                        <a href="http://localhost/miniproject-main/forgotpassword/forgot.php">Forgot Password?</a>
                    </div>
                    
                        
                    <div class="fields-button">
                        <input type="submit" value="Sign In" id="1">
                    </div>
                        

                    <div class="links">
                        <label>New To The Website?</label>
                        <a href="http://localhost/miniproject-main/registration/indexreg.php">Register Here</a>
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