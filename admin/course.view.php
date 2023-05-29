<?php
include 'header.php';
// include '../database/dbconnection.php';
// require '../includes/login.check.admin.php';
// require '../includes/login.admin.php';

// $sql= 'select * from posts';
// $stmt=$conn->prepare($sql);
// if(!$stmt){
//     header("location:index.php?error=queryError");
//     exit();
// }
// $stmt->execute();
// $result=$stmt->get_result();
// $stmt->close();
?>



<main>
<section>
    <div class="training-section">
        <h1 >Available Courses</h1>
            <div class="container">
                <div class="training-items">
                    <img src="../image/python1.jpg"alt="image" />
                    <span class="course-price">$0</span>
                    <h2><a href="#">Python Programming language</a></h2>
                    <p>A popular programming language that was created
                        by Guido van Rossum, and released in 1991.
                        
                    </p>
                    <h4><a style="background-color:green;color:white;" href="#"> Start Reading...</a></h4>
                </div>

                <div class="training-items">
                    <img src="../image/pen1.jpeg"alt="image" />
                    <span class="course-price">$0</span>
                    <h2><a href="#">Penetration Testing</a></h2>
                    <p>Penetration testing is a type of security testing
                    that is used to test the insecurity of an application.
                    It is conducted to find the security risk.........
                    </p>
                    
                    <h4><a style="background-color:green;color:white;" href="#"> Start Reading...</a></h4>
                </div>

                <div class="training-items">
                    <img src="../image/crypto1.jpg"alt="image" />
                    <span class="course-price">$0</span>
                    <h2><a href="#">Cryptography</a></h2>
                    <p>Cryptography is used to keep messages and data secure
                     from being accessible to anyone other than the sender and
                                 the intended recipient.
                        
                    </p>

                    <h4><a style="background-color:green;color:white;" href="#"> Start Reading...</a></h4>
                </div>

                <div class="training-items">
                    <img src="../image/hacking1.jpg"alt="image" />
                    <span class="course-price">$0</span>
                    <h3><a href="#">Introduction to Ethical Hacking</a></h3>
                    <p>Ethical Hacking as a practice includes assessing and finding
                        the cracks in a digital system that a malicious hacker can
                        take advantage of.These cracks assist the .........
                      
                    </p>
                    <h4><a style="background-color:green;color:white;" href="#"> Start Reading...</a></h4>
                </div>

                <div class="training-items">
                    <img src="../image/ai1.jpeg"alt="image" />
                    <span class="course-price">$0</span>
                    <h3><a href="#">Artificial intelligence</a></h3>
                    <p>Artificial intelligence (AI) refers to the simulation of human
                     intelligence in machines that are programmed to think like humans 
                     and mimic their actions. The term may also be applied.......
                    </p>
                    <h4><a style="background-color:green;color:white;" href="ai.php"> Start Reading...</a></h4>
                </div>
        </div>
    </div>


<?php
include_once('../footer.php');
?>
