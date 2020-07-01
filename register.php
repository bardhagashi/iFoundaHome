<?php

require_once("db_config.php");

if(isset($_POST['signup-submit'])) {

    // Create connection
    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // Check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $subscribe = $_POST['subscribe'];

    if(empty($username) || empty($email) || empty($password)){

        header("location: ../page-home.php?error=emptyfields&username=".$username."&email=".$email);
        exit();
        
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        header("location: ../page-home.php?error=invalidusernameemail");
        exit();

    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("location: ../page-home.php?error=invalidemail&username=".$username);
        exit();

    } elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        header("location: ../page-home.php?error=invalidusername&email=".$email);
        exit();

    } else {

        $sql = "SELECT uUsername FROM users WHERE uUsername=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../page-home.php?error=sqlerror");
            exit();    

        } else {

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {

                header("location: ../page-home.php?error=usernametaken&email=".$email);
                exit();    

            } else {

                if($subscribe == 1) {

                    $sql = "INSERT INTO users (uUsername, uEmail, uPwd, uSub) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {

                        header("location: ../page-home.php?error=sqlerror");
                        exit();    

                    } else {

                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $hashedPwd, $subscribe);
                        mysqli_stmt_execute($stmt);
                        header("location: ../page-home.php?signup=success");
                        exit(); 
                    }

                } else {

                    $sql = "INSERT INTO users (uUsername, uEmail, uPwd) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {

                        header("location: ../page-home.php?error=sqlerror");
                        exit();    

                    } else {

                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        header("location: ../page-home.php?signup=success");
                        exit(); 
                    }
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {

    header("location: ../page-home.php");
    exit(); 
}