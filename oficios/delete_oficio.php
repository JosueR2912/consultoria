<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/oficios/show_oficio.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Eliminar oficio</h1>
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
                            <h3 class="card-title">¿Esta seguro de eliminar el oficio?</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../app/controllers/oficios/delete_oficio.php" method="post">
                                        <input type="text" name="id_oficio" value="<?php echo $id_oficio_get;?>" hidden>
                                        <div class="form-group">
                                            <label for="">Nombre del oficio</label>
                                            <input type="text" name="nombre_oficio" class="form-control" value="<?php echo $nombre_oficio;?>" disabled>
                                        </div>
                                        <div class="form-group"></div>
                                            <label for="">Número del oficio</label>
                                            <input type="text" name="n_oficio" class="form-control" value="<?php echo $n_oficio;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de oficio</label>
                                            <input type="text" name="fecha_oficio" class="form-control" value="<?php echo $fecha_oficio;?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Documento de oficio</label>
                                            <input type="text" name="doc_oficio" class="form-control" value="<?php echo $doc_oficio;?>" disabled>
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
