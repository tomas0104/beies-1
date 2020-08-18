<?php
session_start();
if (isset($_SESSION["sesion_beies"])) {

    if ($_SESSION["sesion_beies"]["rol"] == 'Investigador') {
        header("location: inicio");
    } else {
        ?>
        <!-- === CABEZERA DEL HOME===-->
        <?php require_once('../layouts/head.php'); ?>

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
                            <form id="form_UpdateUser" onsubmit="return RegistrarUsuario()" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            <div class="row">            
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn">
                                                        <h2>Seleccione usuario</h2>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="ID_UPDATE" readonly="" name="UPDATE_ID" hidden="" />
                                                        <select id="List_User" name="idUpdate" class="form-control">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div>
                                                        <button type="button" id="btn-search" class="btn btn-sm btn-primary" name="name_user" onclick="ConsultarUsuario()" style="margin-top: 1.8rem;">Consultar</button>
                                                        <button type="submit" class="btn btn-success btn-sm" id="btnAdd" style="margin-top: 1.8rem;">Registrar nuevo</button>
                                                        <button type="button" class="btn btn-warning btn-sm" id="btnUpdate" onclick="ActualizarUser()" style="margin-top: 1.8rem;">Actualizar datos</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"  data-dismiss="modal" id="btn-cerrar" style="margin-top: 1.8rem;">Limpiar formulario</button>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-element-list">
                                            <div class="row">            
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>1. Usuario</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="text" id="user_nameU" class="form-control" name="name_userU" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>2. Estado</h2>
                                                    </div>
                                                    <div>
                                                        <select class="form-control" id="estado_userU" name="user_estadoU">
                                                            <option value="Activo">Activo</option>
                                                            <option value="Inactivo">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>3. Sede</h2>
                                                    </div>
                                                    <div>
                                                        <select class="form-control" id="sede_userU" name="user_sedeU">
                                                            <option value="">Seleccione</option>
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
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>4. Nombres</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="text" id="user_nombresU" class="form-control" name="nombres_userU">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>5. Apellidos</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="text" id="user_apellidosU" class="form-control" name="apellidos_userU">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>6. Correo</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="email" id="user_correoU" class="form-control" name="correo_userU" required=""/>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div class="row">                                 
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>8. Clave</h2>
                                                    </div>
                                                    <div class="form-group ic-cmp-int">
                                                        <div class="form-ic-cmp">
                                                            <i class="notika-icon"></i>
                                                        </div>
                                                        <div class="nk-int-st">
                                                            <input type="password" id="user_passwordU" class="form-control" name="password_userU" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                        <h2>9. Rol</h2>
                                                    </div>
                                                    <div>
                                                        <select class="form-control" id="rolUserU" name="user_rolU">
                                                            <option value="">Seleccione</option>
                                                            <option value="Administrador">Administrador</option>
                                                            <option value="Investigador">Investigador</option>
                                                        </select>
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
            <!-- FINAL DEL FORMULARIO-->
            <!--===FOOTER DEL SISTEMA (JS)======-->
            <?php require_once('../layouts/footer.php'); ?>

            <!--===SCRIPT DEL SISTEMA (JS)======-->
            <?php require_once('../layouts/scripts.php'); ?>
        </body>
        </html>
        <script src="../ajax/usuario.js" ></script>
        <script type="text/javascript">
                                                            ListarUsuarios();


                                                            $('#btn-cerrar').click(function () {
                                                                $('#form_UpdateUser')[0].reset();
                                                            });
        </script>

        <script type="text/javascript">

            Swal.fire({
                title: '¿Qué deseas hacer?',
                input: 'select',
                inputOptions: {
                    '1': 'Crear usuario',
                    '2': 'Actualizar usuario'
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
                            resolve('Necesitas escoger una opción');
                        }
                    });
                }
            }).then(function (result) {
                if (result.value == '1') {
                    $("#btnUpdate").hide();
                    $("#btn-search").hide();
                    $('#List_User').prop('disabled', 'true');
                } else if (result.value == '2') {
                    $("#btnAdd").hide();
                }
            });

        </script>
        <?php
    }
} else {
    header("location:../");
}
?>