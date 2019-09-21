<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    // Get all the html inputs
$name = mysqli_real_escape_string($connect, $_POST['txtFullName']);
$username = mysqli_real_escape_string($connect, $_POST['txtUser']);
$pass1 = mysqli_real_escape_string($connect, $_POST['txtPass']);
$pass2 = mysqli_real_escape_string($connect, $_POST['txtRePass']);
$email = mysqli_real_escape_string($connect, $_POST['txtEmail']);
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

    $harshpass1 = password_hash($pass1, PASSWORD_DEFAULT);
    $harshpass2 = password_hash($pass2, PASSWORD_DEFAULT);
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