<?php session_start();
if (isset($_SESSION["sesion_beies"])) {
?>
<html class="no-js" lang="">
<head>
    <!-- === CABECERA DEL SISTEMA===-->
    <?php require_once('../layouts/head.php'); ?>
</head>
<body>
    <!--==MENU INFO_PERFIL ====-->    
    <?php require_once('../layouts/info_perfil.php');?>  
    <!--==MENU PRINCIPAL MOBILE ====-->    
    <?php require_once('../layouts/menu_mobile.php');?>
    <!--== MENU PRINCIPAL DESKTOP===-->
    <?php require_once('../layouts/menu_principal.php');?>
    <!--==CONTENIDO PRINCIPAL BODY====-->
    <?php require_once('../layouts/contenido_principal.php'); ?>
    <!--===FOOTER DEL SISTEMA ======-->
    <?php require_once('../layouts/footer.php'); ?>
    <!--===SCRIPT DEL SISTEMA (JS)======-->
    <?php require_once('../layouts/scripts.php'); ?>
    <?php require_once('../graficas/experiencia/GraficaTotalExperiencias.php');?>
    <?php require_once('../graficas/experiencia/GraficaNivelTerritorial.php');?>
    <?php require_once('../graficas/experiencia/GraficaAmbito.php');?>
    <script src="../ajax/experiencia.js"></script>
</body>
</html>

<?php
} else {
    header("location:../");
}
?>