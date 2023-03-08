<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/scrollbar.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="/img/favicons/favicon.ico" />
    <script src="/app.js" defer></script>
    <title>kurochi</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">kurochi</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item"><a href="/index.html">მთავარი</a></li>
                    <li class="menu-list-item"><a href="/pages/anime.html">ანიმე</a></li>
                    <li class="menu-list-itemNO"><a href="">მანგა</a></li>
                    <li class="menu-list-item"><a href="/pages/about.html">შესახებ</a></li>
                </ul>
            </div>

            <div class="profile-container">
                <div id="action">
                    <div id="profmenu">
                        <div class="menu">
                            <ul>
                                <li><img src=""><a href="#">ჩემი პროფილი</a></li>
                                <li><img src=""><a href="#">რედაქტირება</a></li>
                                <li><img src=""><a href="#">შეტყობინებები</a></li>
                                <li><img src=""><a href="#">პარამეტრები</a></li>
                                <li><img src=""><a href="#">გასვლა</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <img class="profile-picture" src="/img/user-pfp.png" alt="ფოტო ვერ ჩაიტვირთა." />
                <div class="profile-text-container">
                    <span id="profile-text" onclick="toggle()">პროფილი</span>
                    <i class="fa-solid fa-caret-down"></i>
                </div> 
            </div>
        </div>
    </div>

<!-- <div class="mrhr1"><hr></div> -->


<?php require_once "./partials/popular.php" ?>
<div class="next-container">
    <div class="next-text">
        <h1>განაგრძე ყურება</h1>
    </div>

    <div class="next-cont">
        <div class="next-list-wrapper">
            <div class="next-list">
                <div class="next-list-item">
                    <a href="#"><img class="next-list-item-img1" src="/img/nobanner.jpg"></a>
                    <span class="next-list-item-title"></span>
                    <button class="next-list-item-button1"></button>
                </div>
            </div>
        </div>
</div>

<div class="next-cont2">
    <div class="next-list-wrapper2">
        <div class="next-list2">
            <div class="next-list-item2">
                <a href="#"><img class="next-list-item-img2" src="/img/nobanner.jpg"></a>
                <span class="next-list-item-title2"></span>
                <button class="next-list-item-button2"></button>
            </div>
        </div>
    </div>
</div>

<div class="mrhr"><hr></div>

        <div class="carousel-slide">
            <div class="swiper">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                
                      <!-- Slides -->
                      <div class="swiper-slide"><img src="/img/naruto_banner.jpg" alt="">
                        <div class="naruto">
                            <h1>ნარუტო</h1><a href="#"><button>უყურე</button></a>
                        </div>
                      </div>
                
                      <div class="swiper-slide"><img src="/img/onepiece.jpg" alt="">
                        <div class="onepiece">
                            <h1>ვან პისი</h1><a href="#"><button>უყურე</button></a>
                        </div>
                      </div>
                
                      <div class="swiper-slide"><img src="/img/demonslayer.jpg" alt="">
                        <div class="demonslayer">
                            <h1>დემონების მკვეთი</h1><a href="#"><button>უყურე</button></a>
                        </div>
                      </div>
                      
                    </div>
                
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

             </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },

        loop: true,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
      
      });

</script>


</body>
</html>