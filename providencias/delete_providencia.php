<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/providencias/show_providencia.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Eliminar providencia</h1>
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
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Esta seguro de eliminar la providencia?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/providencias/delete_providencia.php" method="post">
                                        <input type="text" name="id_providencia" value="<?php echo $id_providencia_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Cedula del servidor</label>
                                            <input type="text" name="cedula_servidor" class="form-control" value="<?php echo $cedula_servidor;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nombre del servidor</label>
                                            <input type="text" name="nombre_servidor" class="form-control" value="<?php echo $nombre_servidor;?>" disabled>
                                        </div>
                                        <div class="form-group"></div>
                                            <label for="">Cargo del servidor</label>
                                            <input type="text" name="cargo_servidor" class="form-control" value="<?php echo $cargo_servidor;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de designación</label>
                                            <input type="text" name="fecha_designacion" class="form-control" value="<?php echo $fecha_designacion;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Número de providencia</label>
                                            <input type="text" name="n_providencia" class="form-control" value="<?php echo $n_providencia;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de publicación</label>
                                            <input type="text" name="fecha_public" class="form-control" value="<?php echo $fecha_public;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Documento de providencia</label>
                                            <input type="text" name="doc_providencia" class="form-control" value="<?php echo $doc_providencia;?>" disabled>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Volver</a>
                                            <button class="btn btn-danger">Eliminar</button>
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
