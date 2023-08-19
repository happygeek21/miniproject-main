<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>

    <form action="input-action.php" method="post">
        <div class="nav_links">
            <div class="logo">
                <a href="home.php"><img src="logo2.png"  alt="#"></a>
                
            </div>
            
            <ul>
                <li><a href="#">How Does This Work?</a></li>
                <li><a href="#">Any Queries Contact Us</a></li>
                
            
            </ul>

        </div>

        <div class="support">
            <p>Mention Your Queries Here</p>
        </div>
        
        <div class="flex-container">
            
            <div class="input1">
                
            
                <label for="">Select Your Phone Brand</label>
                <select name="phones" id="phones">
                        <option value="SAMSUNG">Samsung</option>
                        <option value="APPLE">Apple</option>
                        <option value="XIAOMI">Xiaomi</option>
                        <option value="ONEPLUS">Oneplus</option>
                    </select>
            </div>       
            <div class="input3">
                <label for="">Date</label>
                <input type="date" name="date" id="">
            </div>
                  
            
               
            <div class="input2">
            <label for="">Mention Your Phone Complaint</label>
                <select name="complaint" id="complaint">
                    <option value="SAMSUNG">Display Complaint</option>
                    <option value="APPLE">Dead Device</option>
                    <option value="XIAOMI">Speaker Dead</option>
                    <option value="ONEPLUS">Microphone Dead</option>
                    
                </select>
            
                
            </div>    
            <div class="input4">
                <textarea name="details" id="" cols="40" rows="6" placeholder="Description"></textarea>
            </div>
                
            <div class="button">
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </div>    

                
            
        </div>
    </form> 
        

    
    

    

   
</body>
</html>