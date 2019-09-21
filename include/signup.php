<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    // Get all the html inputs
$name = mysqli_real_escape_string($connect, $_POST['txtFullName']);
$username = mysqli_real_escape_string($connect, $_POST['txtUser']);
$pass1 = mysqli_real_escape_string($connect, $_POST['txtPass']);
$pass2 = mysqli_real_escape_string($connect, $_POST['txtRePass']);
$email = mysqli_real_escape_string($connect, $_POST['txtEmail']);
$harshpass1 = MD5($pass1);
$harshpass2 = MD5($pass2);
#check if our imputs are empty
if (empty($name)) {
    header('Location: ../index.html?=name cannot be empty');
    exit();
} 
else if (empty($username)) {
    header('Location: ../index.html?=username cannot be empty');
    exit();
} 
else if (empty($pass1)) {
    header('Location: ../index.html?= password cannot be empty');
    exit();
}
else if(empty($pass2)){
header('Location: ../index.html?=passwordd cannot be empty');
    exit();
}
else if (empty($email)) {
    header('Location: ../index.html?=email cannot be empty');
    exit();
}
elseif ($pass1 != $pass2) {
    # code...
    header('Location: ../index.html?=password do not match');
    exit();
}
else {
    # code...
  $sql = "INSERT INTO register(fullname, useremail, username, pass, confirmpass) VALUES('$name', '$email', '$username','$harshpass1', '$harshpass2')";
    mysqli_query($connect, $sql);
    header('Location: ../homepage.php');
}
}else {
    
    # code...
    header('Location: ../index.html');
}
?>