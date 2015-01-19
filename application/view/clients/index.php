<!-- Right side column. Contains the navbar and content of the page -->
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1> Service List </h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home"><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Service</li>
            <li class="active">Service List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="ggm_content">
        <div class="form-group">
            <a class="btn btn-primary btn-flat" type="button" name="ggm_add_client" id="ggm_add_client" href="<?php echo URL; ?>clients/add">Add Client</a>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header"> </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="ggm_servicelist" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Explorer 4.0</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="<?php echo URL; ?>services/edit">Edit</a>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Explorer 5.0</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Explorer 5.5</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Explorer 6</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>                             </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Win XP SP2+</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>                             </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Win XP</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a> |
                                    <a class="btn btn-danger btn-sm" class="ggm_service_del" id="ggm_service_del" href="">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>1.7</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>                             </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>1.8</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>1.8</td>
                                <td><a class="btn btn-success btn-sm" class="ggm_service_edit" id="ggm_service_edit" href="edit_service.html">Edit</a>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</aside>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo URL; ?>/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- DATA TABES SCRIPT -->
<script src="<?php echo URL; ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo URL; ?>js/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo URL; ?>js/AdminLTE/demo.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#ggm_servicelist").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

