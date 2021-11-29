<?php
 session_start();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--aos css-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="global.css">
    <title>D-APMC SDashboard</title>
</head>

<body>

                <?php
                  include 'php/dbconnect1.php';
                  $query2 = "select * from tabledb1 where type = '1' ";
                  $fetch2 = mysqli_query($conn,$query2);
                  $fnums = mysqli_num_rows($fetch2);

                  $query3 = "select * from tabledb1 where type = '2' ";
                  $fetch3 = mysqli_query($conn,$query3);
                  $mnums = mysqli_num_rows($fetch3);


                  $username="root";
                  $password="";
                  $server="localhost";
                  $db="db2";
                  $conn2=mysqli_connect($server,$username,$password,$db);  
            
                  $query4 = "select * from fix";
                  $fetch4 = mysqli_query($conn2,$query4);
                  $dnums = mysqli_num_rows($fetch4);



                ?>
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
                            <line x1="3" y1="12" x2="21" y2="12" />
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
                           

                        </div>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
    <!--End Nav Section-->

    <!-- Page Content -->
    <div id="page-content-wrapper" data-aos="fade-up">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h1 class="fs-1 m-0">Dashboard</h1>
                </div>



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
            </nav>
 
            <?php

                 include 'php/dbconnect1.php';
                 $query1 = "select * from sale1";
                 $fetch = mysqli_query($conn,$query1);   
                 $nums = mysqli_num_rows($fetch);

            ?>
     
            <div class="container-fluid px-4" data-aos="fade-down">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="py-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-3"><?php echo"$fnums"?></h3>
                                <p class="fs-3">Farmer</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-down">
                        <div class="py-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-3"><?php echo"$mnums"?></h3>
                                <p class="fs-3">Traders</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3">
                            </i>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-down">
                        <div class="py-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-3"><?php echo $dnums ?></h3>
                                <p class="fs-3">Deals</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3" data-aos="fade-down">
                        <div class="py-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-3"><?php echo"$nums"?></h3>
                                <p class="fs-3">Orders</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5" data-aos="fade-left">
                    <h1 class="fs-1 mb-3">Recent Orders</h1>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Qunatity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                               include 'php/dbconnect1.php';
                               $query1 = "select * from sale1";
                               $fetch = mysqli_query($conn,$query1);   
                               $nums = mysqli_num_rows($fetch);
                               while($res = mysqli_fetch_assoc($fetch))
                              {
                                ?>
                                  <tr>
          
                                   <td><?php echo $res['product_ID'] ?></td>
                                   <td><?php echo $res['product_name'] ?></td>
                                   <td><?php echo $res['First_name'] ?></td>
                                   <td><?php echo $res['Product_quantity'] ?></td>
                                   <td><?php echo $res['Product_Price'] ?></td>
                                 </tr>
                                <?php
                              }                                   
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

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
                        <li><a href="https://www.ugaoo.com/plant-care/plant-growth/fertilizers.html">Buy Fertilizer</a> </li>
                        <li><a href="https://truckguru.co.in/">Transport Booking</a> </li>
                        <li><a href="https://www.ugaoo.com/buy-seeds-online-india.html?gclid=Cj0KCQjw8eOLBhC1ARIsAOzx5cF_-1Q8B4H-IeVkN-jpbW2LF9bWgvOLX6cHiDRANUTMnQVOZy0qmiUaAkqmEALw_wcB">Buy seeds</a> </li>

                    </ul>
                </div>

                <div class="footer__col4">
                    <h3 class="footer__text__title">Contact</h3>
                    <ul class="footer__text">
                        <li><a href="#">9579212952</a> </li>
                        <li><a href="#">dapmc2021@gmail.com</a> </li>


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


    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <!-- js -->
    <script src="main.js"></script>
</body>


</html>