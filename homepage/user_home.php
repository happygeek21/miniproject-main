<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="swiper-bundle.min.css"/>
    <link rel="stylesheet" href="all.min.css"/>
    <link rel="stylesheet" href="highlighters.css"/>
    <script src="http://localhost/miniproject-main/homepage/faq.js"></script>
    
    
    
</head>
<body>

    <div class="" id="preloader"></div>

    <form action="" method="post">
        
    
        
    
        <div class="nav_links">
            <div class="logo">
                <a href="miniproject-main\registration\indexreg.php"><img src="gg.gif"  alt="#"></a>
                
            </div>
            <ul>
                <li><a href="http://localhost/miniproject-main/homepage/contactus.php">Contact Us</a></li>
                <li><a href="http://localhost/miniproject-main/homepage/aboutus.php">About Us</a></li>
                <li><a id="buttonn" href="http://localhost/miniproject-main/folder/order_display.php">Track Order</a></li>
                <li><a id="button" href="http://localhost/miniproject-main/login/logout.php">Log Out</a></li>
            
            </ul>
        </div>

        <div class="support">
            <p>Popular Brands We Support</p>
        </div>
       
        <div class="brands">
            <div class="images">
                <img class="img1" src="samsung.png" alt="">
                <img class="img2" src="apple.png" alt="">
                <img class="img3" src="mi.png" alt="">
                <img class="img4" src="oneplus.png" alt="">
                
            </div>
        </div>
        
    <div class="desc">
        <h2><?php  include('conn.php') ;echo("Welcome $user");?></h2>
        <a href="http://localhost/miniproject-main/input-details/input-details.php"><input type="button" name=button1 class="button-30" value="Register Complaint"></a>
    
    </div>     
    <div class="content">
            
        <h3>The Repair Process</h3>
        <p>We Make Sure That Every Customer is satisfied with our Service.</p>
        <p>We Provide Fast & Reliable Repair Charges.</p>
        <p>Customers Responses Are Our First Priority.</p>
        

  
   
        
        
       
    </div>
    <div class="content">
            
            <h3>Quality Assurance</h3>
            <ul>
                <li>Assure customers of the high-quality parts and skilled technicians you use for repairs. Highlight any certifications or guarantees that set your services apart.</li>
                
                
            </ul>
            
    

            
            
           
        </div>
   
    </div>

    <div class="content">
            
            <h3>Services Offered</h3>
            <ul>
                <li>Soft Brick/Hard Bricked Repair Services</li>
                <li>Screen Replacement Services</li>
                <li>Water Damaged Recovery Repairs</li>
                <li>Battery Replacement</li>
                <li>Software Upgrade And Custom OS Solutions</li>

                <li>Data Recovery</li>
                <li>Phones And Accesories Sales Coming Soon</li>
                
            </ul>
            
    

            
            
           
        </div>
   
    </div>
    
    
    
    
    
    
    </body>

    <div class="testimonial-container">
   <section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h2 class="title">what our client says</h2>
        </div>
        <div class="testimonials-content">
            <div class="swiper testimonials-slider js-testimonials-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonials-item">
                        <div class="info">
                            <img src="profile.png" alt="img">
                            <div class="text-box">
                                <h3 class="name">Arjun Divakar</h3>
                                <span class="job">Game developer</span>
                            </div>
                        </div>
                        <p>One of The Best Shop And Website Ever Used..Highly Recommended</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="swiper-slide testimonials-item">
                        <div class="info">
                            <img src="profile.png" alt="img">
                            <div class="text-box">
                                <h3 class="name">Carl Joseph</h3>
                                <span class="job">Web developer</span>
                            </div>
                        </div>
                        <p>Very Good Customer Service Highly Reccomended</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="swiper-slide testimonials-item">
                        <div class="info">
                            <img src="profile.png" alt="img">
                            <div class="text-box">
                                <h3 class="name">Kiara .S</h3>
                                <span class="job">UI/UX Designer</span>
                            </div>
                        </div>
                        <p>Professional Staff And fixed my phone within 2 days..Highly Reccomended Place to repair your phone.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="swiper-slide testimonials-item">
                        <div class="info">
                            <img src="profile.png" alt="img">
                            <div class="text-box">
                                <h3 class="name">Samuel Mathew</h3>
                                <span class="job">Web developer</span>
                            </div>
                        </div>
                        <p>No More Words, Best Doctors For Repairing your Phones. Saved a lot money!</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination js-testimonials-pagination"></div>
        </div>
    </div>
</section>
   </div>
     
        

    </form>
    <div class="wrappers">
      <p>The Begninning of a New Asset class</p>
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
          Why Choose Us?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Krushi is a Public Charitable Trust designed to carry out farming on
            extensive scale Natural & Sustainable methods.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          Do We Support All of The Mobile Phone Brands?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does the Krushi address the above challanges?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How can I be a part of Krushi?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How does it work?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
            saepe molestiae distinctio asperiores cupiditate consequuntur dolor
            ullam, iure eligendi harum eaque hic corporis debitis porro
            consectetur voluptate rem officiis architecto.
          </p>
        </div>
      </div>
    </div>

    <footer>
        <div class="footer-content">
            <h3>The Phone Repair Shop</h3>
        
            <div class="para">
                <p>Welcome To Phone Repair Shop, We Provide Best Service Possible to Our Customers.</p>
            </div>
            <div class="footer-imgs">
                <ul>
                    <li><a href="home.php"><img class="insta" src="instagram.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="fb" src="facebook.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="xlogo" src="xwhite.png"  alt="#"></a></li>
            
                </ul> 
                
                
                
            </div>
            <div class="footer-imgs2">
                <div class="contact-phone">
                   
                    <p>+91 9567297230</p>
                </div>
                
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023 The Phone Repair Shop Designed By Hemanth & Arjun. All Rights Reserved.
    <script> var loader=document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display="none";})
        var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
        </script>

    <script>
     
        

    </form>
    

    <footer>
        <div class="footer-content">
            <h3>The Phone Repair Shop</h3>
        
            <div class="para">
                <p>Welcome To Phone Repair Shop, We Provide Best Service Possible to Our Customers.</p>
            </div>
            <div class="footer-imgs">
                <ul>
                    <li><a href="home.php"><img class="insta" src="instagram.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="fb" src="facebook.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="xlogo" src="xwhite.png"  alt="#"></a></li>
                    <li><a href="home.php"><img class="reddit" src="reddit.png"  alt="#"></a></li>
            
                </ul> 
                
                
                
            </div>
            <div class="footer-imgs2">
                <div class="contact-phone">
                   
                    <p>+91 9567297230</p>
                </div>
                
            </div>
            <div class="copyright">
                <p>Copyright &copy; The Phone Repair Shop Designed By Hemanth & Arjun</p> 
            </div>
    
        </div>
    </footer>
    <script> var loader=document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display="none";})</script>
        
    <script>
       
        $(window).scroll(function(){
            $(".content").css("opacity", 1- $(window).scrollTop() / 250);

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="slider.js"></script>
</body>
</html>    
    
    
  