<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp page</title>
    <link rel="stylesheet" href="css/signup.css">
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
    <section id="signup">
            <div class="signup">
                <h1>Sign Up</h1>
                <h4>Its free and only takes a minute</h4>
            </div>    
    </section> 

    <div id="sideNav">
         <nav>
            <ul>
                <li><a href="signin.php">SignIn</a></li>
                <li><a href="index.php">Cancel</a></li>
            </ul>
         </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu" >
    </div>

    <!-- signup form -->

    <section id="signup_content">  
        <div class="signup_box">         
                <form action="processes/signup_process.php" method="POST" autocomplete="off">
                    <label> First Name</label>
                    <input type="text" placeholder="First Name"
                    name="FirstName" required/>
                    <label> Last Name</label>
                    <input type="text" placeholder="Last Name" name="LastName" required/>
                    <label> Email </label>
                    <input type="email" placeholder="Email Address" name="email" required/>
                    <label>Password</label>
                    <input type="password" placeholder="Password" name="password" required/>
                    <label> Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="confphrase" required/>
                    <input type="submit" value="Register Now" name="register"/>
                </form>
                <p>
                    By clicking on the Sign Up button, you agree to our<br />
                    <a href="">Terms and Conditions</a> and <a href="">Policy And Privacy</a>
                </p>
                <p>Already have an account?<a href="signin.php">Login here</a></p>
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