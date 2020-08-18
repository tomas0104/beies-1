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

<!-- Form Element area Start-->
<div class="form-element-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="widget-tabs-list">
					<form id="form_principal">
						<div class="tab-content tab-custom-st">
							<div id="home" class="tab-pane fade in active">
								<div class="tab-ctn">
									<div class="breadcomb-area" style="padding-left: -10px;">
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
																		<h2>Formulario de registro de Experiencia Institucional</h2>  
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div> 	
									<div class="form-element-list"> 
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Seleccione la experiencia para asociar con la población universitaria</h2>
												</div>
												<div class="form-group">
													<select  name="relacion_experiencia" class="form-control" id="select_nombreexp" >
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
	                                            <h2>2. Seleccione 	</h2>
	                                        </div>
	                                        <div class="bootstrap-select">
	                                            <select class="selectpicker" name="categoria[]" multiple>
	                                                    <option value="Gestion">Contacto Responsable</option>
	                                                    <option value="Proyeccion y Extension">Otros participantes</option>
	                                            </select>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Nombre Completo</h2>
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
										<div class="row">
											
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Cargo</h2>
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
													<h2>1. Telefono</h2>
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
										</div>
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Celular</h2>
												</div>
												<div class="form-group ic-cmp-int">                    
													<div class="form-ic-cmp">
														<i class="notika-icon notika-support"></i>
													</div>
													<div class="nk-int-st">
														<input type="text" class="form-control" focus name="nombre" required>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Correo institucional</h2>
												</div>
												<div class="form-group ic-cmp-int">                    
													<div class="form-ic-cmp">
														<i class="notika-icon notika-support"></i>
													</div>
													<div class="nk-int-st">
														<input type="text" class="form-control" focus name="nombre" required>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Fax</h2>
												</div>
												<div class="form-group ic-cmp-int">                    
													<div class="form-ic-cmp">
														<i class="notika-icon notika-support"></i>
													</div>
													<div class="nk-int-st">
														<input type="text" class="form-control" focus name="nombre" required>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
												<div class="nk-int-mk sl-dp-mn mg-t-30">
													<h2>1. Direccion</h2>
												</div>
												<div class="form-group ic-cmp-int">                    
													<div class="form-ic-cmp">
														<i class="notika-icon notika-support"></i>
													</div>
													<div class="nk-int-st">
														<input type="text" class="form-control" focus name="nombre" required>
													</div>
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