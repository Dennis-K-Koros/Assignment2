<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn page</title>
    <link rel="stylesheet" href="css/signin.css">
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
    <?php
        if (isset($_GET['error'])) {
            $error_message = $_GET['error'];
            echo "<p style='color: red;'>$error_message</p>";
        }
    ?>
    <section id="signin">
        <div class="signin">
            <h1>Sign In</h1>
            <h4>We missed you and can't wait for you to continue from where you left off</h4>
        </div>    
    </section> 

    <div id="sideNav">
         <nav>
            <ul>
                <li><a href="signup.php">SignUp</a></li>
                <li><a href="index.php">Cancel</a></li>
            </ul>
         </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu" >
    </div>

    <!-- signin form -->

    <section id="signin_content">  
        <div class="login_box">
            <form action="processes/signin_process.php" method="POST" autocomplete="off">
                <label>Email</label>
                <input type="email" placeholder="Email Address" name="email"  required/>
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" required />
                <input type="submit" value="Sign In" name="signIn"/>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign Up Here</a></p>
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