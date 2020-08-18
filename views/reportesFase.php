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
        <!-- INICIO DEL FORMULARIO-->
        <div class="form-element-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="../files/reportefases" method="POST">
                            <div class="form-element-list">
                                <div class="cmp-tb-hd">
                                    <h2>Generación de reporte: Fases de Experiencia</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>Seleccione la experiencia</h2>
                                        </div>
                                        <div class="form-group">
                                            <select  name="relacion_experiencia" class="form-control" id="select_nombreexp" >
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="descargar" formtarget="_blank" class="btn  notika-btn-info btn-lg waves-effect btn-sm" style="background: #9945b0; color: white">Descargar Reporte</button>
                            </div>            	
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- FINAL DEL FORMULARIO-->
        <!--===FOOTER DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/footer.php'); ?>
        <!--===SCRIPT DEL SISTEMA (JS)======-->
    <?php require_once('../layouts/scripts.php'); ?>
        <script src="../ajax/experiencia.js"></script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>