<!-- <?php 
// require_once '../database/dbconnection.php';

session_start();

?> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link rel="shortcut icon" href="../image/logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
        <div class="heading">
                <h1 style="text-align: center;">E-Learning Platform</h1>

            </div>
    <header>
        <nap>
           
            <div class="menu">
           
                <ul>
               <li> <div class="logo">
                <img src="../image/logo.jpg" alt="logo" width="40"/>

            </div>
               </li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href='../index.php'>Logout</a></li>
                    <li><a href='#'>Profile</a></li>
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