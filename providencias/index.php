<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/part1.php');

include ('../app/controllers/providencias/list_providencia.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de Providencias</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Providencias registradas</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>C.I Servidor</center></th>
                                    <th><center>Servidor</center></th>
                                    <th><center>Cargo</center></th>
                                    <th><center>Fecha de Designacion</center></th>
                                    <th><center>Nº providencia</center></th>
                                    <th><center>Fecha de publicacion</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $contador = 0;
                                foreach ($providencia_datos as $providencia_dato){
                                    $id_providencia = $providencia_dato['id_providencia']; ?>
                                    <tr>
                                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                                        <td><?php echo $providencia_dato['cedula_servidor'];?></td>
                                        <td><?php echo $providencia_dato['nombre_servidor'];?></td>
                                        <td><center><?php echo $providencia_dato['cargo_servidor'];?></center></td>
                                        <td><?php echo $providencia_dato['fecha_designacion'];?></td>
                                        <td><?php echo $providencia_dato['n_providencia'];?></td>
                                        <td><?php echo $providencia_dato['fecha_public'];?></td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <a href="show.php?id=<?php echo $id_providencia; ?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                                                    <a href="update.php?id=<?php echo $id_providencia; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a>
                                                    <a href="delete_providencia.php?id=<?php echo $id_providencia; ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                   <th><center>Nro</center></th>
                                    <th><center>C.I Servidor</center></th>
                                    <th><center>Servidor</center></th>
                                    <th><center>Cargo</center></th>
                                    <th><center>Fecha de Designacion</center></th>
                                    <th><center>Nº providencia</center></th>
                                    <th><center>Fecha de publicacion</center></th>
                                    <th><center>Acciones</center></th>
                                </tr>
                                </tfoot>
                            </table>
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


<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Providencias",
                "infoEmpty": "Mostrando 0 a 0 de 0 Providencias",
                "infoFiltered": "(Filtrado de _MAX_ total Providencias)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Providencias",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

</script>