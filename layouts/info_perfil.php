<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="javascript:void(0)" onclick="location.href='inicio'"><img src="../images/logo-ucc.png" alt="" style="background: white;"/></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">   
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i> <?php  echo $_SESSION["sesion_beies"]["nombre"]." - ".$_SESSION["sesion_beies"]["rol"];?> </span></a>
                           <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                            <div class="hd-message-info">
                                <a href="javascript:void(0)" onclick="location.href='./../controllers/UsuarioController.php?opcion=CerrarSesion'">
                                    <div class="hd-message-sn">
                                        <div class="hd-mg-ctn">
                                            <h3>Salir</h3>
                                        </div>
                                    </div>
                                </a>                             
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End Header Top Area -->