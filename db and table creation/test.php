<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.js-testimonials-slider', {
       grabCursor: true,
       spaceBetween:30,
       pagination:{
        el: '.js-testimonials-pagination',
        clickable: true,
       },
       breakpoints:{
        767:{
            slidesPerView: 2
        }
       } 
    });

</script>













<body>
    
</body>
</html>