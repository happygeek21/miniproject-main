<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Register</title>
<script src="http://localhost/miniproject-main/registration/validate-re.js"></script>
<link rel="stylesheet" href="register.css" type="text/css">

</head>
<body>
    

        <div class="wrapper">
            
            
    
            <section class="form-sign">
                    
            
                <header>
                
                <img src="200login.gif" alt="" srcset="">   
                </header>
                
                <form onsubmit="return validate()" action="action-register.php" method="post">
                   
                    <div class="name-details">
                        <div class="fields">
                            <label>First Name</label>
                            <input type="text" name="firstname" id=firstname placeholder="First Name">
                            <span class="text-danger"><?php if(!empty($name_error)){echo $name_error;}?></span>
                                    
                        </div>
                        <div class="fields">
                                    
                            <label>Last Name</label>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" >
                                   
                        </div>
                    </div>         
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="email" name="mail" id="mail"  placeholder="E-Mail" >
                                    
                    </div>
                                
                             
                    <div class="fields">
                        <label>Phone Number</label>
                        <input type="phone" name="phone" id="phone"  placeholder="Phone Number" >
                                    
                    </div>

                    <div class="fields">
                                    
                        <label>Password</label>
                        <input type="password"  name="passwd" id="passwd" placeholder="Password" >
                                    
                    </div>
        
                                
                    <div class="fields-button">
                        <input type="submit" value="Sign Up" id="1" >
                    </div>
                                
    
                    <div class="link">
                        <label>Already a User?</label>
                        <a href="http://localhost/miniproject-main/login/login.php">Login</a>
                    </div>
                               
                
                </form> 
            </section>
        </div>
</body>
</html>