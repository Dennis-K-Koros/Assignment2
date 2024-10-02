<?php
require_once "classlib.php";

$dbConnection = new DbConnection();
$pdo = $dbConnection->getPdo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewUsers</title>
    <link rel="stylesheet" href="css/viewusers.css">
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
<section id="user_details">
       <div class="user_details">
            <h1>Our Clients</h1>
            <h4>We will always appreciate your support and trust in us</h4>
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
                            ["firstname"]; ?> 
                            <?php
                        }
                    ?>        
                </li>
                <li><a href="index.php">HomePage</a></li>
                <?php
                    if(isset($_SESSION["data"])){
                        ?>
                            <li><a href = "viewusers.php" >View Users</a></li>
                            <li><a href = "signout.php" >Sign Out</a></li>
                            <?php        
                    }
                ?>
            </ul>
         </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu" >
    </div>

<!-- user table -->

<section id="user_table">
    <div class="title_text">
        <p>Our Clients</p>
        <h1>Our Supporters</h1>
    </div>
    <div class ="content">
        <table>
            <tr>
                <th>#</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Last Update</th>
                <th>Role</th>
                <th>Processing</th>
            </tr>
            <?php
            $stmt = $pdo->prepare("SELECT * FROM users");
            $stmt->execute(); 
            if($stmt->rowCount() > 0){
                $idNo=1;
                while ($user = $stmt->fetch()) {
            ?>        
            <tr>
                <td><?php print $idNo; $idNo++;?></td>
                <td><?php print $user["firstName"];?></td>       
                <td><?php print $user["lastName"];?></td>       
                <td><?php print $user["email"];?></td>       
                <td><?php print $user["datecreated"];?></td>       
                <td><?php print $user["dateupdated"];?></td> 
                <td><?php print $user["role"];?></td> 
                <td>[<a href="edit.php?userId=<?php print $user_row["userId"]?>">Edit</a>] [<a href="processes/del.php?userId=<?php print $user_row["userId"]?>">Del</a>]</td> 
                
            <?php
                }
            }else{
                echo "0 results";
            }
            ?>
            </tr>    
        </table>   
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