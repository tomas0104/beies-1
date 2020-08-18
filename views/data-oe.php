<?php
session_start();
if (isset($_SESSION["sesion_beies"])) {
    
    ?>
    <!-- === CABEZERA DEL HOME===-->
    <?php require_once('../layouts/head.php'); ?>
    <body>
        <!--==MENU PRINCIPAL MOBILE ====-->    
    <?php require_once('../layouts/info_perfil.php'); ?>

        <!--==MENU PRINCIPAL MOBILE ====-->    
    <?php require_once('../layouts/menu_mobile.php'); ?>

        <!--== MENU PRINCIPAL DESKTOP===-->
    <?php require_once('../layouts/menu_principal.php'); ?>
    <body>

        <!-- Breadcomb area End-->
        <!-- Start Sale Statistic area-->
        <div class="sale-statistic-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Sector público</h2>
                                </div>
                            </div>
                            <div id="GraficaSP"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Sector educativo</h2>
                                </div>
                            </div>
                            <div id="GraficaSE"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Organización de la economía social y solidaria</h2>
                                </div>
                            </div>
                            <div id="GraficaEC"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Organización de la sociedad civil</h2>
                                </div>
                            </div>
                            <div id="GraficaSC"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Organismos de Integración Redes</h2>
                                </div>
                            </div>
                            <div id="GraficaIR"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Participación Sector privado</h2>
                                </div>
                            </div>
                            <div id="GraficaPR"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sale Statistic area-->
        
        <?=
        require_once('../layouts/footer.php');
        require_once('../layouts/scripts.php');
        require_once '../graficas/organizaciones/GraficaSP.php';
        require_once '../graficas/organizaciones/GraficaSE.php';
        require_once '../graficas/organizaciones/GraficaEconomia.php';
        require_once '../graficas/organizaciones/GraficaSociedad.php';
        require_once '../graficas/organizaciones/GraficaIntegracion.php';
        require_once '../graficas/organizaciones/GraficaPrivado.php';
        ?>

    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>