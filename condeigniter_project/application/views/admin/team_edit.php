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
                            <h2 class="m-0">Team Edit</h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('team-update/' . $teamedit->id) ?>" method="post" enctype="multipart/form-data">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Photo</th>
                                        <td>
                                            <input type="file" name="photo" value="<?php echo $teamedit->photo ?>" class="form-control">

                                            <?php if ($teamedit->photo) { ?>
                                                <img src="<?php echo base_url('./uploads/' . $teamedit->photo) ?>" style="width: 100px; height: 100px;">
                                            <?php } ?>
                                        </td>
                                        <th>Title</th>
                                        <td>
                                            <input type="text" name="title" value="<?php echo $teamedit->title ?>" placeholder="Enter your title name" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td>
                                            <!-- <textarea name="brif" id="" cols="80" rows="10" placeholder="Enter your discribe"></textarea> -->
                                            <input type="text" name="deg" value="<?php echo $teamedit->deg ?>" placeholder="Enter your Designation" class="form-control">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <input type="submit" class="btn btn-primary btn-block" value="update">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            </hr>
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