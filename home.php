<?php
    session_start();
    if(!isset($_SESSION['name']))
    {
      ?>
        <!--Login-->
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <!--aos css-->
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

            <link rel="stylesheet" href="global.css">
            <link rel="stylesheet" href="components.css">
            <link rel="stylesheet" href="css\home.css">
            <link rel="stylesheet" href="css\test.css">

        </head>

        <body>
            <!--Nav section-->
            <div class="nav">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="home.php" class='logo'>
                            <img src="images/logo.png" height="60px" width="60px" alt="not found">
                        </a>
                        <nav>
                            <div class="nav__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="3" y1="12" x2=php y2="12" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <line x1="3" y1="18" x2="21" y2="18" />
                                </svg>
                            </div>
                            <div class="nav__bgOverlay"></div>
                            <ul class="nav__list">
                                <span class="close-btn1">&times;</span>
                                <div class="nav__list__wrapper">
                                    <li><a href="home.php" class="nav__link">Home</a></li>
                                    <li><a href="dash.php" class="nav__link">Dashboard</a></li>
                                    <li><a href="about.php" class="nav__link">About US</a></li>
                                    <li><a href="contact.php" class="nav__link">Contact Us</a></li>
                                    
                                    <li><a href="login.php" class="btn1 primary-btn">login</a></li>
                                </div>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
            <!--End Nav Section-->

            <!--hero section-->
            <section id="herp">
                <div class="container">
                    <div class="hero__wrapper">
                        <div class="hero__left" data-aos="fade-left">
                            <h1 class="hero__heading">ONE STOP SHOP FOR FARMERS</h1>
                            <p class="hero__info">Integration of APMCs across the country through a common online market
                                platform to facilitate pan-India trade in agriculture commodities, providing better price
                                discovery through transparent auction process based on quality of produce along with timely
                                online payment.</p>
                            
                        </div>
                        <div class="hero__right" data-aos="fade-right">
                            <div class="hero__imagewrapper">
                                <img src="images/2.jpeg" alt="NOt Found">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--end hero section-->





            <!--sell and buy section-->
            <section id="sell__buy__btn">
                <div class="container">
                    <h1 class="hero__heading">Selling and buying Here...</h1>
                    <div class="container">
                        <form action="sales.php" method="POST">
                            <div id="btn1" class="btn" name="sale" data-aos="fade-down"><button class="sale">For sale
                                    Product</button></div>
                        </form>
                        <form action="buy.php" method="POST">
                            <div id="btn2" class="btn" name="buy" data-aos="fade-down"><button class="buy">For Buy
                                    Product</button></div>
                        </form>
                    </div>
                </div>
            </section>
            <!--end sell and buy section-->

            <!--Our Specials-->

            <section id="ourspecials">
                <div class="container">
                    <div class="ourspecials__wrapper">
                        <div class="ourspecials__left">
                            <div class="ourspecials__item" data-aos="fade-left">
                                <div class="ourspecials__item__img">
                                    <img src="images/paisa.jpg" alt="not found">
                                </div>
                                <h2 class="ourspecials__item__title">Farmer Get Best Price For Our Product</h2>
                                <p class="ourspecials__item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                    minus laboriosam pariatur.
                                    Necessitatibus sequi rerum doloremque omnis aliquam consequatur quisquam, sunt alias
                                    expedita
                                    laboriosam vel vitae voluptatem! Distinctio, magnam autem?</p>
                            </div>
                            <div class="ourspecials__item" data-aos="fade-right">
                                <div class="ourspecials__item__img">
                                    <img src="images/No-Middleman.jpg" alt="not found">
                                </div>
                                <h2 class="ourspecials__item__title">No Middel Man Interfare</h2>
                                <p class="ourspecials__item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                    minus laboriosam pariatur.
                                    Necessitatibus sequi rerum doloremque omnis aliquam consequatur quisquam, sunt alias
                                    expedita
                                    laboriosam vel vitae voluptatem! Distinctio, magnam autem?</p>
                            </div>
                        </div>
                        <div class="ourspecials__right">
                            <div class="">
                                <h1 class="ourspecials__heading">Our Motive</h1>
                                <h3 class="ourspecialsr__text">For giving these two facility to farmer we make this platform.
                                    this help farmer as well as traders .because of this platform middelman is not interfare in
                                    deals so farmer dirctly sale their product in best price</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--very demands product-->


            <section id="demanded">

                <div class="container">
                    <div class="">
                        <h1 class="demanded__heading">Very Demanded Product</h1>
                    </div>
                    <div class="demanded__wrapper">

                        <div class="demanded__item">
                            <div class="demanded__icon" data-aos="fade-up">
                                <img src="images/6.jpg" alt="Not Found">
                            </div>
                            <div class="demanded__title">
                                <h1>Wheat</h1>
                            </div>
                        </div>

                        <div class="demanded__item">
                            <div class="demanded__icon" data-aos="fade-up">
                                <img src="images/8.jpg" alt="Not Found">
                            </div>
                            <div class="demanded__title">
                                <h1>Cotton</h1>
                            </div>
                        </div>

                        <div class="demanded__item">
                            <div class="demanded__icon" data-aos="fade-up">
                                <img src="images/7.jpg" alt="Not Found">
                            </div>
                            <div class="demanded__title">
                                <h1>Vegetables</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--store info-->

            <section id="storeinfo" data-aos="fade-up">
                <div class="container">
                    <div class="storeInfo__wrapper">
                        <div class="storeInfo__item">
                            <div class="storeInfo__icon">
                                <img src="images/clock.png" height="40px" width="40px" alt="not found">
                            </div>
                            <h3 class="storeInfo__title">
                                24 hours Online
                            </h3>
                            <p class="storeInfo__text">
                                Active Time
                            </p>
                        </div>
                        <div class="storeInfo__item">
                            <div class="storeInfo__icon">
                                <img src="images/email.png" height="40px" width="40px" alt="not found">
                            </div>
                            <h3 class="storeInfo__title">
                                DAPMC21@gmail.com
                            </h3>
                            <p class="storeInfo__text">
                                Email Address
                            </p>
                        </div>
                        <div class="storeInfo__item">
                            <div class="storeInfo__icon">
                                <img src="images/phone.png" height="40px" width="40px" alt="not found">
                            </div>
                            <h3 class="storeInfo__title">
                                +919579212952
                            </h3>
                            <p class="storeInfo__text">
                                Phone No.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--ens store info-->



            <!--Footer-->
            <footer>
                <div class="container">
                    <div class="footer__wrapper">
                        <div class="footer__col1">
                            <img src="images/logo.png" height="60px" width="60px" alt="not found">
                            <p class="footer__desc">
                                D-APMC Is The Best Online Selling &
                            </p>
                            <p class="footer__desc">
                                Buying Website for Farmer.
                            </p>
                            <div class="footer__socials">
                                <h4 class="footer__social__title">Follow US</h4>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="footer__col2">
                            <h3 class="footer__text__title">Links</h3>
                            <ul class="footer__text">
                                <li><a href="home.php">Home</a> </li>
                                <li><a href="dash.php">Dashboard</a> </li>
                                <li><a href="about.php">About Us</a> </li>
                                <li><a href="contact.php">Contact Us</a> </li>
                            </ul>
                        </div>

                        <div class="footer__col3">
                            <h3 class="footer__text__title">Supports</h3>
                            <ul class="footer__text">
                                <li><a href="https://www.ugaoo.com/plant-care/plant-growth/fertilizers.html">Buy Fertilizer</a>
                                </li>
                                <li><a href="https://truckguru.co.in/">Transport Booking</a> </li>
                                <li><a
                                        href="https://www.ugaoo.com/buy-seeds-online-india.html?gclid=Cj0KCQjw8eOLBhC1ARIsAOzx5cF_-1Q8B4H-IeVkN-jpbW2LF9bWgvOLX6cHiDRANUTMnQVOZy0qmiUaAkqmEALw_wcB">Buy
                                        seeds</a> </li>

                            </ul>
                        </div>

                        <div class="footer__col4">
                            <h3 class="footer__text__title">Contact</h3>
                            <ul class="footer__text">
                                <li><a href="#">9579212952</a> </li>
                                <li><a href="#">dapmc21@gmail.com</a> </li>


                            </ul>
                        </div>

                    </div>
                </div>
            </footer>
            <div id="copyright">
                <p class="copyright__text">
                    Copyright @ 2021 DAPMC | All rights reserved
                </p>
            </div>
            <!--End Footer-->

            <!--aos script-->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init({
                    offset: 200,
                    delay: 100,
                    duration: 400,
                    easing: 'ease',
                    once: false,
                    mirror: false,
                    achorPlacement: 'top-bottom'
                });
            </script>

            <!-- js -->
            <script src="main.js"></script>
        </body>

        </html>
        <?php
    }
    
    
    else
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home</title>
                <!--aos css-->
                <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

                <link rel="stylesheet" href="global.css">
                <link rel="stylesheet" href="components.css">
                <link rel="stylesheet" href="css\home.css">
                <link rel="stylesheet" href="css\test.css">

            </head>

            <body>
                <!--Nav section-->
                <div class="nav">
                    <div class="container">
                        <div class="nav-wrapper">
                            <a href="home.php" class='logo'>
                                <img src="images/logo.png" height="60px" width="60px" alt="not found">
                            </a>
                            <nav>
                                <div class="nav__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="3" y1="12" x2=php y2="12" />
                                        <line x1="3" y1="6" x2="21" y2="6" />
                                        <line x1="3" y1="18" x2="21" y2="18" />
                                    </svg>
                                </div>
                                <div class="nav__bgOverlay"></div>
                                <ul class="nav__list">
                                    <span class="close-btn1">&times;</span>
                                    <div class="nav__list__wrapper">
                                        <li><a href="home.php" class="nav__link">Home</a></li>
                                        <li><a href="dash.php" class="nav__link">Dashboard</a></li>
                                        <li><a href="about.php" class="nav__link">About US</a></li>
                                        <li><a href="contact.php" class="nav__link">Contact Us</a></li>
                                        <li><a href="profile.php" class="nav__link">Profile</a></li>
                                        <li><a href="logout.php" class="btn1 primary-btn">logout</a></li>

                                    </div>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
                <!--End Nav Section-->

                <!--hero section-->
                <section id="herp">
                    <div class="container">
                        <div class="hero__wrapper">
                            <div class="hero__left" data-aos="fade-left">
                                <h1 class="hero__heading">ONE STOP SHOP FOR FARMERS</h1>
                                <p class="hero__info">Integration of APMCs across the country through a common online market
                                    platform to facilitate pan-India trade in agriculture commodities, providing better price
                                    discovery through transparent auction process based on quality of produce along with timely
                                    online payment.</p>
                                
                            </div>
                            <div class="hero__right" data-aos="fade-right">
                                <div class="hero__imagewrapper">
                                    <img src="images/2.jpeg" alt="NOt Found">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--end hero section-->





                <!--sell and buy section-->
                <section id="sell__buy__btn">
                    <div class="container">
                        <h1 class="hero__heading">Selling and buying Here...</h1>
                        <div class="container">
                            <form action="sales.php" method="POST">
                                <div id="btn1" class="btn" name="sale" data-aos="fade-down"><button class="sale">For sale
                                        Product</button></div>
                            </form>
                            <form action="buy.php" method="POST">
                                <div id="btn2" class="btn" name="buy" data-aos="fade-down"><button class="buy">For Buy
                                        Product</button></div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--end sell and buy section-->

                 <!--Our Specials-->

                 <section id="ourspecials">
                     <div class="container">
                         <div class="ourspecials__wrapper">
                             <div class="ourspecials__left">
                                 <div class="ourspecials__item" data-aos="fade-left">
                                     <div class="ourspecials__item__img">
                                         <img src="images/paisa.jpg" alt="not found">
                                     </div>
                                     <h2 class="ourspecials__item__title">Farmer Get Best Price For Our Product</h2>
                                     <p class="ourspecials__item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                         minus laboriosam pariatur.
                                         Necessitatibus sequi rerum doloremque omnis aliquam consequatur quisquam, sunt alias
                                         expedita
                                         laboriosam vel vitae voluptatem! Distinctio, magnam autem?</p>
                                 </div>
                                 <div class="ourspecials__item" data-aos="fade-right">
                                     <div class="ourspecials__item__img">
                                         <img src="images/No-Middleman.jpg" alt="not found">
                                     </div>
                                     <h2 class="ourspecials__item__title">No Middel Man Interfare</h2>
                                     <p class="ourspecials__item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                         minus laboriosam pariatur.
                                         Necessitatibus sequi rerum doloremque omnis aliquam consequatur quisquam, sunt alias
                                         expedita
                                         laboriosam vel vitae voluptatem! Distinctio, magnam autem?</p>
                                 </div>
                             </div>
                             <div class="ourspecials__right">
                                            <div class="">
                                     <h1 class="ourspecials__heading">Our Motive</h1>
                                     <h3 class="ourspecialsr__text">For giving these two facility to farmer we make this platform.
                                         this help farmer as well as traders .because of this platform middelman is not interfare in
                                         deals so farmer dirctly sale their product in best price</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>

                 <!--very demands product-->


                <section id="demanded">

                    <div class="container">
                        <div class="">
                            <h1 class="demanded__heading">Very Demanded Product</h1>
                        </div>
                        <div class="demanded__wrapper">

                            <div class="demanded__item">
                                <div class="demanded__icon" data-aos="fade-up">
                                    <img src="images/6.jpg" alt="Not Found">
                                </div>
                                <div class="demanded__title">
                                    <h1>Wheat</h1>
                                </div>
                            </div>

                            <div class="demanded__item">
                                <div class="demanded__icon" data-aos="fade-up">
                                    <img src="images/8.jpg" alt="Not Found">
                                </div>
                                <div class="demanded__title">
                                    <h1>Cotton</h1>
                                </div>
                            </div>

                            <div class="demanded__item">
                                <div class="demanded__icon" data-aos="fade-up">
                                    <img src="images/7.jpg" alt="Not Found">
                                </div>
                                <div class="demanded__title">
                                    <h1>Vegetables</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!--store info-->            

                <section id="storeinfo" data-aos="fade-up">
                    <div class="container">
                        <div class="storeInfo__wrapper">
                            <div class="storeInfo__item">
                                <div class="storeInfo__icon">
                                    <img src="images/clock.png" height="40px" width="40px" alt="not found">
                                </div>
                                <h3 class="storeInfo__title">
                                    24 hours Online
                                </h3>
                                <p class="storeInfo__text">
                                    Active Time
                                </p>
                            </div>
                            <div class="storeInfo__item">
                                <div class="storeInfo__icon">
                                    <img src="images/email.png" height="40px" width="40px" alt="not found">
                                </div>
                                <h3 class="storeInfo__title">
                                    DAPMC21@gmail.com
                                </h3>
                                <p class="storeInfo__text">
                                    Email Address
                                </p>
                            </div>
                            <div class="storeInfo__item">
                                <div class="storeInfo__icon">
                                    <img src="images/phone.png" height="40px" width="40px" alt="not found">
                                </div>
                                <h3 class="storeInfo__title">
                                    +919579212952
                                </h3>
                                <p class="storeInfo__text">
                                    Phone No.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--ens store info-->



                <!--Footer-->
                <footer>
                    <div class="container">
                        <div class="footer__wrapper">
                            <div class="footer__col1">
                                <img src="images/logo.png" height="60px" width="60px" alt="not found">
                                <p class="footer__desc">
                                    D-APMC Is The Best Online Selling &
                                </p>
                                <p class="footer__desc">
                                    Buying Website for Farmer.
                                </p>
                                <div class="footer__socials">
                                    <h4 class="footer__social__title">Follow US</h4>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path
                                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="footer__col2">
                                <h3 class="footer__text__title">Links</h3>
                                <ul class="footer__text">
                                    <li><a href="home.php">Home</a> </li>
                                    <li><a href="dash.php">Dashboard</a> </li>
                                    <li><a href="about.php">About Us</a> </li>
                                    <li><a href="contact.php">Contact Us</a> </li>
                                </ul>
                            </div>

                            <div class="footer__col3">
                                <h3 class="footer__text__title">Supports</h3>
                                <ul class="footer__text">
                                    <li><a href="https://www.ugaoo.com/plant-care/plant-growth/fertilizers.html">Buy Fertilizer</a>
                                    </li>
                                    <li><a href="https://truckguru.co.in/">Transport Booking</a> </li>
                                    <li><a
                                            href="https://www.ugaoo.com/buy-seeds-online-india.html?gclid=Cj0KCQjw8eOLBhC1ARIsAOzx5cF_-1Q8B4H-IeVkN-jpbW2LF9bWgvOLX6cHiDRANUTMnQVOZy0qmiUaAkqmEALw_wcB">Buy
                                            seeds</a> </li>

                                </ul>
                            </div>

                            <div class="footer__col4">
                                <h3 class="footer__text__title">Contact</h3>
                                <ul class="footer__text">
                                    <li><a href="#">9579212952</a> </li>
                                    <li><a href="#">dapmc21@gmail.com</a> </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                </footer>
                <div id="copyright">
                    <p class="copyright__text">
                        Copyright @ 2021 DAPMC | All rights reserved
                    </p>
                </div>
                <!--End Footer-->

                <!--aos script-->
                <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                    AOS.init({
                        offset: 200,
                        delay: 100,
                        duration: 400,
                        easing: 'ease',
                        once: false,
                        mirror: false,
                        achorPlacement: 'top-bottom'
                    });
                </script>

                <!-- js -->
                <script src="main.js"></script>
            </body>

            </html>

        <?php
    }
?>


