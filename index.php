<!--
    
-- Created by KP, 2019.
-- Deléitate Jennifer Parra - home.

-->

<?php require 'component/head.php'; HEAD_WEBSITE('Deléitate Jennifer Parra') ?>

    <!-- header -->
    <?php require 'component/header.php';?>
    
    <!-- slider -->
    <?php require 'component/slider_heading.php' ?>

    <!-- container products -->
    <section class="wrapper_fluid container_">

        <!-- wrapper -->
        <article class="wrapper">

            <!-- title -->
            <div class="title title__" style="width: 320px;">
                <h1 class="cursive">Conoce nuestros</h1>
                <h1 class="default">PRODUCTOS</h1>
            </div>

            <!-- content products -->
            <div class="content_product">

                <!-- container owl carousel -->
                <div class="owl-carousel owl-theme owl_slider_products">

                    <!-- item -->
                    <div class="item">

                        <!-- card product -->
                        <div class="card_product new_product">

                            <!-- card product image -->
                            <div class="card_product_image">
                                <img src="img/products/img.jpg" alt="">
                            </div>

                            <!-- card product body -->
                            <div class="card_product_body">
                                <!-- product name -->
                                <p class="card_product_name">Postre de fresa</p>
                                <!-- product price -->
                                <p class="card_product_price">$5.000</p>
                            </div>

                            <!-- effect hover -->
                            <div class="effect_hover">
                                <a href="#!" class="btn_">Ver Producto</a>
                            </div>

                        </div> <!-- /card product -->
                        
                    </div> <!-- /item -->

                </div> <!-- /container owl carousel -->

                <div class="wrapper_fluid text-center pt-5 mt-2">
                    <!-- button  -->
                    <a href="products.php" class="btn_">Conocer Productos</a>
                </div>

            </div> <!-- /content products -->
            
        </article> <!-- /wrapper -->

    </section> <!-- /container products -->


    <!-- container about me -->
    <section class="wrapper_fluid container_ container_aboutme">

        <!-- wrapper -->
        <article class="wrapper">

            <!-- title -->
            <div class="title title__" style="width: 285px;">
                <h1 class="cursive">Un poco sobre</h1>
                <h1 class="default">QUIÉNES SOMOS</h1>
            </div>
            
            <!-- content about me -->
            <div class="content_aboutme">

                <!-- row -->
                <div class="row"> 

                    <!-- col -->
                    <div class="col-md-6">

                        <!-- info about me -->
                       <div class="info_aboutme">

                            <!-- title -->
                            <h5>Nosotros:</h5>
                            <!-- text -->
                            <p class="text_ mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur facere numquam provident accusantium excepturi est nam explicabo quos nihil. Dicta facere porro aliquam rerum fugit eos iure placeat ratione inventore!</p>
                            <!-- button -->
                            <a href="#!" class="btn_">Conocer Más</a>

                       </div> <!-- /info about me -->

                    </div> <!-- /col -->

                    <!-- col -->
                    <div class="col-md-6">

                        <!-- imagen about me -->
                        <div class="imagen_aboutme">
                            <img src="img/aboutme/img.png" alt="">
                        </div>

                    </div> <!-- /col -->

                </div> <!-- /row -->

            </div> <!-- /content about me -->

        </article> <!-- /wrapper -->

    </section> <!-- /container about me -->

    <!-- container gallery -->
    <section class="wrapper_fluid container_ container_gallery">

        <!-- wrapper -->
        <article class="wrapper">

            <!-- title -->
            <div class="title title__" style="width: 320px;">
                <h1 class="cursive">Mira algunas</h1>
                <h1 class="default">Imágenes</h1>
            </div>

            <!-- content gallery -->
            <div class="content_gallery"> <!-- 870 -->

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-01.jpg">

                        </div>

                    </div>

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-02.jpg">

                        </div>

                    </div>

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-03.jpg">

                        </div>

                    </div>

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-04.jpg">

                        </div>

                    </div>

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-05.jpg">

                        </div>

                    </div>

                    <!-- col -->
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <!-- image -->
                        <div class="image">
                            <img src="img/gallery/img-06.jpg">

                        </div>

                    </div>

                </div> <!-- / row -->

            </div> <!-- /content gallery -->

        </article> <!-- /wrapper -->

    </section> <!-- /container gallery -->


    <!-- footer -->
    <?php require 'component/footer.php'; ?>


<!-- scripts -->
<?php require 'component/scripts.php'; ?>