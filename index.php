<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
    }

    //KONEKSI DB
    include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Sistem | Gramedia </title>
	<link rel="icon" href="dist/img/logo_gramedia.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-info navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>SISTEM INFORMASI PENDATAAN</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logo_gramedia.png" alt="AdminLTE Logo" class="brand-image">
				<span class="brand-text"> GRAMEDIA </span>
			</a>
			

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/admin.ico">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-info">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
          				if ($data_level=="Administrator"){
        				?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Data Master
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-buku" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Buku</p>
									</a>
								</li>
                                <li class="nav-item">
                                    <a href="?page=data-kategori" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-barang" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="?page=data-pegawai" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pegawai</p>
                                    </a>
                                </li>
							</ul>
						</li>

						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="Direktur"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Data Master
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-buku1" class="nav-link">
										<i class="nav-icon far fa-circle text-warning"></i>
										<p>Data Buku</p>
									</a>
								</li>
                                <li class="nav-item">
                                    <a href="?page=data-kategori1" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?page=data-barang1" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Barang</p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="?page=data-pegawai1" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Data Pegawai</p>
                                    </a>
                                </li>
							</ul>
						</li>
						<li class="nav-header">Setting</li>
                        </li>	
						<?php
							}
						?>
						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

				<!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
				</section>

				<!-- Main content -->
				<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

				<?php 
      			if(isset($_GET['page'])){
				$hal = $_GET['page'];
  
          		switch ($hal) {
              
				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'cetak-pengguna':
					include "admin/pengguna/cetak_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;


				//kategori
				case 'data-kategori':
					include "admin/kategori/data_kategori.php";
					break;
				case 'add-kategori':
					include "admin/kategori/add_kategori.php";
					break;
				case 'edit-kategori':
					include "admin/kategori/edit_kategori.php";
					break;
				case 'del-kategori':
					include "admin/kategori/del_kategori.php";
					break;
				case 'view-kategori':
					include "admin/kategori/view_kategori.php";
					break;
				case 'data-kategori1':
						include "direktur/kategori/data_kategori.php";
						break;

              	//buku
              	case 'data-buku':
                  include "admin/buku/data_buku.php";
                  break;
				  case 'data-buku1':
					include "direktur/buku/data_buku.php";
					break;
              	case 'add-buku':
                  include "admin/buku/add_buku.php";
                  break;
              	case 'edit-buku':
                  include "admin/buku/edit_buku.php";
                  break;
              	case 'del-buku':
                  include "admin/buku/del_buku.php";
                  break;
              	case 'view-buku':
                  include "admin/buku/view_buku.php";
                  break;
				case 'cetak-buku':
				  include "admin/buku/cetak_buku.php";
				  break;

				  

              	//Pegawai
              	case 'data-pegawai':
                  include "admin/pegawai/data_pegawai.php";
                  break;
				case 'data-pegawai1':
				  include "direktur/pegawai/data_pegawai.php";
				  break;
	           	case 'add-pegawai':
                  include "admin/pegawai/add_pegawai.php";
                  break;
              	case 'edit-pegawai':
                  include "admin/pegawai/edit_pegawai.php";
                  break;
              	case 'del-pegawai':
                  include "admin/pegawai/del_pegawai.php";
                  break;
              	case 'view-pegawai':
                  include "admin/pegawai/view_pegawai.php";
                  break;

				//barang
              	case 'data-barang':
                  include "admin/barang/data_barang.php";
                  break;
				case 'data-barang1':
					include "direktur/barang/data_barang.php";
					break;
              	case 'add-barang':
                  include "admin/barang/add_barang.php";
                  break;
              	case 'edit-barang':
                  include "admin/barang/edit_barang.php";
                  break;
              	case 'del-barang':
                  include "admin/barang/del_barang.php";
                  break;
              	case 'view-barang':
                  include "admin/barang/view_barang.php";
                  break;
				
					
				//default
              	default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          		}
				}else{

        		// Auto Halaman Home Pengguna
          		if($data_level=="Administrator"){
              	include "home/admin.php";
              	}
		  		elseif($data_level=="Direktur"){
				include "home/direktur.php";
				}
          		}
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="http://www.ikadi.or.id/">
					<strong> ERNI JULITA </strong>
				</a>
				All rights reserved 2022
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-success">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>