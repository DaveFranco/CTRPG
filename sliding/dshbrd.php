<?php
    require "header.php";
?>
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="img/ppic.png" alt="">         
                        <p>
                          <?php
                            echo strval($_SESSION['userUid']);
                          ?>
                        </p>
                    </center>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Files</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-image"></i><span>Username</span></a>
                            <a href="#"><i class="fas fa-address-card"  ></i><span>Email</span></a>
                        </div>
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                            <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i><span>Grants</span></a>
                        </div>
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                            <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                        </div>
                    </li>
                    <!--
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                    -->
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
                <div class="card">
                    
                </div>
                <!--
                <div class="card">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="card">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                -->
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->

        <!--this is where the script is supposed to go-->

    </body>
</html>