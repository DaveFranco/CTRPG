<?php
    require "header.php";
?>

<div class="text">
    Quiero un pene de goma   
    <section>
        <?php
            if(isset($_SESSION['userId'])){
                echo '<p class="login-status">You are logged in</p>';
            }
            else{
                echo '<p class="login-status">You are logged out</p>';
            }
        ?>
    </section>

</div>



<?php
    require "footer.php";
?>