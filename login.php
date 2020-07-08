<?php

if(isset($_POST['login-submit'])) {

    require_once("db_config.php");

    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $usermail = $_POST['usermail'];
    $password = $_POST['pwd'];

    if(empty($usermail) || empty($password)){

        header("location: ../page-home.php?error=emptyfields");
        exit();
        
    } else {

        $sql = "SELECT * FROM users WHERE uUsername=? OR uEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../page-home.php?error=sqlerror");
            exit();    

        } else {

            mysqli_stmt_bind_param($stmt, "ss", $usermail, $usermail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {

                $pwdCheck = password_verify($password, $row['uPwd']);
                if($pwdCheck == false) {

                    header("location: ../page-home.php?error=wrongpassword");
                    exit();

                } elseif($pwdCheck == true) {

                    session_start();
                    $_SESSION['userId'] = $row['uid'];
                    $_SESSION['userUsername'] = $row['uUsername'];

                    header("location: ../page-home.php?login=success");
                    exit();

                } else {

                    header("location: ../page-home.php?error=wrongpassword");
                    exit();
                }

            } else {

                header("location: ../page-home.php?error=nouser");
                exit();    
            }
        }
    }

} else {

    header("location: ../page-home.php");
    exit(); 
}