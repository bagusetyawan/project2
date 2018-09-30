<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Cashier Pro 1.2</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/jquery-ui.css">


    <style type="text/css">
      .error{
        color: red;
      }
    </style>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
             <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-shopping-cart"></i> <span>My Cashier Pro</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url(); ?>assets/build/images/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('username'); ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('components/comp_sidebarMenu', FALSE); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php $this->load->view('components/comp_footerButtons', FALSE); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt=""><?php echo $this->session->userdata('username'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    
                    
                    <li><a href="<?=base_url(); ?>index.php/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Item Baru</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    	<li><a href="<?=site_url(); ?>/barang.html"><i class="fa fa-chevron-left"></i> Kembali ke List</a>
                      	</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!-- <?php echo form_open_multipart('barang/simpanBarang');?> -->
                    <!-- <form id="formAdd" method="POST" data-parsley-validate class="form-horizontal form-label-left" action="<?=site_url(); ?>barang/simpanBarang" enctype="multipart/form-data"> -->
                      <form action="<?=site_url(); ?>barang/simpanBarang" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-horizontal form-label-left" id="formAdd">

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="idBarang" id="idBarang" class="form-control has-feedback-left col-md-6" type="text" placeholder="ID Barang" required>
	                          <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                            
	                        </div>
                          <div class="col-md-3 col-sm-3 cols-xs-6">
                            <button type="button" data-toggle="tooltip" title="Generate Random ID" id="idGenerator" class="btn btn-success"><i class="fa fa-random"></i></button>
                          </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Masuk <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="receiveDate" id="receiveDate" class="form-control has-feedback-left" type="text" placeholder="DD-MM-YYYY" value="<?=date('d-m-Y') ?>">
                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Barang <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="namaBarang" id="namaBarang" class="form-control has-feedback-left" type="text" placeholder="Nama Barang" required>
                              <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga Pokok <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="hargaPokok" id="hargaPokok" data-parsley-type="number" class="form-control has-feedback-left" type="text" placeholder="Rp." required>
                              <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Harga Jual <span class="required">*</span>
	                        </label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="hargaJual" id="hargaJual" data-parsley-type="number" class="form-control has-feedback-left" type="text" placeholder="Rp." required>
                              <span class="fa fa-forward form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Expired Date</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="expDate" id="expDate" class="form-control has-feedback-left" type="text" placeholder="DD-MM-YYYY" value="<?=date('d-m-Y') ?>">
                              <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <select class="form-control has-feedback-left" name="kategori" id="kategori">
                                <option value="">--Silahkan Pilih--</option>
                                <?php foreach ($kategori as $key) {
                                	echo "<option value='$key->id'>$key->kategori</option>";
                                } ?>
                              </select>
                              <span class="fa fa-info form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Satuan</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <select class="form-control has-feedback-left" name="satuan" id="satuan">
                                <option value="">--Silahkan Pilih--</option>
                                <?php foreach ($kategori as $key) {
                                	echo "<option value='$key->id'>$key->kategori</option>";
                                } ?>
                              </select>
                              <span class="fa fa-joomla form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Minimum Stok Warning</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="minimumStok" id="minimumStok" class="form-control has-feedback-left" type="text" placeholder="0">
                              <span class="fa fa-jsfiddle form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Stok Awal <span class="required">*</span></label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="stokAwal" id="stokAwal" data-parsley-type="number" class="form-control has-feedback-left" type="text" placeholder="0" required>
                              <span class="fa fa-ioxhost form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Lokasi Penyimpanan</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="penyimpanan" id="penyimpanan" class="form-control has-feedback-left" type="text" placeholder="Misal: A1">
                              <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                      	<div class="form-group">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Suppplier</label>
	                        <div class="col-md-6 col-sm-6 col-xs-12">
	                          <input name="supplier" id="supplier" class="form-control has-feedback-left" type="text" placeholder="Nama Supplier">
                              <span class="fa fa-skyatlas form-control-feedback left" aria-hidden="true"></span>
	                        </div>
                      	</div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Picture</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="berkas"/>
                          </div>
                        </div>

                      	<div class="ln_solid"></div>
                      	<div class="form-group">
                      		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      			<button class="btn btn-danger" type="reset">Reset</button>
                      			<button class="btn btn-primary" id="btn_addCustomer">Simpan</button>
	                        </div>
	                    </div>

                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Thanks to <a href="https://colorlib.com">Template's Author</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.js"></script>

    <!-- <script src="<?php echo base_url(); ?>assets/build/js/jquery-1.12.4.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/build/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/build/js/sum.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/jquery-validation/parsley.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url(); ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$('#receiveDate').datetimepicker({
    			format:'DD-MM-YYYY'
    		});
    		$('#expDate').datetimepicker({
    			format:'DD-MM-YYYY'
    		});
    		$("#formAdd").parsley();
        $("#idGenerator").click(function(){
          var text = "";
          var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

          for (var i = 0; i < 11; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));
          $("#idBarang").val(text);
        });
    	});
    </script>


  </body>
</html>
