<?php
session_start();
// if(!isset($_SESSION["is_login"])){
//     header("Location: ../view/loginadmin.php");
//}
?>
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left" >
                <p style="margin-top: 18px;"> Xin Chào Thế Ngô !</p>
            </div>

            <div class="user-area dropdown float-right">
                
                 <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle" src="images/TN.png" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                <a class="nav-link" href="#"><i class="fa fa-user"></i><?php echo $_SESSION["email"]; ?></a>

                <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                <a class="nav-link" href="../view/logoutadmin.php"><i class="fa fa-power-off"></i>Logout</a>
                </div>
                
                
            </div>
        </div>
    </div>
</header>