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
        <body>
           <!--Modal Create -->
           <div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registar anexos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form_agregar" onsubmit="return GuardarArchivo()" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-element-list">
                                <input id="ID_PU" type="text" name="ID_Poblacion" readonly="" hidden=""/>
                                <input type="hidden" name="MAX_FILE_SIZE" value="20971520"/>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>1. Seleccione la experiencia</h2>
                                        </div>
                                        <div class="form-group">
                                            <select id="select_nombreexp"  name="relacion_experiencia" class="form-control" required>
                                            </select>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>2. Seleccione el tipo de archivo</h2>
                                        </div>
                                        <div class="bootstrap-select fm-cmp-mg">
                                            <select class="selectpicker" id="vinculo_exp" name="tipo_archivo" required>
                                                <option value="word">Documento Word</option>
                                                <option value="powerpoint">Documento Power Point</option>
                                                <option value="excel">Documento Excel</option>
                                                <option value="audio">Audio</option>
                                                <option value="video">Video</option>
                                                <option value="imagen">Imagen</option>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="nk-int-mk sl-dp-mn mg-t-30">
                                            <h2>2. Adjunte archivo (max 20MB)</h2>
                                        </div>
                                        <div>
                                            <input type="file" name="dato" required>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
        <!-- Data Table area Start-->
        <div class="data-table-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="data-table-list">
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-backdrop="static" data-target="#modal-create">Agregar archivo</button><br><hr>
                            <div class="basic-tb-hd">
                                <h2><?php echo 'Tabla gestión de anexos - ' . $_SESSION['sesion_beies']['sede']; ?></h2><br>
                            </div>
                            <div class="table-responsive">
                                <?php include_once '../layouts/g-anexos.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Table area End-->
        <!--===FOOTER DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/footer.php'); ?>

        <!--===SCRIPT DEL SISTEMA (JS)======-->
        <?php require_once('../layouts/scripts.php'); ?>
        <script src="../ajax/anexo.js"></script>
        <script src="../ajax/universitaria.js"></script>
        <script type="text/javascript">
            SelectExperiencia();
        </script>
        <script type="text/javascript">

            $(document).ready(function () {
                $('.selectpicker').selectpicker({
                    size: '10'
                });
                $('#tabla1').DataTable({
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad"
                        }
                    }
                }
                );
            });
        </script>
        <script type="text/javascript">
            $("input[type='file']").on("change", function () {
               if(this.files[0].size > 20000000) {
                Swal.fire({
                    showCancelButton: false,
                    allowOutsideClick: false,
                    icon: 'warning',
                    text: "El archivo supera el tamaño permitido!"
                });
                $(this).val('');
             }
         });
     </script>
 </body>
 </html>
 <?php
} else {
    header("location:../");
}
?>