<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>How to update pending status on button click using JavaScript with PHP and MySql.</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                background: #ccc;  
                display: flex;  
                justify-content: center;  
           }  
           .container{  
                width: 100%;  
                max-width: 900px;  
                margin: 10rem auto;  
           }  
           .container table{  
                width: 100%;  
                margin: auto;  
                border-collapse: collapse;  
                font-size: 2rem;  
           }  
           .container table th{  
                background: red;  
                color: #fff;  
           }  
           select{  
                width: 100%;  
                padding: 0.5rem 0;  
                font-size: 1rem;  
           }  
      </style>  
 </head>  
 <body>  
    
 
    <form action="action.php" method="post">
    <div class="container">  
        <table border="1">  
            <tr>  
                    <th>Sl. No.</th>  
                    <th>Username</th>  
                    <th>Date Time</th>  
                    <th>Status</th>  
                    <th>Action</th>  
            </tr>  
        </table>  
   
    </div>  
    </form>
 </body>  
 </html>  