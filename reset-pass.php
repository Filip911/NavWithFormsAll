<?php 
    require "header.php";
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h1 class="col text-center">Reset Your Password</h1>
                <p class="col text-center">An e-mail will be sent to you,to reset your password.</p>
                <form action="includes/reset-request.inc.php" method="post">
                    <input class="form-control"  type="text" name="eemail" placeholder="Enter your e-mail address..." style="width:360px;">
                    <br>
                    <div class="col text-center">
                    <button type="submit" class="btn btn-info" name="reset-request-submit">Receive new password</button>
                    </div>
                </form>
                <br>
                <div class="col text-center">
                <?php 
                    if (isset($_GET['success'])) {
                        if ($_GET['success'] == 'mailsent') {
                            echo '<p style="color:#3bce25;">Check your e-mail!</p>';
                        } 
                    }
                ?>
                <?php 
                if (isset($_GET['error'])) {
                if ($_GET['error'] == 'invalidemail') {
                echo '<p style="color:red;">Please input valid e-mail address!</p>';
                }
                if ($_GET['error'] == 'nomailfound') {
                echo '<p style="color:red;">No e-mail address found!</p>';       
                
            }
        }
                ?>             
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</main>
 <?php 
    require "footer.php";
 ?> 