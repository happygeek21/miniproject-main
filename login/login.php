<!DOCTYPE html>
<html lang="en">
<head>
<title>Website-Login</title>
<link rel="stylesheet" href="login.css">
<script src="validation.js"></script>
</head>
<body>
    
    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">
                </header>
                <form action="login-action.php" method="post">
                
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="email" name="email" id="mail"placeholder="E-Mail" >
                                    
                    </div>
                                
                                
                    <div class="fields">
                            
                        <label>Password</label>
                        <input type="password" name="passwd" placeholder="Password" >
                            
                    </div>
                    
                    <div class="links">
                        <a href="indexreg.php">Forgot Password?</a>
                    </div>
                    
                        
                    <div class="fields-button">
                        <input type="submit" value="Sign In" id="1"  onClick="return form_validate()">
                    </div>
                        

                    <div class="links">
                        <label>New To The Website?</label>
                        <a href="indexreg.php">Register Here</a>
                    </div>
                                
                        
                </form>
            </section>
    </div>
</body>
</html>