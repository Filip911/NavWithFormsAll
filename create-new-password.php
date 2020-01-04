<?php 
    require "header.php";
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
            <?php            
                $selector = $_GET['selector'];
                $validator = $_GET['validator'];

                if (empty($selector) || empty($validator)) {
                    echo 'Could not validate your request';
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator)) {
                        ?>

                        <form action="includes/reset-password.inc.php" method="post">
                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                            <input type="password" name="pwd" placeholder="Enter a new password ...">
                            <input type="password" name="rpdpwd" placeholder="Repeat new password ...">
                            <button class="btn btn-success" type="submit" name="reset-password-submit">Reset password</button>
                        </form>

                        <?php
                    }
                }
            ?>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</main>
 <?php 
    require "footer.php";
 ?> 

