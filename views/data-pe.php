<?php
session_start();
if (isset($_SESSION["sesion_beies"])) {
?>
    <!-- === CABEZERA DEL HOME===-->
    <?php require_once('../layouts/head.php'); ?>
    <body>
        <!--==MENU PRINCIPAL MOBILE ====-->    
        <?php require_once('../layouts/info_perfil.php');?>

        <!--==MENU PRINCIPAL MOBILE ====-->    
        <?php require_once('../layouts/menu_mobile.php');?>

        <!--== MENU PRINCIPAL DESKTOP===-->
        <?php require_once('../layouts/menu_principal.php');?>
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
                                    <h2>Gráfica: Total población externa por vinculo con la experiencia institucional</h2>
                                </div>
                            </div>
                            <div id="GraficaTotal"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Fomento económico</h2>
                                </div>
                            </div>
                            <div id="GraficaFomento"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Fomento económico</h2>
                                </div>
                            </div>
                            <div id="GraficaTipologia" style="width:100%;"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                            <div class="curved-inner-pro">
                                <div class="curved-ctn">
                                    <h2>Gráfica: Total Etnias participante</h2>
                                </div>
                            </div>
                            <div id="GraficaEtnia" style="width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sale Statistic area-->
        <!--===FOOTER DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/footer.php'); ?>
        <!--===SCRIPT DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/scripts.php'); ?>
        <?php require_once '../graficas/poblacionE/GraficaFomentoEconomico.php';?>
        <?php require_once '../graficas/poblacionE/GraficaPE.php';?>
        <?php require_once '../graficas/poblacionE/GraficaTipologia.php';?>
        <?php require_once '../graficas/poblacionE/GraficaEtnia.php';?>
       
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>