<?php 
    if(isset($_POST['signup-submit'])) {
        require 'db.inc.php';

        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $pwd = $_POST['pwd'];
        $pwdrpt = $_POST['pwd_repeat'];
        if (empty($username) || empty($email) || empty($pwd) || empty($pwdrpt)) {
            header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
           
          }   
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("location: ../signup.php?error=invalidmail&uid");
            exit();
         }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("location: ../signup.php?error=invalidmail&uid=".$username);
            exit();
          } 
        elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("location: ../signup.php?error=invaliduid&mail=".$email);
            exit();
          }  
        elseif ($pwd !== $pwdrpt){
            header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
            exit();
            }  
        else {
                $sql = "SELECT * FROM users WHERE uidUsers=?";
                $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("location: ../signup.php?error=sqlerror");
                exit();
            }else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0){
                    header("location: ../signup.php?error=usertaken&mail=".$email);
                        exit();
                }
                else {
                    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, datee) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../signup.php?error=sqlerror");
                        exit();
                }
                else {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $date);
                    mysqli_stmt_execute($stmt);
                        header("location: ../signup.php?signup=success");
                        exit();
            }
           }             
        }  
      }
       mysqli_stmt_close($stmt);
       mysqli_close($conn);
    }
    else {
         header("location: ../signup.php");
         exit();
    }