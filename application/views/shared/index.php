<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Cash Purchasing</title>

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>/favicon.png">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">


  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin-2.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">

  <!-- toastr template-->
  <link href="<?php echo base_url('assets/toastr/toastr.min.css')?>" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-comments-dollar"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Cash <sup>V 1.0</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          MAIN MENU :
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book-open"></i>
            <span>Menu List</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Item List :</h6>
             <!--  <a class="collapse-item" href="<?php echo base_url('member')?>"><i class="fas fa-address-card"></i>Member</a></th>
              <a class="collapse-item" href="<?php echo base_url('category')?>"><i class="fas fa-bars"></i>Categoty</a>
              <a class="collapse-item" href="<?php echo base_url('cashin')?>"><i class="fa fa-book"></i>Cash In</a>
              <a class="collapse-item" href="<?php echo base_url('cashout')?>"><i class="fas fa-dolly"></i>Cash Out</a> -->
              <a class="collapse-item" href="<?php echo base_url('transaksi')?>"><i class="fas fa-money-bill-wave"></i>Transaction</a>
              <a class="collapse-item" href="<?php echo base_url('report')?>"><i class="fas fa-chart-line"></i>Report</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <div class="input-group-append">
                </div>
              </div>
              <h3><font face="font_family" color="blue">E-CASH PURCHASING</font></h3>
            </form>
            
            
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php
                 $tgl=date('l, d-m-Y');
                 echo $tgl;
                 ?>
                 <div class="topbar-divider d-none d-sm-block"></div>
                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello <?= ucfirst($this->session->userdata('username')) ?></span>
                 <img class="img-profile rounded-circle" src="<?php echo base_url('img/admin2.png')?>">
               </a>
               <!-- Dropdown - User Information -->
               <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



          <?=$contents?>

          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; 2020 NextPro-Ge</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Add Modal-->
 <!--      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            </div> -->
            <!-- Basic Card Example -->
<!--             <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Cash In<button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">X</span>
                </button></h6>
              </div>

              <div class="card-body">

                <form method="post" action="">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" class="form-control <?php echo form_error('tanggal')?'is-invalid':'' ?>" id="tanggal" name="tanggal">
                      <div class="invalid-feedback">
                        <?php echo form_error('tanggal') ?>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="description">Description</label>
                      <input type="text" class="form-control <?php echo form_error('description')?'is-invalid':'' ?>" id="description" name="description">
                      <div class="invalid-feedback">
                        <?php echo form_error('description') ?>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="tran_in">Tran_in</label>
                      <input type="text" class="form-control <?php echo form_error('tran_in')?'is-invalid':'' ?>" id="tran_in" name="tran_in">
                      <div class="invalid-feedback">
                        <?php echo form_error('tran_in') ?>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="tran_out">Tran_Out</label>
                      <input type="text" class="form-control <?php echo form_error('tran_out')?'is-invalid':'' ?>" id="tran_out" name="tran_out">
                      <div class="invalid-feedback">
                        <?php echo form_error('tran_out') ?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="<?php echo base_url('transaksi')?>" class="btn btn-info">Back</a>
                </form>
              </div>
            </div> -->


      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">Silahkan Klik "Logout" Untuk Mengakhiri</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="<?php echo site_url('auth/logout')?>">Logout</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Delete Modal-->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
              </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak dapat dikembalikan</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" id="btn-delete" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->

      <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

      <!-- Page level plugins -->
      <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
      <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>

      <!-- toastr -->
      <script src="<?php echo base_url('assets/toastr/toastr.min.js')?>"></script>

      <script type="text/javascript">
        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
      </script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url('js/sb-admin-2.min.js')?>"></script>

      <script type="text/javascript">
        $(document).ready(function(){
          $('#dataTables2').DataTable();
        });

        function deleteConfirm(url) {
          $('#btn-delete').attr('href',url);
          $('#deleteModal').modal();
        }

        <?php if($this->session->flashdata('success')){?>
          toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php }else if($this->session->flashdata('error')){?>
          toastr.error("<?php echo $this->session->flashdata('error'); ?>");
        <?php }else if($this->session->flashdata('warning')){?>
          toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php }else if($this->session->flashdata('info')){?>
          toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php } ?>

      </script>

    </body>

    </html>
