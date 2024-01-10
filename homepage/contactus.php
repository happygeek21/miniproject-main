<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="logo.png" type="image/x-icon">
<title>Website-Register</title>
<script src="http://localhost/miniproject-main/homepage/validate-contact.js"></script>
<link rel="stylesheet" href="contactus.css" type="text/css">

</head>
<body>
    

        <div class="wrapper">
            
            
    
            <section class="form-sign">
                    
            
                <header>
                
                <img src="200login.gif" alt="" srcset="">   
                </header>
                
                <form onsubmit="return validate()" action="https://formspree.io/f/moqgvqad" method="post">
                   
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
                        <label>Subject</label>
                        <textarea id="story" name="story" rows="5" cols="33"></textarea>

                                    
                    </div>  
                    
        
                                
                    <div class="fields-button">
                        <input type="submit" value="Send Message" id="1" >
                    </div>
                                
    
                    
                               
                
                </form> 
            </section>
        </div>
</body>
</html>