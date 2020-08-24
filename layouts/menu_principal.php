<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#inicio"><i class="notika-icon notika-house"></i>Inicio</a>
                    </li>
                    <li><a data-toggle="tab" href="#experiencia"><i class="notika-icon notika-form"></i>Registro de Experiencia</a>
                    </li>
                    <li><a data-toggle="tab" href="#gestion"><i class="notika-icon notika-app"></i>Gestion</a>
                    </li>
                    <li><a data-toggle="tab" href="#graficas"><i class="notika-icon notika-bar-chart"></i>Gráficas</a>
                        <?php if($_SESSION['sesion_beies']["rol"] == 'Administrador'){
                            echo '<li><a data-toggle="tab" href="#reportes"><i class="notika-icon notika-print"></i>Reportes</a>
                            </li>
                            
                            <li><a data-toggle="tab" href="#config"><i class="notika-icon notika-menus"></i>Configuraciones</a></li>';
                        }?> 
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="inicio" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="javascript:void(0)" onclick="location.href = 'inicio'">Escritorio</a></li>
                            </ul>
                        </div>
                        <div id="experiencia" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">                         
                                <li><a href="javascript:void(0)" onclick="location.href = 'formulario'">Formulario principal</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'fases'">Fases & Objetivos</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'universitario'">Población universitaria</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'externa'">Población externa</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'organizaciones'">Organizaciones externas</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'anexos'">Anexos</a></li>
                            </ul>
                        </div>
                        
                        <!--SUBTITULO DE GESTION-->
                        <div id="gestion" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="javascript:void(0)" onclick="location.href = 'g-experiencia'">Experiencias</a>
                                <li><a href="javascript:void(0)" onclick="location.href = 'g-universitaria'">Población Univeristaria</a></li>
                                <li><a href="javascript:void(0)" onclick="location.href = 'g-externa'">Población Externa</a></li>
                                </ul>
                            </div>
                            <div id="graficas" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="javascript:void(0)" onclick="location.href = 'data-exp'">Experiencias</a></li>
                                    <li><a href="javascript:void(0)" onclick="location.href = 'data-u'">Población universitaria</a></li>
                                    <li><a href="javascript:void(0)" onclick="location.href = 'data-pe'">Población externa</a></li>
                                    <li><a href="javascript:void(0)" onclick="location.href = 'data-oe'">Organizaciones externa</a></li>
                                </ul>
                            </div>
                            <div id="reportes" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="javascript:void(0)" onclick="location.href = 'reportes'">Experiencia</a></li>
                                    <li><a href="javascript:void(0)" onclick="location.href = 'reportesFase'">Fases & Objetivos</a></li>
                                </ul>
                            </div>
                            <div id="config" class="tab-pane notika-tab-menu-bg animated flipInX">
                                <ul class="notika-main-menu-dropdown">
                                    <li><a href="javascript:void(0)" onclick="location.href = 'usuario'">Usuario</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Main Menu area End-->