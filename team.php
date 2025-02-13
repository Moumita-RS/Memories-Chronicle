<?php 
session_start();
include "./admin/includes/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memories Chronicel</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />

    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <!-- <link rel="stylesheet" href="./css/contact.css" /> -->
    <!-- <link rel="stylesheet" href="./css/services.css" /> -->
    <link rel="stylesheet" href="./css/team.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  </head>
  <body>
    <div class="transition transition-3 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor"></div>
    <span class="tail"></span>
    <!-- ------------------------cursor---------------- -->
    <section class="header">
      <div class="container">
        <div class="navbar">
          <div class="menu">
            <!-- <h3 class="logo">Memories <span>Chronicel</span></h3> -->
            <img class="blogo" src="./images/logo2.png" alt="" />
            <div class="hamburger-menu" id="h-menu">
              <div class="bar"></div>
            </div>
          </div>
        </div>

        <div class="main-container">
          <div class="main">
            <header>
              <div class="team-wrapper">
                  <!-- <span class="title">OUR SERVICES </span> -->
                  <div class="bgtext">
                      <div class="neon">Team </div>
                      <div class="flux">Members ⤸</div>

                  </div>
                <div class="team-container">
                    
                    <div class="card">
                        <div class="imgBx">
                            <img src="./images/abdul.jpg">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>Abdulliah Ibne Mojib<br><span>Creative Designer</span></h3>
                                
                            </div>
                            <ul class="sci">
                                <li style="--i:1;"><a href="#"><i class="fab fa-facebook-f"></i>
                                    </a></li>
                                    <li style="--i:2;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li style="--i:3;"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="card"> 
                        <div class="imgBx">
                            <img src="./images/somu.jpg">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>Soumita Mondol<br><span>Creative Designer</span></h3>
                                
                            </div>
                            <ul class="sci">
                                <li style="--i:1;"><a href="#"><i class="fab fa-facebook-f"></i>
                                    </a></li>
                                    <li style="--i:2;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li style="--i:3;"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="imgBx">
                            <img src="./images/pranto.jpg">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>Mahmudul Hasan Pranto<br><span>Creative Designer</span></h3>
                                
                            </div>
                            <ul class="sci">
                                <li style="--i:1;"><a href="#"><i class="fab fa-facebook-f"></i>
                                    </a></li>
                                    <li style="--i:2;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li style="--i:3;"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="imgBx">
                            <img src="./images/roy.jpg">
                        </div>
                        <div class="content">
                            <div class="contentBx">
                                <h3>Moumita Roy<br><span>Creative Designer</span></h3>
                                
                            </div>
                            <ul class="sci">
                                <li style="--i:1;"><a href="#"><i class="fab fa-facebook-f"></i>
                                    </a></li>
                                    <li style="--i:2;"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li style="--i:3;"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
              </div>
              </header>
            </header>
          </div>

          <div class="shadow one"></div>
          <div class="shadow two"></div>
        </div>

        <div class="links">
          <ul>
            <li>
              <a href="./index.php" style="--i: 0.05s">Home</a>
            </li>
            <li>
              <a href="./about.php" style="--i: 0.1s">About Us</a>
            </li>
            <li>
              <a href="./services.php" style="--i: 0.15s">Services</a>
            </li>
            <li>
              <a href="./gallery.php" style="--i: 0.2s">Gallery</a>
            </li>
            <li>
              <a href="./blog.php" style="--i: 0.25s">Blog</a>
            </li>
            <li>
              <a href="./contact.php" style="--i: 0.3s">Contact</a>
            </li>
            <li>
              <a href="./team.php" style="--i: 0.35s">Team Member</a>
            </li>
            <li>
              <a href="./profile.php" style="--i: 0.4s">Profile</a>
            </li>
            <?php 
              if(!isset($_SESSION['user_name'])){
      
            ?>
              <li>
                  <a href="./login.php" style="--i: 0.45s">Login</a>
              </li>
            <?php }else{

              ?>
              <li>
                <a href="./logout.php" style="--i: 0.45s">Logout</a>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </section>

    <script src="./js/courser.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/menu.js"></script>
  </body>
</html>
