<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Registro de un nuevo usuario</h1>
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
                    <div class="card card-primary">
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
                                    <form action="../app/controllers/users/create.php" method="post">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" name="nombres" class="form-control" placeholder="Escriba aquí el nombre del nuevo usuario..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Usuario</label>
                                            <input type="text" name="user" class="form-control" placeholder="Escriba aquí el usuario..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="text" name="password_user" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Repita la Contraseña</label>
                                            <input type="text" name="password_repeat" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <label for="">rol</label>
                                            <input type="text" name="rol" class="form-control" placeholder="Escriba aquí el rol del nuevo usuario..." required>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
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

<?php include ('../layout/part2.php');?>


