<?php session_start();
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
                                <h2>Gráfica: Total Poblacion Universitaria x Sedes</h2>
                            </div>
                        </div>
                        <div id="myDiv"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Gráfica: Participación por Programa Ácademico</h2>
                            </div>
                        </div>
                        <div id="torta2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Gráfica: Participación por Facultad Acádemica</h2>
                            </div>
                        </div>
                        <div id="tortaFacultad"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Gráfica: Vinculo con la Experiencia Institucional</h2>
                            </div>
                        </div>
                        <div id="GráficaVinculoEXP"></div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30" style="background: aliceblue;">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Gráfica: Vinculo con la Universidad </h2>
                            </div>
                        </div>
                        <div id="GraficaVinculoUni"></div>
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
<?php require_once '../graficas/poblacionU/GraficaTotalPoblacion.php';?>
<?php require_once '../graficas/poblacionU/GraficaPrograma.php';?>
<?php require_once '../graficas/poblacionU/GraficaFacultad.php';?>
<?php require_once '../graficas/poblacionU/GraficaVinculoExp.php';?>
<?php require_once '../graficas/poblacionU/GraficaVinculoUniversidad.php';?>
</body>

</html>
<?php
} else {
    header("location:../");
}
?>