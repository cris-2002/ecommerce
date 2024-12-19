<?php
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_category();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

if (isset($_GET['status'])) {
    $cataId = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $pdt_info = $obj->display_product_byCata($cataId);
        
        $pdt_datas = array();
        while($pdt_ftecth = mysqli_fetch_assoc($pdt_info)){
            $pdt_datas[] = $pdt_ftecth;
        }
       
    }
}

if (isset($_GET['status'])) {
    $cataId = $_GET['id'];
    if ($_GET['status'] == 'catView') {
        $ctg_info = $obj->ctg_by_id($cataId);
        
        
       
    }
}



?>


<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
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
        include_once("includes/header_middle.php");
        ?>

        <?php
        include_once("includes/header_bottom.php");
        ?>

    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">



            <!--Navigation section-->
            <div class="container">
                <nav class="biolife-nav">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>

                        <li class="nav-item"><span class="current-page">

                        <?php
                   echo $ctg_info['ctg_name'];
                    ?>
                            </span></li>
                    </ul>
                </nav>
            </div>


            <!-- Product -->
            <div class="container">

                <div class="product-category grid-style">

                    <div class="row">
                        <ul class="products-list">

                            <?php
                            foreach ($pdt_datas as $pdt_data) {
                            ?>

<!--                                 <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        
                                        <div class="info">
                                            <b class="categories"> <?php echo $pdt_data['ctg_name'] ?> </b>
                                            <h4 class="product-title"><a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>" class="pr-name"><?php echo $pdt_data['pdt_name'] ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">Php. </span><?php echo $pdt_data['pdt_price'] ?></span></ins>

                                            </div>
                                        </div>
                                    </div>
                                </li> -->


                                
                                <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default"  style="background: #D3A121!important">
                                        
                                        <div class="info">
                                        <b class="categories"> <?php echo $pdt_data['ctg_name'] ?> </b>
                                            
                                            <h4 class="product-title"><a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>" class="pr-name"><?php echo $pdt_data['pdt_name'] ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">Php. </span><?php echo $pdt_data['pdt_price'] ?></span></ins>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php } ?>


                        </ul>
                    </div>

                </div>





            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <?php
    include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    include_once("includes/mobile_footer.php");
    ?>

    <?php
    include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>