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
</head>
<body>

    <div class="" id="preloader"></div>

    <form action="" method="post">
        
    
        
    
        <div class="nav_links">
            <div class="logo">
                <a href="miniproject-main\registration\indexreg.php"><img src="logo2.png"  alt="#"></a>
                
            </div>
            
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a id="buttonn" href="http://localhost/miniproject-main/registration/indexreg.php">Sign Up</a></li>
                
            
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
        
    <div class="content">
            
        <h3>The Repair Process</h3>
        <p>We Make Sure That Every Customer is satisfied with our Service.</p>
        <p>We Provide Fast & Reliable Repair Charges.</p>
        <p>Customers Responses Are Our First Priority.</p>


        
        
        
        
    </div>
    
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
                                <h3 class="name">John doe</h3>
                                <span class="job">Web developer</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet.</p>
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
                        <p>Lorem ipsum dolor sit amet.</p>
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
                                <span class="job">Web developer</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet.</p>
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
                        <p>Lorem ipsum dolor sit amet.</p>
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
                <p>Copyright &copy; 2023 The Phone Repair Shop Designed By Hemanth & Arjun</p> 
            </div>
    
        </div>
    </footer>
    <script> var loader=document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display="none";})</script>
    <script>
       
        $(window).scroll(function(){
            $(".content").css("opacity", 1- $(window).scrollTop() / 25);
            

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper('.js-testimonials-slider', {di
            grabCursor: true,
            spaceBetween:30,
            pagination:{
                el:'.js-testimonials-pagination',
                clickable: true,
            },
            breakpoints:{
                767:{

                    slidesPerView:3
                }
            }
        });

    </script>
    
</body>

</html>
