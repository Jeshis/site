<?php 
include 'header.php';
// require 'data.php';
require '../database/dbconnect.php';
require '../includes/login.check.admin.php';
require '../includes/login.admin.php';

// $all_members=allMembers($conn);
// $no_of_all_members=$all_members->num_rows;

// $all_admins=allAdmins($conn);
// $no_of_all_admins=$all_admins->num_rows;

// $all_users=allUsers($conn);
// $no_of_all_users=$all_users->num_rows;

// $all_inactive_admins=allInactiveAdmins($conn);
// $no_of_all_inactive_admins=$all_inactive_admins->num_rows;

// $all_inactive_users=allInactiveUsers($conn);
// $no_of_all_inactive_users=$all_inactive_users->num_rows;

// $all_posts=allPosts($conn);
// $no_of_all_posts=$all_posts->num_rows;


?>
<h1 style="text-align:center;background-color:cornsilk">Admin Dashboard</h1>
<!-- <?php 
// if(isset($_GET['promote'])){
//     echo "<p>User promoted successfully</p>";
// }
// ?> -->
<div class="cards">

    <div class="card">
        <div class="card-text">
            <h2>All Courses</h2>
            <!-- <p class="card-no"><?php echo $no_of_all_members ?></p> -->
        </div>
        <div class="card-button">
            <!-- <a href="members.all.php"> View more...</a> -->
            <a href="course.view.php"> View more...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>All Tutors</h2>
            <!-- <p class="card-no"><?php echo $no_of_all_admins ?></p> -->
        </div>
        <div class="card-button">
            <!-- <a href="members.admins.php"> View more...</a> -->
            <a href="#"> View more...</a>
        </div>
    </div>
    <div class="card">
        <div class="card-text">
            <h2>All Students</h2>
            <!-- <p class="card-no"><?php echo $no_of_all_users?></p> -->
        </div>
        <div class="card-button">
            <!-- <a href="members.users.php"> View more...</a> -->
            <a href="#"> View more...</a>
        </div>
    </div>
    <!-- <div class="card">
        <div class="card-text">
            <h2>All inactive admins</h2>
            <p class="card-no"><?php echo $no_of_all_inactive_admins ?></p>
        </div>
        <div class="card-button">
            <a href="members.admins.inactive.php"> View more...</a>
        </div>
    </div> -->
    <!-- <div class="card">
        <div class="card-text">
            <h2>All inactive users</h2>
            <p class="card-no"><?php echo $no_of_all_inactive_users?></p>
        </div>
        <div class="card-button">
            <a href="members.users.inactive.php"> View more...</a>
        </div>
    </div> -->
    <div class="card">
        <div class="card-text">
            <h2>Messages</h2>
            <!-- <p class="card-no"><?php echo $no_of_all_posts ?></p> -->
        </div>
        <div class="card-button">
            <!-- <a href="post.view.php"> View more...</a> -->
            <a href="chat.php"> Open</a>
        </div>
    </div>
</div>

</body>
</html>


<!-- <?php
include_once('../footer.php');
?> -->
