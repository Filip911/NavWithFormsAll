  
<?php 
    if (isset($_POST['reset-request-submit'])) {
        
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "www.fecy.epizy.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

        $expires = date("U") + 1800; // 1 hour

        require 'db.inc.php';

        $userEmail = $_POST['eemail'];

        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) || empty($userEmail)) {  // Validation Input Email
            header("location: ../reset-pass.php?error=invalidemail".$username);
            exit();
        }        
   
        $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";   // Delete existing token
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql) ) {
            echo 'ERROR!';
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "SELECT * FROM users WHERE emailUsers =?";   // Search if user exist for next query below
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("location: ../reset-pass.php?error=sqlerror");
             exit();
         } elseif (mysqli_stmt_bind_param($stmt, "s", $userEmail)) {               
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $resultCheck = mysqli_stmt_num_rows($stmt);
             if($resultCheck > 0) {
        $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";  #Insert into second DB if user exist         
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql) ) {
             echo 'ERROR!';
             exit();
         } else {
             $hashedToken = password_hash($token, PASSWORD_DEFAULT);
             mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
             mysqli_stmt_execute($stmt);
         }
        }  
    }      

         $to = $userEmail;

         $subject = 'Reset your password ,regards!';

         $message = '<p>We recieve a password request</p>';
         $message .= '<p>Here is your password reset link: </br>';
         $message .= '<a href="' . $url . '">' . $url . '</a></p>';

         $headers = "From: Fecy <pilifmaximus@gmail.com>\r\n";
         $headers .= "Reply-To: pilifmaximus@gmail.com\r\n";
         $headers .= "Content-type: text/html\r\n";


         $sql = "SELECT * FROM users WHERE emailUsers =?";  
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("location: ../reset-pass.php?error=sqlerror");
             exit();

         } elseif (mysqli_stmt_bind_param($stmt, "s", $userEmail)) {               
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $resultCheck = mysqli_stmt_num_rows($stmt);
             if($resultCheck > 0) {      
                 
                mail($to, $subject, $message, $header);
                header("location: ../reset-pass.php?success=mailsent"); 
                     exit();                       
             } else {
                 header("location: ../reset-pass.php?error=nomailfound"); 
                     exit();                  
             }             
         }
    }