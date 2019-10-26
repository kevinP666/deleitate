<?php

function HEADER_WEBSITE($COUNTER_SHOPPING = "4") {
?>
<header class="wrapper_fluid" id="header_">

        <!-- wrapper -->
        <article class="wrapper">

            <!-- logo -->
            <a href="index.php" class="logo_">
                <img src="img/logo-deleitate.png" alt="">
            </a>

            <!-- icon menu responsive -->
            <a href="#!" class="icon_menu" id="icon_menu"><i class="fa fa-bars"></i></a>

            <!-- navbar -->
            <nav class="nav_navbar">
                <ul>
                    <!-- option -->
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>

                    <!-- option -->
                    <li>
                        <a href="products.php">
                            <span>Productos</span>
                            <i class="fa fa-angle-down arrow"></i>
                        </a>
                        <div class="sub_menu">
                            <a href="#!">Postres</a>
                            <a href="#!">Cheesacake</a>
                        </div>
                    </li>
                    
                    <!-- option -->
                    <li>
                        <a href="#!">Nosotros</a>
                    </li>
                    
                    <!-- linea right -->
                    <li class="line_right">
                        <a href="#!">Contacto</a>
                    </li>
                    
                    <!-- option (icon) -->
                    <li class="icon_user">
                        <a href="#!"><i class="fa fa-user"></i></a>
                    </li>

                    <!-- option (icon) -->
                    <li class="icon_shopping">
                        <a href="#!">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="counter_shopping">
                                <span><?= $COUNTER_SHOPPING; ?></span> <!-- COUNTER_SHOPPING -->
                            </div>
                        </a>
                    </li>

                </ul>
            </nav> <!-- /navbar -->

        </article>  <!-- /wrapper -->

    </header> <!-- /header -->

    <div class="bg_" id="bg_"></div>

    <!-- navbar responsive -->
    <nav class="nav_navbar_responsive" id="nav_navbar_responsive">
        <div class="heading">
            <h1 class="letter_cursive">D</h1>
            <!-- icon close navbar -->
            <a href="#!" class="icon_close" id="icon_close">
                <i class="fa fa-times"></i>
            </a>
        </div>
        <ul>
            <!-- option -->
            <li>
                <a class="option_" href="index.php">Inicio</a>
            </li>

            <!-- option -->
            <li class="option__">
                <div class="option_t">
                    <a class="option_" href="products.php">Productos</a>
                    <div class="arrow">
                        <i class="fa fa-angle-down arrow"></i>
                    </div>
                </div>
                <div class="sub_menu">
                    <a class="option_" href="#!">Postres</a>
                    <a class="option_" href="#!">Cheesacake</a>
                </div>
            </li>
                    
            <!-- option -->
            <li>
                <a class="option_" href="#!">Nosotros</a>
            </li>
                    
            <!-- linea right -->
            <li class="line_right">
                <a class="option_" href="#!">Contacto</a>
            </li>
                    
            <!-- option (icon) -->
            <li class="icon_user">
                <a class="option_" href="#!"><i class="fa fa-user"></i></a>
            </li>

            <!-- option (icon) -->
            <li class="icon_shopping">
                <a class="option_" href="#!">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="counter_shopping">
                        <span><?= $COUNTER_SHOPPING; ?></span> <!-- COUNTER_SHOPPING -->
                    </div>
                </a>
            </li>

        </ul>
    </nav> <!-- /navbar reponsive -->

<?php
}

HEADER_WEBSITE();

?>