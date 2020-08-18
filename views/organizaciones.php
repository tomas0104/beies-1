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
	            <!--<div class="breadcomb-area" >
	               <div class="container">
	                  <div class="row">
	                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: inherit;">
	                        <div class="breadcomb-list" style="margin-right: 15px;">
	                           <div class="row">
	                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                 <div class="breadcomb-wp">
	                                    <div class="breadcomb-icon">
	                                       <i class="notika-icon notika-form"></i>
	                                    </div>
	                                    <div class="breadcomb-ctn">
	                                       <h2>FORMULARIO: Registro Organización Externa</h2>
	                                    </div>
	                                 </div>
	                              </div>
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	            </div>-->
	            <form id="form_externa">
	            	<div class="form-element-list">
	               <div class="cmp-tb-hd">
	                  <h2>Asociacion con la experiencia institucional</h2>
	               </div>
	               <div class="row">
	                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                     <div class="nk-int-mk sl-dp-mn mg-t-30">
	                        <h2>1. Seleccione la experiencia que se relaciona con la organización externa</h2>
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
	                        <h2>Información de la organización externa. </h2>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>2. Tipo documento</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" data-live-search="true" id="tipo_doc" name="tipo_documento">
	                                 <option selected value="NIT">NIT</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>3. Número de documento</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="number" class="form-control" name="numero_doc" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"/>
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>4. Nombre de la organización</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika-"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="nombre">
	                              </div>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">	                        
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>5. Departamento</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="departamento" data-live-search="true" >
	                                 <option value="0">Seleccione...</option>
								    <option value="Amazonas">Amazonas</option>
								    <option value="Antioquia">Antioquia</option>
								    <option value="Arauca">Arauca</option>
								    <option value="Atlantico">Atlantico</option>
								    <option value="Bolivar">Bolívar</option>
								    <option value="Boyaca">Boyacá</option>
								    <option value="Caldas">Caldas</option>
								    <option value="Caqueta">Caquetá</option>
								    <option value="Casanare">Casanare</option>
								    <option value="Cauca">Cauca</option>
								    <option value="Cesar">Cesar</option>
								    <option value="Choco">Chocó</option>
								    <option value="Cordoba">Cordoba</option>
								    <option value="Cundinamarca">Cundinamarca</option>
								    <option value="Distrito Capital">Distrito Capital</option>
								    <option value="Guainía">Guainía</option>
								    <option value="Guaviare">Guaviare</option>
								    <option value="Huila">Huila</option>
								    <option value="La Guajira">La Guajira</option>
								    <option value="Magdalena">Magdalena</option>
								    <option value="Meta">Meta</option>
								    <option value="Nariño">Nariño</option>
								    <option value="Norte de Santander">Norte de Santander</option>
								    <option value="Putumayo">Putumayo</option>
								    <option value="Quindio">Quindío</option>
								    <option value="Risaralda">Risaralda</option>
								    <option value="San Andres y Providencia">San Andres y Providencia</option>
								    <option value="Santander">Santander</option>
								    <option value="Sucre">Sucre</option>
								    <option value="Tolima">Tolima</option>
								    <option value="Valle del Cauca">Valle del Cauca</option>
								    <option value="Vaupes">Vaupés</option>
								    <option value="Vichada">Vichada</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>6. Municipio</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika-"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="municipio">
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>7. Teléfono fijo</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika-"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" data-mask="(999)9999999" name="telefono" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
	                              </div>
	                           </div>
	                        </div>	                        
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>8. Dirección</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika-"></i>
	                              </div>
	                              <div class="nk-int-st">
	                                 <input type="text" class="form-control" name="direccion">
	                              </div>
	                           </div>
	                        </div>
	                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>9. Correo electrónico</h2>
	                           </div>
	                           <div class="form-group ic-cmp-int">
	                              <div class="form-ic-cmp">
	                                 <i class="notika-icon notika-"></i>
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
	                        <h2>Organizaciónes que interactúan con la experiencia institucional.</h2>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>10. Sector público</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_publico">
	                                 <option></option>
	                                 <option value="Entes de funciones de control y supervision">Entes de funciones de control y supervisión</option>
	                                 <option value="Entes de promocion, fomento y fortalecimiento">Entes de promoción, fomento y fortalecimiento</option>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>11. Sector educativo</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_educativo">
	                                 <option></option>
	                                 <option value="Universidades">Universidades</option>
	                                 <option value="Instituciones de educacion basica y media">Instituciones de educación básica y media</option>
	                                 <option value="Centros de investigacion">Centros de investigacion</option>
	                                 </select>
	                           </div>
	                        </div>
	                     </div>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>12. Organización de la economía social y solidaria</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_ecosol">
	                                 <option></option>
	                                 <option value="Cooperativa">Cooperativa</option>
	                                 <option value="Mutual">Mutual</option>
	                                 <option value="Fondo de empleados">Fondo de empleados</option>
	                                 <option value="Asociacion de productores">Asociación de productores</option>
	                                 <option value="Organizaciones comerciantes">Organizaciones comerciantes</option>
	                                 <option value="Ferias empresariales">Ferias empresariales</option>
	                                 <option value="Mercados">Mercados</option>
	                                 </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>13. Organización de la sociedad civil</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_sc">
	                                 <option></option>
	                                 <option value="Cooperativa">Fundaciones</option>
	                                 <option value="Corporacion">Corporación</option>
	                                 <option value="Asociacion">Asociación</option>                                
	                                 </select>
	                           </div>
	                        </div>
	                     </div>
	                     <br>
	                     <div class="row">
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>14. Organismos de Integración Redes</h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_ir">
	                                 <option></option>
	                                 <option value="Confederacion">Confederación</option>
	                                 <option value="Federacion">Federación</option>
	                                 <option value="Asociaciones regionales o nacionales">Asociaciones regionales o nacionales</option>
	                                 <option value="Organizaciones Internacionales">Organizaciones Internacionales</option>
	                                 <option value="Organizaciones de economía mixta">Organizaciones de economía mixta</option>
	                                 </select>
	                           </div>
	                        </div>
	                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                           <div class="nk-int-mk sl-dp-mn mg-t-30">
	                              <h2>15. Empresas del sector privado </h2>
	                           </div>
	                           <div class="bootstrap-select fm-cmp-mg">
	                              <select class="selectpicker" name="sector_ep">
	                                 <option></option>
	                                 <option value="Microempresa (Hasta 10 trabajadores)">Microempresa (Hasta 10 trabajadores)</option>
	                                 <option value="Pequenia empresa (Hasta 50 trabajadores)">Pequeña empresa (Hasta 50 trabajadores)</option>
	                                 <option value="Mediana empresa (Hasta 200 trabajadores)">Mediana empresa (Hasta 200 trabajadores)</option>
	                               </select>
	                           </div>
	                        </div>
	                     </div>
	                     <br>
	                     <br>
	                     <button class="btn  notika-btn-info btn-lg waves-effect float-right" id="btn-registrar" type="button" onclick="RegistrarOrganizacion();" style="background: #9945b0; color: white">Registrar Organización</button>
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
	<script src="../ajax/organizaciones.js"></script>
	<script type="text/javascript">
		ListarDepartamento();
	</script>
	<script type="text/javascript">
		$(function() {
		  var content = "<input type='text' class='bss-input' onKeyDown='event.stopPropagation();' onKeyPress='addSelectInpKeyPress(this,event)' onClick='event.stopPropagation()' placeholder='Otro' style='color: black;'> <span class='glyphicon glyphicon-plus addnewicon' onClick='addSelectItem(this,event,1);'></span>";
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