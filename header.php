<!DOCTYPE html>
<?php 
// require_once 'database/dbconnection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link rel="shortcut icon" href="image/logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="heading">
                <h1  style="background:DodgerBlue; color: white; padding: 5px; text-align:center;">E-Learning</h1>
            </div>
    <header>
        <nap>
        
            
            <div class="menu">
                <ul>
                    <li><div class="logo">
                <img src="image/logo.jpg" alt="avatar" width="40"/>

            </div></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                    <li><a href="login.php">Login</a></li>
                    
                    
                    <!-- <?php 
                    if(isset($_SESSION['userid'])){
                        echo "<li><a href='../includes/logout.inc.php'>Logout</a></li>";
                        echo "<li><a href='profile.php'>Profile</a></li>";
                        echo "<li><a href='user.php'>".$_SESSION['username']."</a><li>";
                    }
                    else{
                        echo "<li><a href='login.php'>Login</a></li>";
                        echo "<li><a href='signup.php'>Register</a></li>";
                    }
                    ?> -->
                </ul>
            </div>
        </nap>
    </header>
    
