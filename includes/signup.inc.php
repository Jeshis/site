<?php
require_once '../database/dbconnect.php';

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $c_password=$_POST['c-password'];
    $username=$_POST['username'];
    
    echo $firstname;

    if(emptyInputs($firstname, $lastname, $username, $email, $password, $c_password)==true){
        header("Location:../signup.php?error=emptyInputs");
        exit();
    }
    if(invalidUsername($username)==true){
        header("Location:../signup.php?error=invalidUsername");
    exit();
    }
    if(invalidEmail($email)==true){
        header("Location:../signup.php?error=invalidEmail");
    exit();
    }

    if(passwordLevel($password)==true){
        header("Location:../signup.php?error=passwordLevel");
    exit();
    }
    
    if(passwordMatch($password, $c_password)==true){
        header("Location:../signup.php?error=passwordMatch");
    exit();
    }
    if(userTaken($conn, $username, $email)==true){
        header("Location:../signup.php?error=userTaken");
        exit();
    }
    createUser($conn, $firstname, $middlename, $lastname, $email, $username, $password, $salt);
}
else{
    header("Location:../signup.php");
    exit();
}
function emptyInputs($firstname, $lastname, $username, $email, $password, $c_password){
    $result="";
    if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($c_password)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidUsername($username){
    $result="";
    if(!preg_match("/^[0-9a-zA-Z]+$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result="";
    if(!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,5})$/", $email)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidEmail2($email){
    $result="";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function passwordLevel($password){
    $result="";
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/", $password)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function passwordMatch($password, $c_password){
    $result="";
    if($password!==$c_password){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function userTaken($conn, $username, $email){
    $result="";
    $sql="select * from users where username=? or email=?";
    $stmt=$conn->prepare($sql);
    if(!$stmt){
        header("location:../signup.php?error=queryError");
        exit();
    }

    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();
    if($row){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
    $stmt->close();
}


function createUser($conn, $firstname, $middlename, $lastname, $email, $username, $password, $salt){
    $sql="insert into users(firstname,middlename,lastname, email, username, user_password, salt)
    values (?, ?, ?, ?, ?, ?, ?)";
    $stmt=$conn->prepare($sql);
    if(!$stmt){
        header("location:../signup.php?error=queryError2");
        exit();
    }
    // password hashing with salting
    $salt = bin2hex(random_bytes(32));
    $hashed_password = hash('sha256', $password . $salt);
    $stmt->bind_param("sssssss",$firstname, $middlename, $lastname, $email, $username, $hashed_password, $salt);
    $stmt->execute();
    $stmt->close();
    header("Location:../login.php?signup=success");
    exit();

}
