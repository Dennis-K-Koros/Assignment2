<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkOut Studio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>
<body>
    <section id="banner">
        <img src="icons/gym.svg" class="logo">
        <div class="banner_text">
            <h1>WorkOut Studio</h1>
            <p>The pain you suffer today is a sign of tomorrow’s victory</p>
            <div class="banner_btn">
                <a href="Register.html"><span></span>Register</a>
                <a href="#"><span></span>Contact Us</a>
            </div>
        </div>
    </section>

    <div id="sideNav">
         <nav>
            <ul>
                <li>
                    <?php
                      session_start();
                      if(isset($_SESSION["data"])){
                        ?>
                            <?php print "Welcome " . $_SESSION["data"]
                            ["Firstname"]; ?> 
                            <?php
                        }
                    ?>        
                </li>
                <li><a href="#banner">Home</a></li>
                <li><a href="#feature">Features</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#testimonial">Testimonials</a></li>
                <li><a href="#footer">Meet Us</a></li>
                <?php
                    if(isset($_SESSION["data"])){
                        ?>
                            <li><a href = "viewusers.php" >View Users</a></li>
                            <li><a href = "processes/signout.php" >Sign Out</a></li>
                            <?php        
                    }
                ?>
            </ul>
         </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu" >
    </div>

    <!--features-->
    <section id="feature">
        <div class="title_text">
            <p>Features</p>
            <h1>Why choose Us</h1>
        </div>
        <div class="feature_box">
            <div class="features">
                <h1>Experienced Staff</h1>
                <div class="feature_desc">
                    <div class="feature_icon">
                        <img src="icons/shield.svg">
                    </div>
                    <div class="feature_text">
                        <p>Donec vel augue ac erat imperdiet malesuada et eleifend dui. Pellentesque tempor, turpis a porta feugiat, arcu magna malesuada nisl, a vehicula nunc sem quis orci. </p>
                    </div>
                </div>
                <h1>Pre Booking Online</h1>
                <div class="feature_desc">
                    <div class="feature_icon">
                        <img src="icons/checksquare.svg">
                    </div>
                    <div class="feature_text">
                        <p>Donec vel augue ac erat imperdiet malesuada et eleifend dui. Pellentesque tempor, turpis a porta feugiat, arcu magna malesuada nisl, a vehicula nunc sem quis orci. </p>
                    </div>
                </div>
                <h1>Affordable Cost</h1>
                <div class="feature_desc">
                    <div class="feature_icon">
                        <img src="icons/inr.svg">
                    </div>
                    <div class="feature_text">
                        <p>Donec vel augue ac erat imperdiet malesuada et eleifend dui. Pellentesque tempor, turpis a porta feugiat, arcu magna malesuada nisl, a vehicula nunc sem quis orci. </p>
                    </div>
                </div>
            </div>
            <div class="features_img">
                <img src="images/trainer.png">
            </div>
        </div>
    </section>

    <!-- service -->

    <section id="service">
        <div class="title_text">
            <p>Services</p>
            <h1>We Provide Better</h1>
        </div>
        <div class="service_box">
            <div class="single_service">
                <img src="images/pic-1.jpg">
                <div class="overlay"></div>
                <div class="service_desc">
                    <h3>Weight Lifting Training</h3>
                    <hr>
                    <p>This is the text under description of barber foundation.</p>
                </div>
            </div>
            <div class="single_service">
                <img src="images/pic-2.jpg">
                <div class="overlay"></div>
                <div class="service_desc">
                    <h3>A variety of Equipment</h3>
                    <hr>
                    <p>This is the text under description of barber foundation.</p>
                </div>
            </div>
            <div class="single_service">
                <img src="images/pic-3.jpg">
                <div class="overlay"></div>
                <div class="service_desc">
                    <h3>Trainer Consultation</h3>
                    <hr>
                    <p>This is the text under description of barber foundation.</p>
                </div>
            </div>
            <div class="single_service">
                <img src="images/pic-4.png">
                <div class="overlay"></div>
                <div class="service_desc">
                    <h3>Diet recommendations</h3>
                    <hr>
                    <p>This is the text under description of barber foundation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->

    <section id="testimonial">
        <div class="title_text">
            <p>Testimonial</p>
            <h1>What Client Says</h1>
        </div>
        <div class="testimonial_row">
            <div class="testimonial_col">
                <div class="user">
                    <img src="images/img-1.png">
                    <div class="user_info">
                        <h4>Alice Zenovia <img src="icons/twitter.svg"></h4>
                        <small>@alicezen</small>
                    </div>
                </div>
                <p>Donec accumsan eu enim ac ultrices. Etiam semper, tellus eget sodales molestie, dolor purus lacinia libero, suscipit gravida justo nibh sit amet ex</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="images/img-2.png">
                    <div class="user_info">
                        <h4>Michael Fang <img src="icons/twitter.svg"></h4>
                        <small>michealfang</small>
                    </div>
                </div>
                <p>Donec accumsan eu enim ac ultrices. Etiam semper, tellus eget sodales molestie,</p>
            </div>
            <div class="testimonial_col">
                <div class="user">
                    <img src="images/img-3.png">
                    <div class="user_info">
                        <h4>Iman Habib <img src="icons/twitter.svg"></h4>
                        <small>@imanhabib</small>
                    </div>
                </div>
                <p>Donec accumsan eu enim ac ultrices. Etiam semper, tellus eget sodales molestie, dolor purus lacinia libero, suscipit gravida justo nibh sit amet ex</p>
            </div>
        </div>
    </section>

    <!-- footer -->

    <section id="footer">
        <img src="images/footer.png" class="footer_img">
        <div class="title_text">
            <p>Contact</p>
            <h1>Visit Our Shop Today</h1>
        </div>
        <div class="footer_row">
            <div class="footer_left">
                <h1>Openning Hours</h1>
                <div class="footer_section">
                    <div class="icon">
                        <img src="icons/clock.svg">
                    </div>
                    <div>
                        <p>Monday to Friday - 9am to 9pm</p>
                    </div>
                </div>
                <div class="footer_section">
                    <div class="icon">
                        <img src="icons/clock.svg">
                    </div>
                    <div>
                        <p>Saturday And Sunday - 8am to 11pm</p>
                    </div>
                </div>
            </div>
            <div class="footer_right">
                <h1>Getting In Touch</h1>
                <div class="footer_section">
                    <div>
                        <p>#30 abc Colony, xyz City IN</p>
                    </div>
                    <div class="icon">
                        <img src="icons/mapmarker.svg">
                    </div>
                </div>
                <div class="footer_section">
                    <div>
                        <p>example@gmail.com</p>
                    </div>
                    <div class="icon">
                        <img src="icons/paperplane.svg">
                    </div>
                </div>
                <div class="footer_section">
                    <div>
                        <p>+254 0712345678</p>
                    </div>
                    <div class="icon">
                        <img src="icons/phone.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="social_links">
            <img src="icons/facebook.svg">
            <img src="icons/instagram.svg"></i>
            <img src="icons/twitter.svg"></i>
            <img src="icons/youtube.svg"></i>
            <p> Copyright Dennis Koros</p>
        </div>
    </section>

    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menuBtn.onclick = function(){
            if(sideNav.style.right == "-250px"){
                sideNav.style.right = "0";
                menu.src="images/close.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src="images/menu.png";
            }
        }

        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });

    </script>

</body>
</html>