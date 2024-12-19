<?php

session_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_category();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

if (isset($_POST['user_login_btn'])){
    $logmsg = $obj->user_login($_POST);
}


if(isset($_SESSION['user_id'])){
    $userId = $_SESSION['user_id'];
    if($userId){
        header('location:userprofile.php');
    }
}


?>


<?php
include_once("includes/head.php");
?>

<!-- <body class="biolife-body"> -->
<body >
    <!-- Preloader -->

    <?php
    // include_once("includes/preloader.php");
    ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">

        <?php
        // include_once("includes/header_top.php");
        ?>

        <?php
        // include_once("includes/header_middle.php");
        ?>

        <?php
        // include_once("includes/header_bottom.php");
        ?>

    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">


            <div class="container">

                <div class="row" style="display: flex; justify-content: center; margin-top: 20px">
                    

                <div class="col-sm-6">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto" style="background: #0B0B0B!important;  padding: 30px;">


                        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between;">
                            
                            <img src="admin/uploads/logo2.jpg" alt="logo" style=" height: 60px; width: auto;">
                            <img src="admin/uploads/brew.jpg" alt="logo" style=" height: 60px; width: auto;">

                        </div>

                        <div class="d-flex justify-content-center m-b-20" style="display: flex; justify-content: center;">
                            
                            <img src="admin/uploads/brew.jpg" alt="logo" style=" height: auto;">

                        </div>

                        <h2 class="text-center">Log in</h2>

                        <h4 class="text-danger"> <?php 
                            if(isset($logmsg)){
                                echo $logmsg;
                            }
                        ?></h4>
                        <div class="row">


                            <!--Form Sign In-->
                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <div class="signin-container">
                                    <form action="" name="frm-login" method="post">
                                        <p class="form-row">
                                            <label for="email">Username</label>
                                            <input type="text" id="fid-name" name="user_email" class="txt-input" style="background: #D3A121; border-radius: 20px; color: white" >
                                        </p>
                                        <p class="form-row">
                                            <label for="user_password">Password:</label>
                                            <input type="password" name="user_password" class="txt-input" style="background: #D3A121; border-radius: 20px; color: white" >
                                        </p>

                                        <div class="row m-t-25 d-flex justify-content-end">
                                            <div class="col-sm-12 col-xs-12 forgot-phone text-right">
                                                <a style="color: white!important;" href="" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
                                            </div>
                                        </div>
                                        <div class="row m-t-30 " style="display: flex; justify-content: center; margin: 30px 0">
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <input type="submit" name="user_login_btn" class="btn btn-warning btn-md btn-block waves-effect text-center m-b-20 col-md-4" style="background: #B69212; border-radius: 20px" value="Log in">
                                            </div>
                                        </div>

                                        <p class="wrap-btn">New Member? <a href="user_register.php" class="btn btn-bold" style="background: transparent!important;">Sign Up</a></p>
                                    </form>
                                </div>
                            </div>
                                </div>
                            </div>

                        </div>

                </div>
            </div>

                    

        </div>
    </div>


    <!-- FOOTER -->

    <?php
    // include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    // include_once("includes/mobile_footer.php");
    ?>

    <?php
    // include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>