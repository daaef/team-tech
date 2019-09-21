<?php
session_start();

include 'connect.php';

if (isset($_POST['submit'])) {
    # code...
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
   

#check if our imputs are empty
if (empty($username)) {
    header('Location: ../index.html?=username cannot be empty');
    exit();
} 
else if (empty($password)) {
    header('Location: ../index.html?=password cannot be empty');
    exit();
}  else {
    {
        $sql = "SELECT * FROM register WHERE username = '$username'";
        $result = mysqli_query($connect, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header('Location: ../index.php?=UserNotExist');
            exit();
        }else {
            if ($row = mysqli_fetch_assoc($result)) {
                # deharh password
                $deharsh = password_verify($password, $row['pass']);
                if ($deharsh == false) {
                     header('Location: ../index.html?=error');
                    exit();
                }else if($deharsh == true){
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userName'] = $row['fullname'];
                    $_SESSION['userUserName'] = $row['username'];
                    $_SESSION['passWord'] = $row['pass'];
                    $_SESSION['userEmail'] = $row['useremail'];
                    header('Location: ../homepage.php');
                    exit();
                }
                
            }
        }
    }
}



}else {
    # code...
    header('Location: ../index.html');
}