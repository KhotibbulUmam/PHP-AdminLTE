
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>

  <!-- Style -->
  <style>
    .content-wrapper {
      margin-bottom: 56px;
    }
  </style>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?pindah" class="brand-link">
      <img src="public/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php?pindah=barang" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pindah=pelanggan" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pindah=transaksi" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Aplikasi Toko</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title text-bold">Data Pelanggan</h3>
        </div>
        <div class="card-body">
          
          <!-- Menambah Data -->
          <a href="index.php?&action_plg=tambah" class="btn btn-success btn-sm">Tambah Data</a>

          <!-- Tabel untuk menampilkan data user -->
          <table class="table  table-striped table-hover mt-2 mb-4">
               <thead>
                    <tr>
                         <th scope="col" class="col-1">No</th>
                         <th scope="col" class="col-2">ID Pelanggan</th>
                         <th scope="col" class="col-2">Nama Pelanggan</th>
                         <th scope="col" class="col-2">Alamat</th>
                         <th scope="col" class="col-2">Aksi</th>
                    </tr>
               </thead>
               <tbody>

                    <!-- Code PHP untuk mengambil data dari table barang-->
                    <?php
                         if(!empty($pelanggan)) {
                         $no = 1;
                         foreach ($pelanggan as $pelanggan) {
                    ?>

                    <tr>
                         <th scope="row"><?php echo $no++ ?></th>
                         <td><?php echo $pelanggan['id'] ?></td>
                         <td><?php echo $pelanggan['nama'] ?></td>
                         <td><?php echo $pelanggan['alamat'] ?></td>
                         <td>
                              <a href="index.php?id=<?php echo $pelanggan['id']; ?>&action_plg=edit"   class="btn btn-warning btn-sm mx-1">Edit</a>
                              <a href="index.php?id=<?php echo $pelanggan['id']; ?>&action_plg=hapus"  class="btn btn-danger  btn-sm mx-1" onclick="return confirm('Yakin mau hapus??');" >Hapus</a>
                         </td>
                    </tr>

                    <?php
                         }
                    } else {
                    ?>

                    <!-- Data kosong -->
                    <tr>
                         <td colspan="5" class="text-center">Data Pelanggan Kosong</td>
                         
                    </tr>

                    <?php
                    }
                    ?>

               </tbody>
          </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Copyright &copy; by Khotibbul Umam
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
