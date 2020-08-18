<?php
session_start();
if (isset($_SESSION["sesion_beies"])) {
    ?>
    <!-- === CABEZERA DEL HOME===-->
    <?php require_once('../layouts/head.php'); ?> 
    <!--==MENU PRINCIPAL MOBILE ====-->    
    <?php require_once('../layouts/info_perfil.php'); ?>

    <!--==MENU PRINCIPAL MOBILE ====-->    
    <?php require_once('../layouts/menu_mobile.php'); ?>

    <!--== MENU PRINCIPAL DESKTOP===-->
    <?php require_once('../layouts/menu_principal.php'); ?>

    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget-tabs-list">
                        <form id="form_principal">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Datos principales de la experiencia</a></li>
                                <li><a data-toggle="tab" href="#menu1">Responsabilidad social universitaria</a></li>
                                <li><a data-toggle="tab" href="#menu2">Valoracion territorial</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-ctn">                                                
                                        <div class="form-element-list">                 
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>1. Nombre de la experiencia institucional</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">                    
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control" focus name="nombre" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>2. Categoría de inscripción</h2>
                                                    </div>
                                                    <div class="bootstrap-select">
                                                        <select class="selectpicker" name="categoria[]" multiple>
                                                            <option value="Gestion">Gestión</option>
                                                            <option value="Proyeccion y Extension">Proyección y Extensión</option>
                                                            <option value="Investigacion">Investigación</option>
                                                            <option value="Docencia">Docencia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>3. Sede que lleva a cabo la práctica de la experiencia<br> institucional</h2>
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg">
                                                        <select class="selectpicker" name="sede" data-live-search="true">
                                                            <option></option>
                                                            <option value="Sede Apartado">Sede Apartadó</option>
                                                            <option value="Sede Arauca">Sede Arauca</option>
                                                            <option value="Sede Barrancabermeja">Sede Barrancabermeja</option>
                                                            <option value="Sede Bogota">Sede Bogotá</option>
                                                            <option value="Sede Bucaramanga">Sede Bucaramanga</option>
                                                            <option value="Sede Cali">Sede Cali</option>
                                                            <option value="Sede Ibague-Espinal">Sede Ibagué-Espinal</option>
                                                            <option value="Sede Medellin">Sede Medellin</option>
                                                            <option value="Sede Monteria">Sede Monteria</option>
                                                            <option value="Sede Neiva">Sede Neiva</option>
                                                            <option value="Sede Pasto">Sede Pasto</option>
                                                            <option value="Sede Pereira - Cartago">Sede Pereira - Cartago</option>
                                                            <option value="Sede Popayan">Sede Popayán</option>
                                                            <option value="Sede Quibdo">Sede Quibdó</option>
                                                            <option value="Sede Santa Marta">Sede Santa Marta</option>
                                                            <option value="Sede Villavicencio">Sede Villavicencio</option>
                                                        </select>
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>4. Áreas de conocimiento involucradas en el desarrollo de la experiencia institucional</h2>
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg">
                                                        <select class="selectpicker" name="area[]" data-live-search="true" multiple>
                                                            <option value="Agronomia">Agronomía</option>
                                                            <option value="Bellas Artes">Bellas Artes</option>
                                                            <option value="Economia, Administracion, Contaduria y afines">Economía-Administración-Contaduría y afines</option>
                                                            <option value="Ingenieria, arquitectura, urbanismos y afines">Ingeniería-arquitectura-urbanismos y afines.</option>
                                                            <option value="Matematicas y Ciencias Naturales">Matemáticas y Ciencias Naturales</option>
                                                            <option value="Ciencias de la Salud">Ciencias de la Salud</option>
                                                            <option value="Ciencias Sociales y Humanas">Ciencias Sociales y Humanas</option>
                                                            <option value="No aplica">No aplica</option>
                                                        </select>
                                                    </div>
                                                </div>     
                                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                            <h2>5. Fecha de inicio</h2>
                                                        </div>
                                                        <div class="input-group date nk-int-st">
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" class="form-control" name="fecha_inicio">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane">
                                    <div class="tab-ctn">
                                        <div class="form-element-list">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-element-list">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>1. Componente de<br>internacionalización</h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <select class="selectpicker" name="componente_internacionalizacion">
                                                                        <option></option>
                                                                        <option value="Si">Sí</option>
                                                                        <option value="No">No</option> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>1.1. Descripcion Componente del internacionalización</h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <textarea class="form-control" maxlength="255" name="desc_ci"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>2. La experiencia institucional implica integración entre investigación y proyección social</h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="integracion">
                                                                        <option></option>
                                                                        <option value="Si">Sí</option>
                                                                        <option value="No">No</option> 
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>2.1. Descripcion integración entre investigación y proyección social </h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <textarea class="form-control" maxlength="255" name="desc_integracion"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>3. En qué ámbitos de la Responsabilidad Social se enmarca la experiencia institucional. </h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker"  multiple name="ambito[]">
                                                                        <option value="Accion Social">Acción Social</option>
                                                                        <option value="Medio Ambiente">Medio Ambiente</option>
                                                                        <option value="Buen Gobierno">Buen Gobierno</option>
                                                                        <option value="Laboral">Laboral</option>
                                                                        <option value="Derechos Humanos">Derechos Humanos</option>
                                                                        <option value="Lucha contra la Corrupcion">Lucha contra la Corrupción</option>
                                                                        <option value="Dialogo con los grupos de interos">Dialogo con los grupos de interés</option>
                                                                        <option value="Otros">Otros</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>4. Dificultades con las se ha encontrado en el desarrollo de la experiencia institucional </h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="dificultad[]" multiple>
                                                                        <option value="Falta de Recursos Economicos">Falta de Recursos Económicos</option>
                                                                        <option value="Falta de Recursos humanos">Falta de Recursos humanos</option>
                                                                        <option value="Falta de implicacion de la alta direccion">Falta de implicación de la alta dirección</option>
                                                                        <option value="Falta de implicacion de otros grupos de interes">Falta de implicación de otros grupos de interés</option>
                                                                        <option value="Problema con la cultura organizacional">Problema con la cultura organizacional</option>
                                                                        <option value="Problema de comunicacion y/o difusion">Problema de comunicación y/o difusión</option>
                                                                        <option value="Descoordinacion">Descoordinación</option>
                                                                        <option value="Falta de participacion de los destinatarios de la iniciativa">Falta de participación de los destinatarios de la iniciativa</option>
                                                                        <option value="Problema logistico">Problema logístico</option>
                                                                        <option value="Otros">Otros</option>
                                                                    </select>
                                                                </div>
                                                            </div>                          
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                        <h2>5. Recursos invertidos </h2>
                                                                    </div>
                                                                    <div>
                                                                        <table class="table table-bordered table-hover table-striped">
                                                                            <thead>
                                                                                <tr style="background: #9945b0">
                                                                                    <th class="text-center" style="color: white">Recursos</th>
                                                                                    <th class="text-center" style="color: white">Descripción</th>  
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Tiempo</td>
                                                                                    <td><textarea type="text" name='r_tiempo_recurso'  class="form-control"></textarea></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Talento empresarial</td>
                                                                                    <td>
                                                                                        <textarea type="text" name='r_talento_empresarial'  class="form-control" maxlength="255"></textarea>
                                                                                    </td> 
                                                                                </tr>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Recursos financieros / Presupuesto</td>
                                                                                    <td>
                                                                                        <textarea type="text" name='r_recurso_financiero'   class="form-control"></textarea>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Recursos técnicos o materiales</td>
                                                                                    <td>
                                                                                        <textarea type="text" name='r_recurso_tecnico'  class="form-control"></textarea>
                                                                                    </td>                 
                                                                                </tr>           
                                                                            </tbody>
                                                                        </table>                                     
                                                                    </div>                                              
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>6. Espacios involucrados</h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="espacios[]" multiple>
                                                                        <option value="Auditorio">Auditorio</option>
                                                                        <option value="Aulas">Aulas</option>
                                                                        <option value="Laboratorio">Laboratorio</option>
                                                                        <option value="Espacios deportivos">Espacios deportivos</option>
                                                                        <option value="Zonas comunes">Zonas comunes</option>
                                                                        <option value="Consultorios">Consultorios</option>
                                                                        <option value="Salas de espera">Salas de espera</option>
                                                                        <option value="Otros">Otros</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>7. Presupuesto</h2>
                                                                </div>
                                                                <div class="form-group ic-cmp-int">   
                                                                    <div class="form-ic-cmp">
                                                                        <i class="notika-icon notika-"></i>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control" name="presupuesto">
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>8. Expectativa de continuidad de la experiencia institucional</h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <select class="selectpicker" name="expectativa">
                                                                        <option></option>
                                                                        <option value="Si continua">Si continua</option>
                                                                        <option value="Probablemente continua">Probablemente continua</option>
                                                                        <option value="No continua">No continua</option>                                                   
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>8.1. Descripción de la expectativa de continuidad</h2>
                                                                </div>
                                                                <div>
                                                                    <textarea class="form-control" maxlength="255" name="desc_continuidad"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>9. Estado de evaluación de la experiencia institucional</h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" name="estado_evaluacion">
                                                                        <option></option>
                                                                        <option value="Primera evaluacion realizada">Primera evaluación realizada</option>
                                                                        <option value="Dos o mas evaluaciones">Dos o más evaluaciones</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list mg-t-30">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                <h2>10. Explique si su experiencia institucional incorpora alguno de los siguientes componentes innovadores: </h2>
                                                            </div>
                                                            <div>
                                                                <table class="table table-bordered table-hover table-striped">
                                                                    <thead>
                                                                        <tr style="background: #9945b0">
                                                                            <th class="text-center" style="color: white">Componentes</th>
                                                                            <th class="text-center" style="color: white">Descripción</th>  
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><label for="c_multidisciplinar">Multidisciplinar</label></td>
                                                                            <td><textarea  name='c_multidisciplinar' class="form-control">
                                                                            </textarea></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><label for="c_utilizacion_tic">Utilización de TIC’s</label></td>
                                                                            <td>
                                                                                <textarea type="text" name='c_utilizacion_tic'  class="form-control"></textarea>
                                                                            </td>                
                                                                        </tr>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><label for="Interdisciplinario">Interdisciplinario</label></td>
                                                                            <td>
                                                                                <textarea type="text" name='c_interdisciplinario'  class="form-control"></textarea>
                                                                            </td>                 
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Trabajo interinstitucional</td>
                                                                            <td>
                                                                                <textarea type="text" name='c_trabajo_interinstitucional'  class="form-control"></textarea>
                                                                            </td>                     
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Nuevo desarrollo tecnológico</td>
                                                                            <td>
                                                                                <textarea type="text" name='c_nuevo_desarrollo'  class="form-control"></textarea>
                                                                            </td>                        
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Transferencia de conocimiento y tecnología</td>
                                                                            <td>
                                                                                <textarea type="text" name='c_transferencia'  class="form-control"></textarea>
                                                                            </td>                       
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Inclusión (social, género, etnia)</td>
                                                                            <td>
                                                                                <textarea type="text" name='c_inclusion'  class="form-control"></textarea>
                                                                            </td>                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Otro</td>
                                                                            <td>
                                                                                <textarea type="text" name='c_otro'  class="form-control"></textarea>
                                                                            </td>                       
                                                                        </tr>                       
                                                                    </tbody>
                                                                </table>
                                                            </div>                         
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>11. Evaluación de la experiencia institucional: <br> descríba la estrategia y mecanismos </h2>
                                                                </div>
                                                                <div>
                                                                    <table class="table table-bordered table-hover table-striped">
                                                                        <thead>
                                                                            <tr style="background: #9945b0">
                                                                                <th class="text-center" style="color: white">Estrategia/Mecanismos</th>
                                                                                <th class="text-center" style="color: white">Descripción</th>  
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Formatos</td>
                                                                                <td><textarea type="text" name='d_formato' class="form-control"></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Cuestionarios</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_cuestionario'  class="form-control"></textarea>
                                                                                </td>                          
                                                                            </tr>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Entrevistas</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_entrevista'   class="form-control"></textarea>
                                                                                </td>                           
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Focus group</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_focus_group'  class="form-control"></textarea>
                                                                                </td>                              
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Visitas de campo</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_visita_campo'  class="form-control"></textarea>
                                                                                </td>                                                                 
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Evaluación externa</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_evaluacion_externa'  class="form-control"></textarea>
                                                                                </td>                               
                                                                            </tr>
                                                                            <tr'>
                                                                                <td>Otros Especifique</td>
                                                                                <td>
                                                                                    <textarea type="text" name='d_otro_especifique'  class="form-control"></textarea>
                                                                                </td>                           
                                                                            </tr>                      
                                                                        </tbody>
                                                                    </table>
                                                                </div>                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane">
                                    <div class="tab-ctn">
                                        
                                        <div class="form-element-list">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-element-list">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>1. Nivel territorial </h2>
                                                                </div>
                                                                <div class="bootstrap-select fm-cmp-mg">
                                                                    <select class="selectpicker" data-live-search="true" multiple name="nivel_territorial[]">
                                                                        <option value="Barrial">Barrial</option>
                                                                        <option value="Comunitaria">Comunitaria</option>
                                                                        <option value="Comuna o localidad">Comuna o localidad</option>
                                                                        <option value="Municipal">Municipal</option>
                                                                        <option value="Departamental">Departamental</option>
                                                                        <option value="Regional">Regional</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>2. Ubicación geográfica</h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <select class="selectpicker" name="ubicacion_geografica">
                                                                        <option></option>
                                                                        <option value="Urbana">Urbana</option>
                                                                        <option value="Rural">Rural</option>
                                                                        <option value="Urbana-Rural">Urbana-Rural</option>
                                                                        <option value="Centro Poblado">Centro Poblado</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>3. Como se generó la relación entre universidad y actor</h2>
                                                                </div>
                                                                <div class="bootstrap-select">
                                                                    <select class="selectpicker" name="relacion">
                                                                        <option></option>
                                                                        <option value="La organizacion o comunidad busco a la universidad">La organización o comunidad buscó a la universidad</option>
                                                                        <option value="La universidad busco a la organización o la comunidad en el territorio">La universidad buscó a la organización o la comunidad en el territorio</option>
                                                                        <option value="Se genero un convenio mutuo">Se generó un convenio mutuo</option>
                                                                        <option value="La universidad fue contratada">La universidad fue contratada</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>3.1. Descripción de la relación entre universidad y actor</h2>
                                                                </div>
                                                                <div>
                                                                    <textarea class="form-control" maxlength="255" name="desc_relacion"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                    <h2>4. Resultados esperados</h2>
                                                                </div>
                                                                <div>
                                                                    <textarea class="form-control" maxlength="255" name="resultados"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list mg-t-30">
                                                    <div class="cmp-tb-hd">
                                                        <h2>Pertenencia territorial de los actores externos que participan en la experiencia institucional</h2>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                            <h2>5. ¿La comunidad que participa de la experiencia institucional, conoce las dinámicas de su territorio y expresa pertenencia hacia el mismo?</h2>
                                                        </div>
                                                        <div>
                                                            <textarea class="form-control" maxlength="255" name="dinamicas"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                            <h2>6. Se vinculan con redes en el territorio local (a nivel municipalidad, localidad, comuna, barrio)</h2>
                                                        </div> 
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div>
                                                                <label for="chkYes">
                                                                    <input type="radio" id="chkYes" value="si" name="chkPassPort" />
                                                                    Sí
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label for="chkNo">
                                                                    <input type="radio" id="chkNo" value="no" name="chkPassPort" />
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                            <h2>¿Cual?</h2>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="form-group ic-cmp-int">   
                                                            <div class="form-ic-cmp">
                                                                <i class="notika-icon notika-"></i>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" disabled name="vinculo_cual" id="cual1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                <h2>7. Pertenece o participa de una organización de integración (Confederación, Federación, asociación, otra), a nivel departamental, regional o nacional</h2>
                                                            </div> 
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div>
                                                                    <label for="chkYes2">
                                                                        <input type="radio" id="chkYes2" value="si" name="chkPassPort2" />
                                                                        Sí
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label for="chkNo">
                                                                        <input type="radio" id="chkNo" value="no" name="chkPassPort2" />
                                                                        No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                <h2>¿Cual?</h2>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="form-group ic-cmp-int">   
                                                                <div class="form-ic-cmp">
                                                                    <i class="notika-icon notika-"></i>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" disabled name="cual_pertenece" id="cual2">
                                                                </div>
                                                            </div>
                                                        </div>               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-element-list mg-t-30">

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                            <h2>8. Fomento económico de la experiencia institucional</h2>
                                                        </div>
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <select class="selectpicker" data-live-search="true" multiple name="fomento[]">
                                                                <option value="Trueque">Trueque</option>
                                                                <option value="Intercambio de servicios">Intercambio de servícios</option>
                                                                <option value="Donaciones">Donaciones</option>
                                                                <option value="Comercio justo">Comercio justo</option>
                                                                <option value="Consumo responsable">Consumo responsable</option>
                                                                <option value="Economias domesticas">Economías domesticas</option>
                                                                <option value="Autoconsumo">Autoconsumo</option>
                                                                <option value="No a">No aplica</option>
                                                                <option value="Otro">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                                <h2>9. Participación de la experiencia institucional en la planificación local</h2>
                                                            </div>
                                                            <div>
                                                                <table class="table table-bordered table-hover table-striped">
                                                                    <thead>
                                                                        <tr style="background: #00abc8">
                                                                            <th style="color: white;" class="text-center">Enunciado</th>
                                                                            <th style="color: white;" class="text-center">Sí</th>
                                                                            <th style="color: white;" class="text-center">No</th>  
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr >
                                                                            <td>¿Se participa en espacios de planificación de la política publica?</td>
                                                                            <td><input type="radio" value="si" name='p_publico'/></td>
                                                                            <td><input type="radio" value="no" name='p_publico'/></td>  
                                                                        </tr>
                                                                        <tr >
                                                                            <td>¿Existe una relación con las instituciones de gobierno que apoyan iniciativas o generan beneficios a proyectos locales?</td>
                                                                            <td><input type="radio" value="si" name='relacion_1'/></td>
                                                                            <td><input type="radio" value="no" name='relacion_1'/></td>                                         
                                                                        </tr>
                                                                        </tr>
                                                                        <tr >
                                                                            <td>¿La buena práctica considera los planes de desarrollo local para el cumplimiento de sus objetivos?</td>
                                                                            <td>
                                                                                <input type="radio" value="si" name='plan_desarrollo'/>
                                                                            </td>
                                                                            <td>
                                                                                <input type="radio" value="no" name='plan_desarrollo'/>
                                                                            </td>                  
                                                                        </tr>                    
                                                                    </tbody>
                                                                </table>                                                       
                                                            </div>                                                    
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    </div>
                                                    <button class="btn  notika-btn-info btn-lg waves-effect btn-sm" id="btn-registrar" type="button" value="Enviar" onclick="registrar_experiencia();" style="background: #9945b0; color: white">Registrar Experiencia</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->
    <!--===FOOTER DEL SISTEMA (JS)======-->
    <?php require_once('../layouts/footer.php'); ?>

    <!--===SCRIPT DEL SISTEMA (JS)======-->
    <?php require_once('../layouts/scripts.php'); ?>
    <script src="../ajax/experiencia.js"></script>
    <script type="text/javascript">
                                                        $(function () {
                                                            var content = "<input type='text' class='bss-input' onKeyDown='event.stopPropagation();' onKeyPress='addSelectInpKeyPress(this,event)' onClick='event.stopPropagation()' placeholder='otra' style='color: black;'> <span class='glyphicon glyphicon-plus addnewicon' onClick='addSelectItem(this,event,1);'></span>";
                                                            var divider = $('<option/>')
                                                                    .addClass('divider')
                                                                    .data('divider', true);
                                                            var addoption = $('<option/>', {class: 'addItem'})
                                                                    .data('content', content)
                                                            $('.selectpicker')
                                                                    .append(divider)
                                                                    .append(addoption)
                                                                    .selectpicker();
                                                        });

                                                        function addSelectItem(t, ev) {
                                                            ev.stopPropagation();

                                                            var bs = $(t).closest('.bootstrap-select')
                                                            var txt = bs.find('.bss-input').val().replace(/[|]/g, "");
                                                            var txt = $(t).prev().val().replace(/[|]/g, "");
                                                            if ($.trim(txt) == '')
                                                                return;
                                                            var p = bs.find('select');
                                                            var o = $('option', p).eq(-2);
                                                            o.before($("<option>", {"selected": true, "text": txt}));
                                                            p.selectpicker('refresh');
                                                        }

                                                        function addSelectInpKeyPress(t, ev) {
                                                            ev.stopPropagation();

                                                            // do not allow pipe character
                                                            if (ev.which == 124)
                                                                ev.preventDefault();

                                                            // enter character adds the option
                                                            if (ev.which == 13)
                                                            {
                                                                ev.preventDefault();
                                                                addSelectItem($(t).next(), ev);
                                                            }
                                                        }
    </script>

    <script type="text/javascript">
        $(function () {
            $("input[name='chkPassPort']").click(function () {
                if ($("#chkYes").is(":checked")) {
                    $("#cual1").removeAttr("disabled");
                    $("#cual1").focus();
                } else {
                    $("#cual1").attr("disabled", "disabled");
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $("input[name='chkPassPort2']").click(function () {
                if ($("#chkYes2").is(":checked")) {
                    $("#cual2").removeAttr("disabled");
                    $("#cual2").focus();
                } else {
                    $("#cual2").attr("disabled", "disabled");
                }
            });
        });
    </script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>