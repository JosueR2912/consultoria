<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/providencias/update_providencia.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar la providencia</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Llene los datos con cuidado</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">

                                    <form action="../app/controllers/providencias/update.php" method="post">
                                        <input type="text" name="id_providencia" value="<?php echo $id_providencia_get; ?>" hidden>
                                       <div class="form-group">
                                            <label for="">Cedula del servidor</label>
                                            <input type="text" name="cedula_servidor" class="form-control" placeholder="Escriba aquí la cédula del servidor..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nombre del servidor</label>
                                            <input type="text" name="nombre_servidor" class="form-control" placeholder="Escriba aquí el nombre del servidor..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cargo del servidor</label>
                                            <input type="text" name="cargo_servidor" class="form-control" placeholder="Escriba aquí el cargo del servidor..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de designación</label>
                                            <input type="date" name="fecha_designacion" class="form-control" placeholder="Escriba aquí la fecha de designación..." required>
                                        </div>
                                         <div class="form-group">
                                            <label for="">Nº de provincia</label>
                                            <input type="text" name="n_providencia" class="form-control" placeholder="Escriba aquí el nº de provincia..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de publicacion en gaceta</label>
                                            <input type="date" name="fecha_public" class="form-control" placeholder="Escriba aquí la fecha de designación..." required>
                                        </div>
                                         <div class="form-group">
                                            <label for="">Nº de gaceta</label>
                                            <input type="text" name="n_gaceta" class="form-control" placeholder="Escriba aquí el nº de gaceta..." required>
                                        </div>
                                         <div class="form-group">
                                            <label for="">Relación de acta de entrega</label>
                                            <input type="text" name="relacion_acta_entrega" class="form-control" placeholder="Escriba aquí la relación de acta de entrega..." required>
                                        </div>

                                      
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/part2.php'); ?>
