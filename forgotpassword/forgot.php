<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Login</title>
<link rel="stylesheet" href="forgot.css">
<script src="http://localhost/miniproject-main/forgotpassword/validation_forgot.js"></script>
</head>
<body>



    </div>
    <div class="wrapper">
            <section class="form-sign">
                <header>
                    <img src="logo.png" alt="" srcset="" style="width:55px;height:55px;">
                   
                </header>
                <form onsubmit="return forgot_validate()" action="forgot-action.php" method="post">
                
                    <div class="fields">
                        <label>E-Mail</label>
                        <input type="email" name="mail" id="mail" placeholder="Enter Registered E-Mail" >
                                    
                    </div>
                    <div class="fields">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" id="dob" placeholder="Enter your DOB" >
                                    
                    </div>

                    <div class="fields">
                        <label>Phone</label>
                        <input type="number" name="phone" id="phone" placeholder="Enter Registered Phone No.">
                                    
                    </div>
                                
                    <div class="fields-button">
                        <input type="submit" value="Send Reset Link" id=1 >
                    </div>
                                
                        
                </form>
            </section>
    </div>
  


</body>
</html>