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
        <div class="tabs-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget-tabs-int">
                            <div class="tab-hd">
                                <h2>Registro de fases y objetivos de las experiencias institucionales</h2>
                            </div>
                            <div class="widget-tabs-list">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Fases de la experiencia institucional</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Objetivos de la experiencia intitucional</a></li>
                                </ul>
                                <div class="tab-content tab-custom-st">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="accordion-area">
                                            <form id="form-fase">
                                                <div class="form-element-list">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                <h2>Seleccione la experiencia</h2>
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="IDFASE" name="faseID" hidden=""/>
                                                                <select  name="relacion_experiencia" class="form-control"  id="select_nombreexp" >

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <button class="btn  notika-btn-info btn-lg waves-effect float-right btn-sm" type="button" name="Consultar" style="background: #9945b0; color: white" onclick="GetID()">Consultar registro </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="accordion-wn-wp">
                                                            <div class="accordion-hd">
                                                                <h2>Registro de las fase de la experiencia institucional </h2>
                                                                <p>Despliegue cada uno de los formularios, haciendo click sobre cada una de las fases.</p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="accordion-stn">
                                                                        <div class="panel-group" data-collapse-color="nk-purple" id="accordionGreen" role="tablist" aria-multiselectable="true">
                                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                                <div class="panel-heading" role="tab">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-one" aria-expanded="true">
                                                                                            Formulario registro - Fase 1
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="accordionGreen-one" class="collapse in " role="tabpanel">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>1. Nombre de la fase o actividad</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="nombre_f1" name="nombre_fase1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>2. Acciones</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="acciones_f1" name='acciones_fase1'  class="form-control" ></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>3. Resultados esperados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulE_f1" name='resultados_esperadosf1' class="form-control" ></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>4. Indicador de cumplimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="indicador_f1" name='indicador_fase1' class="form-control" ></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>5. Resultado obtenido</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulO_f1" name='resultados_obtenidosf1' class="form-control" ></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>6. Tiempo empleado</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="tiempo_f1" name="tiempo_fase1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>7. Recursos empleados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="recurso_f1" name="recursos_empleadosf1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>8. Responsables de las mismas</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="responsable_f1" name="responsable_fase1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                </div>
                                                                                                <div class="row">

                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>9. Método de seguimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="metodo_f1" name="metodo_fase1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>10. Instrumentos de verificación</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="instrumento_f1" name="instrumento_fase1" class="form-control" >
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                                <div class="panel-heading" role="tab">
                                                                                    <h4 class="panel-title">
                                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-two" aria-expanded="false">
                                                                                            Formulario registro - Fase 2
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="accordionGreen-two" class="collapse" role="tabpanel">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>1. Nombre de la fase o actividad</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="nombre_f2" name="nombre_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>2. Acciones</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="acciones_f2" name='aciones_fase2'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>3. Resultados esperados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulE_f2" name='resultados_fase2'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>4. Indicador de cumplimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="indicador_f2" name='indicador_fase2'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>5. Resultado obtenido</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulO_f2" name='resultado_obtenidof2'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>6. Tiempo empleado</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="tiempo_f2" name="tiempo_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>7. Recursos empleados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="recurso_f2" name="recursos_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>8. Responsables de las mismas</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="responsable_f2" name="responsable_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                </div>
                                                                                                <div class="row">

                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>9. Método de seguimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="metodo_f2" name="metodo_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>10. Instrumentos de verificación</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="instrumento_f2" name="instrumentos_fase2" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                                <div class="panel-heading" role="tab">
                                                                                    <h4 class="panel-title">
                                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-three" aria-expanded="false">
                                                                                            Formulario registro - Fase 3
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="accordionGreen-three" class="collapse" role="tabpanel">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>1. Nombre de la fase o actividad</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="nombre_f3" name="nombre_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>2. Acciones</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="acciones_f3" name='acciones_fase3'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>3. Resultados esperados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulE_f3" name='resultados_fase3'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>4. Indicador de cumplimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="indicador_f3" name='indicador_fase3'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>5. Resultado obtenido</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulO_f3" name='resultados_obtenidosf3'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>6. Tiempo empleado</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="tiempo_f3" name="tiempo_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>7. Recursos empleados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="recurso_f3" name="recursos_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>8. Responsables de las mismas</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="responsable_f3" name="responsable_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                </div>
                                                                                                <div class="row">

                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>9. Método de seguimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="metodo_f3" name="metodo_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>10. Instrumentos de verificación</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="instrumento_f3" name="instrumentos_fase3" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                                <div class="panel-heading" role="tab">
                                                                                    <h4 class="panel-title">
                                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-four" aria-expanded="false">
                                                                                            Formulario registro - Fase 4
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="accordionGreen-four" class="collapse" role="tabpanel">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>1. Nombre de la fase o actividad</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="nombre_f4" name="nombre_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>2. Acciones</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="acciones_f4" name='acciones_fase4'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>3. Resultados esperados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulE_f4" name='resultados_fase4'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>4. Indicador de cumplimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="indicador_f4" name='indicador_fase4'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>5. Resultado obtenido</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulO_f4" name='resultado_obtenidof4'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>6. Tiempo empleado</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="tiempo_f4" name="tiempo_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>7. Recursos empleados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="recurso_f4" name="recursos_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>8. Responsables de las mismas</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="responsable_f4" name="responsable_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                </div>
                                                                                                <div class="row">

                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>9. Método de seguimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="metodo_f4" name="metodo_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>10. Instrumentos de verificación</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="instrumento_f4" name="instrumentos_fase4" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel panel-collapse notika-accrodion-cus">
                                                                                <div class="panel-heading" role="tab">
                                                                                    <h4 class="panel-title">
                                                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGreen" href="#accordionGreen-five" aria-expanded="false">
                                                                                            Formulario registro - Fase 5
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="accordionGreen-five" class="collapse" role="tabpanel">
                                                                                    <div class="panel-body">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>1. Nombre de la fase o actividad</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="nombre_f5" name="nombre_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>2. Acciones</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="acciones_f5" name='acciones_fase5'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>3. Resultados esperados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulE_f5" name='resultados_fase5'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>4. Indicador de cumplimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="indicador_f5" name='indicador_fase5'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>5. Resultado obtenido</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <textarea type="text" id="resulO_f5" name='resultados_obtenidosf5'  class="form-control"></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>                                        
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>6. Tiempo empleado</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="tiempo_f5" name="tiempo_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>7. Recursos empleados</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="recurso_f5" name="recursos_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>8. Responsables de las mismas</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="responsable_f5" name="responsable_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>   
                                                                                                </div>
                                                                                                <div class="row">

                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>9. Método de seguimiento</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="metodo_f5" name="metodo_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                                                            <h2>10. Instrumentos de verificación</h2>
                                                                                                        </div>
                                                                                                        <div class="form-group ic-cmp-int">
                                                                                                            <div class="form-ic-cmp">
                                                                                                                <i class="notika-icon"></i>
                                                                                                            </div>
                                                                                                            <div class="nk-int-st">
                                                                                                                <input type="text" id="instrumento_f5" name="instrumentos_fase5" class="form-control">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button class="btn  notika-btn-info btn-lg waves-effect float-right btn-sm" type="button" id="registrar_fase" onclick="Registrar_fase()" style="background: #9945b0; color: white">Registrar Fase</button> 
                                                                    <button class="btn  notika-btn-danger btn-lg waves-effect float-right btn-sm" type="button" id="actualizar_fase" onclick="Actualizar_fase()" style="background: #FFC107; color: white">Actualizar Registro</button> 
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- Accordion area End--> 
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="tab-ctn">
                                            <!-- INICIO DEL FORMULARIO-->
                                            <?php require_once '../layouts/form_objetivos.php'; ?>
                                            <!-- FIN DEL FORMULARIO-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--===FOOTER DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/footer.php'); ?>
        <!--===SCRIPT DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/scripts.php'); ?>
    </body>
    </html>
    <script src="../ajax/fase.js"></script>
    <script src="../ajax/objetivo.js"></script>
    <script src="../ajax/universitaria.js"></script>
    <script type="text/javascript">

                                                                        $('#select_nombreexp').focus();
                                                                        SelectExperiencia();
    </script>
    <script type="text/javascript">
        Swal.fire({
            title: '¿Qué deseas hacer?',
            input: 'select',
            inputOptions: {
                '1': 'Agregar un nuevo registro',
                '2': 'Actualizar fase de experiencia'
            },
            inputPlaceholder: '--',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: "#9945b0",
            inputValidator: function (value) {
                return new Promise(function (resolve, reject) {
                    if (value !== '') {
                        resolve();
                    } else {
                        resolve('Necesitas escoger una opcion');
                    }
                });
            }
        }).then(function (result) {
            if (result.value == '1') {
                $("#actualizar_fase").hide();
            } else {
                $("#registrar_fase").hide();
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            
            $('#btn_consultarReg').click(function(){
               $('#selectexp_objetivo').attr("style", "pointer-events: none;");
            });
            
            
            $('#registrar_objetivo').hide();
            $('#actualizar_objetivo').hide();

            $('#inlineRadio2').click(function () {
                $('#actualizar_objetivo').show();
                $('#registrar_objetivo').hide();
            });

            $('#inlineRadio1').click(function () {
                $('#registrar_objetivo').show();
                $('#actualizar_objetivo').hide();
            });
        });
    </script>

    <?php
} else {
    header("location:../");
}
?>