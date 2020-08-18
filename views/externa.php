<?php session_start();
if (isset($_SESSION["sesion_beies"])) {
?>
<!-- === CABEZERA DEL HOME===-->
<?php require_once('../layouts/head.php'); ?>

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
	            <form id="form_externa">
	            	<div class="form-element-list">
	            		<div class="cmp-tb-hd">
	                  <h2>Asociación con la experiencia institucional</h2>
	               </div>
	               <div class="row">
	                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                     <div class="nk-int-mk sl-dp-mn mg-t-30">
	                        <h2>1. Seleccione la experiencia que se relaciona con la población externa</h2>
	                     </div>
	                     <div class="form-group">
                                <select  name="relacion_experiencia" class="form-control" id="select_nombreexp">
                                </select>
                         </div>
	                  </div>
	               </div>
	            </div>
	            <div class="row">
	               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                  <div class="form-element-list mg-t-30">
	                     <div class="cmp-tb-hd">
	                        <h2>Información de la población externa. </h2>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>2. Tipo de documento</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" data-live-search="true" id="tipo_doc" name="tipo_documento">
	                                 <option selected value="Cedula de Ciudadania">Cédula de Ciudadania</option>
	                                 <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
	                                 <option value="Libreta Militar">Libreta Militar</option>
	                                 <option value="Cedula Extrajera">Cédula Extrajera</option>
	                                 <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
	                                 <option value="Pasaporte">Pasaporte</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>3. Número de documento</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="number" class="form-control" name="numero_doc" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                              </div>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>4. Nombres</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="nombre">
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>5. Apellidos</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="apellidos">
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>6. Teléfono fijo</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" data-mask="(999)9999999" name="telefono" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>7. Telefono móvil</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" data-mask="(99)9999999999" name="celular" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                              </div>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>8. Dirección de residencia</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="direccion">
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>9. Correo electrónico</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="correo">
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
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>10. Vinculación con la experiencia institucional</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="vinculacion">
	                                 <option></option>
	                                 <!--<option value="Responsable">Responsable</option>-->
	                                 <!--<option value="Participante">Participante</option>-->
	                                 <option value="Beneficiario">Beneficiario</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>11. Grupos Etarios</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="grupo_etario[]" data-live-search="true" multiple>
	                                 <option></option>
	                                 <option value="Ninios (Menores de 15 anios)">Niños (Menores de 15 años)</option>
	                                 <option value="Jovenes (Mayores de 15 anios, Menores de 26 anios)">Jóvenes (Mayores de 15 años, Menores de 26 años)</option>
	                                 <option value="Adultos (Mayores de 26 anios, Menores de 64 anios)">Adultos (Mayores de 26 años, Menores de 64 años)</option>
	                                 <option value="Adultos mayores (Mayores de 64 anios)">Adultos mayores (Mayores de 64 años)</option>
	                              </select>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>12. Etnia de las personas participantes(Marque las que considere necesarias)</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="etnia[]" id="select1" data-live-search="true" multiple>
	                                 <option></option>
	                                 <option value="Mestiza">Mestiza</option>
	                                 <option value="Afrodescendientes">Afrodescendientes</option>
	                                 <option value="Indigenas">Indígenas</option>
	                                 <option value="otra">Otra</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>13. Que Tipología de actividades realiza la universidad para que esta sea una experiencia institucional</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="tipologia[]" data-live-search="true" multiple>
	                                 <option></option>
	                                 <option value="Investigacion">Investigación</option>
	                                 <option value="Asesoria empresarial">Asesoría empresarial</option>
	                                 <option value="Asesoria psicologica">Asesoría psicológica</option>
	                                 <option value="Asesoria juridica">Asesoría jurídica</option>
	                                 <option value="Asesoria de gestion tecnologica">Asesoría de gestión tecnológica</option>
	                                 <option value="Asesoria en comunicacion">Asesoría en comunicación</option>
	                                 <option value="Clinica de la salud">Clínica de la salud</option>
	                                 <option value="Brigadas">Brigadas</option>
	                                 <option value="Educacion continua (diplomado, seminario, taller, curso)">Educación continua (diplomado, seminario, taller, curso)</option>
	                                 <option value="Consultoria">Consultoría</option>
	                                 <option value="Proyecto de aula">Proyecto de aula</option>
	                                 <option value="Acciones que ayudan a la integracion de varios actores en el territorio">Acciones que ayudan a la integración de varios actores en el territorio</option>
	                                 <option value="Participacion en redes u otros organismos de integracion">Participación en redes u otros organismos de integración</option>
	                                 <option value="Incidencia Politica">Incidencia Política</option>
	                                 <option value="Campanias comunicativas">Campañas comunicativas</option>
	                                 <option value="Otra">Otra</option>
	                              </select>
	                           </div>
	                        </div>
	                     </div>
	                     <br>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                           <div class="form-group ic-cmp-int">
	                              <div class="cmp-tb-hd">
	                                 <div class="nk-int-mk sl-dp-mn mg-t-30">
	                                    <h2>14. Escolaridad de las personas participantes de la buena práctica </h2>
	                                 </div>
	                              </div>
	                              <div>
	                                 <table class="table table-bordered table-hover table-striped">
	                                    <thead class="thead-dark" style="background: #00abc8;">
	                                       <tr>
	                                          <th class="text-center" style="color: white;width: 25em;">Nivel de estudios</th>
	                                          <th class="text-center" style="color: white">Total</th>
	                                       </tr>
	                                    </thead>
	                                    <tbody>
	                                       <tr>
	                                          <td>Sin escolaridad</td>
	                                          <td>
	                                             <input type="number" name="sin_escolaridad" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Primaria incompleta</td>
	                                          <td>
	                                             <input type="number" name="primaria_incompleta" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Primaria completa</td>
	                                          <td>
	                                             <input type="number" name="primaria_completa" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Bachillerato incompleto</td>
	                                          <td>
	                                             <input type="number" name="bachillerato_incompleto" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Bachillerato Completo</td>
	                                          <td>
	                                             <input type="number" name="bachillerato_completo" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                    </tbody>
	                                 </table>
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<br>
								<br>
								<br>
	                           <div class="form-group ic-cmp-int">
	                              <div>
	                                 <table class="table table-bordered table-hover table-striped">
	                                    <thead style="background: #00abc8;">
	                                       <tr>
	                                          <th class="text-center" style="color: white; width: 24em">Nivel de estudios</th>
	                                          <th class="text-center" style="color: white">Total</th>
	                                       </tr>
	                                    </thead>
	                                    <tbody>
	                                       <tr>
	                                          <td>Técnica completa</td>
	                                          <td>
	                                             <input type="number" name="tecnica_completa" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Técnica incompleta</td>
	                                          <td>
	                                             <input type="number" name="tecnica_incompleta" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>       
	                                       </tr>
	                                       <tr>
	                                          <td>Universidad</td>
	                                          <td>
	                                             <input type="number" name="universidad" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Postgrado</td>
	                                          <td>
	                                             <input type="number" name="postgrado" class="form-control" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                                          </td>
	                                       </tr>
	                                    </tbody>
	                                 </table>
	                              </div>
	                           </div>
	                        </div>
	                     </div>
	               
	                     <div class="row">
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                           <div class="form-group ic-cmp-int">
	                              <div class="cmp-tb-hd">
	                                 <div class="nk-int-mk sl-dp-mn mg-t-30">
	                                    <h2>15. Participación económica</h2>
	                                 </div>
	                              </div>
	                              <div>
	                                 <table class="table table-bordered table-hover table-striped">
	                                    <thead style="background: #00abc8;">
	                                       <tr>
	                                          <th class="text-center" style="color: white">Pregunta</th>
	                                          <th style= "width: 25em; color: white" class="text-center">Respuesta </th>
	                                       </tr>
	                                    </thead>
	                                    <tbody>
	                                       <tr>
	                                          <td>Los actores que desarrollan la buena práctica participan en algún proceso económico de:</td>
	                                          <td>
	                                             <div class="bootstrap-select fm-cmp-mg">
	                                                <select class="selectpicker" name="participacion1">
	                                                   <option></option>
	                                                   <option value="Produccion">Producción</option>
	                                                   <option value="Bienes y servicios">Bienes y servicios</option>
	                                                   <option value="Comercializacion">Comercialización</option>
	                                                   <option value="Consumo">Consumo</option>
	                                                   <option value="Ahorro y/o Finanzas">Ahorro y/o Finanzas</option>
	                                                   <option value="Ninguno">Ninguno</option>
	                                                </select>
	                                             </div>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Estos procesos económicos se encuentran a nivel:</td>
	                                          <td>
	                                             <div class="bootstrap-select fm-cmp-mg">
	                                                <select class="selectpicker" name="participacion2">
	                                                   <option></option>
	                                                   <option value="Local">Local</option>
	                                                   <option value="Regional">Regional</option>
	                                                   <option value="Nacional">Nacional</option>
	                                                   <option value="No aplica">No aplica</option>
	                                                </select>
	                                             </div>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Existe suficiente oferta de los bienes y/o servicios producidos por la buena práctica para satisfacer la demanda local</td>
	                                          <td>
	                                             <div class="bootstrap-select fm-cmp-mg">
	                                                <select class="selectpicker" name="participacion3">
	                                                   <option></option>
	                                                   <option value="Si">Sí</option>
	                                                   <option value="No">No</option>
	                                                   <option value="No Aplica">No Aplica</option>
	                                                </select>
	                                             </div>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Se cuenta con redes de vecinos, productores y consumidores locales que promueven la producción, comercialización <br>o consumo de los bienes y/o servicios producidos por la buena práctica.</td>
	                                          <td>
	                                             <div class="bootstrap-select fm-cmp-mg">
	                                                <select class="selectpicker" name="participacion4">
	                                                   <option></option>
	                                                   <option value="Si">Sí</option>
	                                                   <option value="No">No</option>
	                                                   <option value="No Aplica">No Aplica</option>
	                                                </select>
	                                             </div>
	                                          </td>
	                                       </tr>
	                                       <tr>
	                                          <td>Disponen de otros tipos de Intercambios, (trueque, intercambio de servicios, donaciones, comercio justo,<br> consumo responsable, economías domésticas, autoconsumo, otros)
	                                          </td>
	                                          <td>
	                                             <div class="bootstrap-select fm-cmp-mg">
	                                                <select class="selectpicker" name="participacion5">
	                                                   <option></option>
	                                                   <option value="Si">Sí</option>
	                                                   <option value="No">No</option>
	                                                   <option value="No Aplica">No Aplica</option>
	                                                </select>
	                                             </div>
	                                          </td>
	                                       </tr>
	                                    </tbody>
	                                 </table>
	                              </div>
	                           </div>
	                        <button class="btn  notika-btn-info btn-lg waves-effect float-right btn-sm" id="btn-registrar" type="button" onclick="RegistrarExterna();" style="background: #00abc8; color: white">Registrar Población Externa</button>
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
	<!-- FINAL DEL FORMULARIO-->

	<!--===FOOTER DEL SISTEMA (JS)======-->
	<?php require_once('../layouts/footer.php'); ?>

	<!--===SCRIPT DEL SISTEMA (JS)======-->
	<?php require_once('../layouts/scripts.php'); ?>

	<!--<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-registrar').click(function(){
				console.log($('#form_externa').serialize());
				
			});
		});
	</script>-->
	<script src="../ajax/externa.js"></script>
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
        SelectExperiencia()
    </script>
</body>
</html>
<?php
} else {
    header("location:../");
}
?>