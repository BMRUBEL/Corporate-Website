<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/menu') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">


                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <h1>Team List</h1>
                                <a href="<?php echo base_url('save-team') ?>" class="btn btn-xs btn-success">Create Team</a>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>

                                <?php foreach ($list as $k => $v) { ?>
                                    <tr>
                                        <td><?php echo $k + 1 ?></td>
                                        <td>
                                            <?php if ($v->photo) { ?>
                                                <img src="<?php echo base_url('./uploads/' . $v->photo) ?>" style="width: 100px; height: 100px;">
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $v->title ?></td>
                                        <td><?php echo $v->deg ?></td>

                                        <td>
                                            <a href="<?php echo base_url('team-edit/' . $v->id) ?>" class="btn btn-xs btn-success">Edit

                                            </a>
                                            <a href="<?php echo base_url('admin/team_delete/' . $v->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>