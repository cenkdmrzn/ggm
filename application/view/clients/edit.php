
<aside class="ggm_right-side">
    <!-- Content Header (Page header) -->
    <section class="ggm_content-header">
        <h1>Edit Client</h1>
        <ol class="ggm_breadcrumb">
            <li><a href="<?php echo URL; ?>home"><i class="fa fa-dashboard"></i>Home Page</a></li>
            <li>Clients</li>
            <li class="active">Edit Client</li>
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
                    <form role="form" name="ggm_clientform" id="ggm_clientform" method="post" action="<?php echo URL; ?>clients/updateclient">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($client->id, ENT_QUOTES, 'UTF-8'); ?>" />

                        <div class="box-body">
                            <div class="ggm_form-group">
                                <label for="ggm_client_name">Client Name</label>
                                <input type="text" class="form-control" name="ggm_client_name" id="ggm_client_name" value="<?php echo htmlspecialchars($client->client_name, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_password">Client Password</label>
                                <input type="password" class="form-control" name="ggm_client_password" id="ggm_client_password" value="<?php echo htmlspecialchars($client->client_password, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_email">Client Email</label>
                                <input type="text" class="form-control" name="ggm_client_email" id="ggm_client_email" value="<?php echo htmlspecialchars($client->client_email, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="ggm_form-group">
                                <label for="ggm_client_website">Client Website</label>
                                <input type="text" class="form-control" name="ggm_client_website" id="ggm_client_website" value="<?php echo htmlspecialchars($client->client_website, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="ggm_form-group">
                                <label for="ggm_client_">Client Type</label>
                                <select class="form-control" name="ggm_client_type" id="ggm_client_type">
                                    <option value="Client">Client</option>
                                    <option value="Super Client">Super Client</option>
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
                            <button class="btn btn-primary btn-flat" type="submit" name="ggm_submit_client" id="ggm_submit_client">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>
        </div>
    </section>
    <!-- /.content -->
</aside>

