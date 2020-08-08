<style>
<?php include 'style.css';?>
</style>

<?php
    //session_start();

    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Empty fields.</strong> Provide the necessary fields.
            </div> ';
        }
        else if($_GET['error'] == "wrongpassword"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Wrong password.</strong> Please try again.
            </div>';
        }
        else if($_GET['error'] == "sqlerror"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Server side error.</strong> Please try again later.
            </div>';
        }
        else if($_GET['error'] == "invalidmailuid"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Invalid email address.</strong> Please try again.
            </div>';
        }
        else if($_GET['error'] == "invaliduid"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Invalid username.</strong> Please try again.
            </div>';
        }
        else if($_GET['error'] == "passwordcheck"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Passwords don\'t match.</strong> Please try again.
            </div>';
        }
        else if($_GET['error'] == "usertaken"){
            echo '
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>That username has already been taken.</strong> Please try again.
            </div>';
        }
    }

?>