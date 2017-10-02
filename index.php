<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/plugins/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/DataTables/datatables.css">
    <link rel="stylesheet" href="assets/plugins/DataTables/FixedColumns-3.2.3/css/fixedColumns.bootstrap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="assets/plugins/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dbtable.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Load Header -->
    <?php include('header.php'); ?>
    <!-- End Load Header -->

    <!-- Load Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- End Load Sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6">
           <div class="box box-primary">
            <div class="box-header" style="text-align: center;">
              <h3 class="dbtable-title">CRUD DATA FIREBASE</h3>
              <div class="btn-group visible-xs">
                <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a title="Home"><i class="fa fa-home"></i>Home</a></li>
                  <li class="divider"></li>
                  <li><a id="0" data-toggle="modal" data-target="#modal-form-mhs" title="Tambah data"><i class="fa fa-file-o"></i>Tambah data</a></li>
                  <li><a title="Edit data"><i class="fa fa-pencil-square-o"></i>Edit data</a></li>
                  <li class="divider"></li>
                  <li><a title="Hapus data"><i class="fa fa-trash-o"></i>Hapus data</a></li>
                </ul>
              </div>
              <div class="hidden-xs" style="text-align: left;">
                <a class="btn btn-sm btn-default" title="Home" id="testBtn"><i class="fa fa-home"></i></a> 
                <span class="dbtable-toolbar-spc">&nbsp;</span>
                <a class="btn btn-sm btn-default" title="Tambah data" data-target="#modal-form-mhs" data-toggle="modal"><i class="fa fa-file-o"></i></a> <a class="btn btn-sm btn-default" id="btn-edit-mhs" title="Edit data"><i class="fa fa-pencil-square-o"></i></a> <a class="btn btn-sm btn-default" id="btn-hapus-mhs" title="Hapus data"><i class="fa fa-trash-o"></i></a> 
                
              </div>
              
            </div>
            <div class="box-body">
              <table id="tbl_mhs" class="dbtable table-bordered dbtable-striped">
                <thead class="dbtable-header">
                  <tr>
                    <th style="width: 50px; height: 30px;">NIM</th>
                    <th style="width: 150px;">Nama Mahasiswa</th>
                    <th>JK</th>
                    <th style="width: 150px;">Tempat, Tanggal Lahir</th>
                    <th style="width: 150px;">Email</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
    <!-- /.content-wrapper -->

    <div class="modal modal-primary fade" id="modal-form-mhs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-form-add">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file-o"></i> Tambah Data Barang</h4>
          </div>
          <div class="modal-body">
           <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Data Baru</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <form class="form-horizontal" id="form-mhs">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="txtNim" class="col-sm-3 control-label">NIM</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="txtNim" name="txtNim" placeholder="nim...">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtNama" class="col-sm-3 control-label">Nama Mahasiswa</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="txtNama" name="txtNama" placeholder="nama...">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtNama" class="col-sm-3 control-label" style="margin-top: -5px;">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <label>
                          <input type="radio" name="rbJk" value="L" checked> Laki Laki
                        </label>
                        <label>
                          <input type="radio" name="rbJk" value="P"> Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtTempatLahir" class="col-sm-3 control-label">TTL</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="txtTempatLahir" name="txtTempatLahir" placeholder="tempat lahir...">
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" name="txtTglLahir" id="datepicker">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="email...">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-flat btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="button" class="btn btn-flat btn-success" value="Simpan" id="btn-save-mhs"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>

</div>
<!-- Load Header -->
<?php include('footer.php'); ?>
<!-- End Load Header -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="assets/plugins/DataTables/datatables.js"></script>
<!-- datepicker -->
<script src="assets/plugins/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
<script src="assets/js/main.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/4.1.1/firebase-database.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
<script type="text/javascript" src="assets/js/app_firebase.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datepicker').datepicker({
      autoclose: true,
      format: "dd-mm-yyyy"
    });

  })
</script>
</body>
</html>
