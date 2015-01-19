

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1>Add Service</h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home"><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Clients</li>
            <li class="active">Add Client</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="ggm_content">
        <div class="row">
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" name="ggm_clientform" id="ggm_clientform" method="get">
                        <div class="box-body">
                            <div class="ggm_form-group">
                                <label for="ggm_client_name">Client Name</label>
                                <input type="text" class="form-control" name="ggm_client_name" id="ggm_client_name">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_name">Client Password</label>
                                <input type="text" class="form-control" name="ggm_client_password" id="ggm_client_password">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Email</label>
                                <input type="text" class="form-control" name="ggm_client_" id="ggm_client_">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Website</label>
                                <input type="text" class="form-control" name="ggm_client_" id="ggm_client_">
                            </div>

                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Type</label>
                                <select class="form-control" name="ggm_client_type" id="ggm_client_type">
                                    <option value="Client">Client</option>
                                    <option value="Super Client">Super Client </option>
                                </select>
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Status</label>
                                <div class="checkbox">
                                    <div class="col-xs-3">
                                        <label>
                                            <input type="checkbox" class="minimal" name="ggm_client_status" id="ggm_client_status"/>
                                            Disable </label>
                                    </div>
                                    </div>

                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Order</label>
                                <input type="text" class="form-control" name="ggm_client_order" id="ggm_client_order">
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button class="btn btn-primary btn-flat" type="submit" name="ggm_service_submit" id="ggm_service_submit">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>
        </div>
    </section>
    <!-- /.content -->
</aside>

