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
    <!-- INICIO DEL FORMULARIO-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form id="form-universitaria"> 
                    <div class="form-element-list">
                        <div class="cmp-tb-hd">
                            <h2>Asociacion con la experiencia institucional</h2>
                        </div>                   
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>1. Seleccione la experiencia que se relaciona con la población universitaria</h2>
                                </div>
                                <div class="form-group">
                                    <select  name="relacion_experiencia" class="form-control" id="select_nombreexp" >
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-element-list mg-t-30">
                                <div class="cmp-tb-hd">
                                    <h2>Información de la población universitaria. </h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>2. Vinculo con la experiencia institucional</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="vinculo">
                                                    <option></option>
                                                    <option value="Responsable">Responsable</option>
                                                    <option value="Participante">Participante</option>
                                                    <option value="Beneficiario">Beneficiario</option>                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>3. Tipo de documento</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="tipo_documento">
                                                    <option selected value="Cedula de Ciudadania">Cédula de Ciudadania</option>
                                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                                    <option value="Libreta Militar">Libreta Militar</option>
                                                    <option value="Cedula Extrajera">Cédula Extrajera</option>
                                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>4. Número de documento</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="number" name="numero_doc" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>5. Codigo institucional</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="number" name="codigo_universidad" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>6. Nombres</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="nombres" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>7. Apellidos</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="apellidos" class="form-control">
                                            </div>
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>8. Teléfono fijo</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="telefono" class="form-control" data-mask="(+999)9999999" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>9. Número celular</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="celular" class="form-control" data-mask="(+99)9999999999" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>10. Correo institucional</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="text" name="correo" class="form-control" required>
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
                                    <h2>Relación con la experiencia institucional</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>11. Vinculación con la Universidad</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="vinculo_2" data-live-search="true">
                                                    <option></option>
                                                    <option value="Profesor">Profesor</option>
                                                    <option value="Estudiante">Estudiante</option>
                                                    <option value="Administrativo">Administrativo</option>
                                                    <option value="Egresado">Egresado</option>                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>12. Sede vinculada </h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="sede" data-live-search="true">
                                                    <option value="Sede Apartado">Sede Apartadó</option>
                                                    <option value="Sede Arauca">Sede Arauca</option>
                                                    <option value="Sede Barrancabermeja">Sede Barrancabermeja</option>
                                                    <option value="Sede Bogota">Sede Bogotá</option>
                                                    <option value="Sede Bucaramanga">Sede Bucaramanga</option>
                                                    <option value="Sede Cali">Sede Cali</option>
                                                    <option value="Sede Ibague-Espinal">Sede Ibague-Espinal</option>
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
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>13. Facultad </h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="facultad" data-live-search="true">
                                                    <option value="Facultad de administracion de empresas">Facultad de administración de empresas</option>
                                                    <option value="Facultad de contaduria publica">Facultad de contaduría publica</option>
                                                    <option value="Facultad de derecho">Facultad de derecho</option>
                                                    <option value="ETDH auxiliar de enfermeria">ETDH auxiliar de enfermería</option>
                                                    <option value="Facultad de ingenieria civil">Facultad de ingeniería civil</option>
                                                    <option value="Facultad de ingenieria de sistemas">Facultad de ingeniería de sistemas</option>
                                                    <option value="Facultad de medicina">Facultad de medicina</option>
                                                    <option value="Facultad de medicina veterinaria y zootecnia">Facultad de medicina veterinaria y zootecnia</option>
                                                    <option value="Facultad de odontologia">Facultad de odontología</option>
                                                    <option value="Facultad de psicologia">Facultad de psicología</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>14. Programa</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="programa" data-live-search="true">
                                                    <option value="Administracion de empresas">Administración de empresas</option>
                                                    <option value="Comercio internacional">Comercio internacional</option>
                                                    <option value="Comunicacion social">Comunicación social</option>
                                                    <option value="Contaduria publica">Contaduría publica</option>
                                                    <option value="Derecho">Derecho</option>
                                                    <option value="Diseno Cross media">Diseño Cross media</option>
                                                    <option value="Economia">Economía</option>
                                                    <option value="Enfermeria">Enfermería</option>
                                                    <option value="Ingenieria ambiental">Ingeniería ambiental</option>
                                                    <option value="Ingenieria civil">Ingeniería civil</option>
                                                    <option value="Ingenieria de sistemas">Ingeniería de sistemas</option>
                                                    <option value="Ingenieria de software">Ingeniería de software</option>
                                                    <option value="Ingenieria de telecomunicaciones">Ingeniería de telecomunicaciones</option>
                                                    <option value="Ingenieria electronica">Ingeniería electrónica</option>
                                                    <option value="Ingenieria industrial">Ingeniería industrial</option>
                                                    <option value="Ingenieria mecanica">Ingeniería mecánica</option>
                                                    <option value="Licenciatura en lengua castellana e ingles">Licenciatura en lengua castellana e inglés</option>
                                                    <option value="Medicina">Medicina</option>
                                                    <option value="Medicina veterinaria y zootecnia">Medicina veterinaria y zootecnia</option>
                                                    <option value="Mercadeo">Mercadeo</option>
                                                    <option value="Odontologia">Odontología</option>
                                                    <option value="Psicologia">Psicología</option>
                                                    <option value="Tecnología en control y automatizacion industrial">Tecnología en control y automatización industrial</option>
                                                    <option value="Tecnologia en desarrollo y administracion de aplicaciones">Tecnología en desarrollo y administración de aplicaciones</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>15. Horas invertidas</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="number" name="horas" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>16. Tipología de actividades</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" name="tipologia[]" data-live-search="true" multiple >
                                                    <option value="Investigacion">Investigación</option>
                                                    <option value="Asesoria empresarial">Asesoría empresarial</option>
                                                    <option value="Asesoria Psicologica">Asesoría Psicológica</option>
                                                    <option value="Asesoria juridica">Asesoría jurídica</option>
                                                    <option value="Asesoria de gestion tecnologica">Asesoría de gestión tecnológica</option>
                                                    <option value="Asesoria en comunicacion">Asesoría en comunicación</option>
                                                    <option value="Clinica de la salud">Clínica de la salud</option>
                                                    <option value="Brigada">Brigada</option>
                                                    <option value="Educacion continua (Diplomado, seminario, taller, curso)">Educación continua (Diplomado, seminario, taller, curso)</option>
                                                    <option value="Consultoria">Consultoría</option>
                                                    <option value="Proyecto de aula">Proyecto de aula</option>
                                                    <option value="Acciones que ayudan a la integracion de varios actores en el territorio">Acciones que ayudan a la integración de varios actores en el territorio</option>
                                                    <option value="Participacion en redes u otros organismos de integracion">Participación en redes u otros organismos de integración</option>
                                                    <option value="Incidencia politica">Incidencia política</option>
                                                    <option value="Campañas comunicativas">Campañas comunicativas</option>
                                            </select>
                                        </div>
                                    </div>                          
                                </div>
                                <br>
                                <button class="btn  notika-btn-info btn-lg waves-effect float-right" type="button" id="registrar_PU" onclick="Registrar()" style="background: #9945b0; color: white">Registrar Poblacion Universitaria</button>
                            </div>
                        </div>
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
    <script type="text/javascript">
    
        $(function() {
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
 
        function addSelectItem(t,ev){
           ev.stopPropagation();
           
           var bs = $(t).closest('.bootstrap-select')
           var txt=bs.find('.bss-input').val().replace(/[|]/g,"");
           var txt=$(t).prev().val().replace(/[|]/g,"");
           if ($.trim(txt)=='') return;
           var p=bs.find('select');
           var o=$('option', p).eq(-2);
           o.before( $("<option>", { "selected": true, "text": txt}) );
           p.selectpicker('refresh');
        }
 
        function addSelectInpKeyPress(t,ev){
           ev.stopPropagation();
         
           // do not allow pipe character
           if (ev.which==124) ev.preventDefault();
         
           // enter character adds the option
           if (ev.which==13)
           {
              ev.preventDefault();
              addSelectItem($(t).next(),ev);
           }
        }
    </script>

    <script src="../ajax/universitaria.js"></script>
    <script type="text/javascript">
        $('.selectpicker').selectpicker({
            size: '10'
        });
        $('#select_nombreexp').focus()
        SelectExperiencia()
    </script>
</body>
</html>
<?php
} else {
    header("location:../");
}
?>