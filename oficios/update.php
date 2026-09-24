<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/oficios/update_oficio.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Actualizar el oficio</h1>
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

                                    <form action="../app/controllers/oficios/update_oficio.php" method="post">
                                        <input type="text" name="id_oficio" value="<?php echo $id_oficio_get; ?>" hidden>
                                       <div class="form-group">
                                            <label for="">Nombre del oficio</label>
                                            <input type="text" name="nombre_oficio" class="form-control" placeholder="Escriba aquí el nombre del oficio..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nº oficio</label>
                                            <input type="text" name="n_oficio" class="form-control" placeholder="Escriba aquí el nº de oficio..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha del oficio</label>
                                            <input type="date" name="fecha_oficio" class="form-control" placeholder="Escriba aquí la fecha del oficio..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Inserte el documento del oficio</label>
                                            <input type="file" name="doc_oficio" class="form-control" placeholder="Escriba aquí el documento..." required>
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
