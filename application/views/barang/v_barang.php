<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplikasi Penjualan! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Halaman Utama <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <!-- <li><a href="index2.html">Dashboard2</a></li> -->
                      <!-- <li><a href="index3.html">Dashboard3</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Laba/Rugi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Stok Gudang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Pengaturan Extra</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Retur Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Smart Warning System <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Manajemen Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
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
                    <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
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
            <div class="page-title">
              <div class="title_left">
                <h3>Data Barang</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="pull-left"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Barang</a></div>
                     <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                      <div class="row">
                          <div id="reload">
                          <table class="table table-striped" id="mydata">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nama Barang</th>
                                  <th>Harga</th>
                                  <th>Kategori</th>
                                  <th>Satuan</th>
                                  <th>Stok</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody id="show_data">
                          <!-- Datatable content goes here -->
                          </tbody>
                          </table>
                          </div>
                      </div>

                      <!-- MODAL ADD -->
                      <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
                          </div>
                          <form class="form-horizontal" id="formAdd">
                              <div class="modal-body">

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >ID Barang</label>
                                      <div class="col-xs-9">
                                          <input name="idBarang" data-parsley-error-message="Mohon Isi ID" id="idBarang" class="form-control has-feedback-left" type="text" placeholder="ID Barang" style="width:335px;" required>
                                          <span class="fa fa-keyboard form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>
                 
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Nama Barang</label>
                                      <div class="col-xs-9">
                                          <input name="nabar" data-parsley-error-message="Mohon Isi Nama Barang" id="nama_barang" class="form-control has-feedback-left" type="text" placeholder="Nama Barang" style="width:335px;" required>
                                          <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Harga</label>
                                      <div class="col-xs-9">
                                          <input name="harga" data-parsley-error-message="Mohon Isi Hanya Angka" data-parsley-type="number" id="harga" class="form-control has-feedback-left" type="text" placeholder="Rp." style="width:335px;" required>
                                          <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Kategori</label>
                                      <div class="col-xs-9">
                                          <input name="kat" data-parsley-error-message="Mohon Isi Kategori" id="kategori" class="form-control has-feedback-left" type="text" placeholder="Kategori" style="width:335px;" required>
                                          <span class="fa fa-hand-lizard form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Satuan</label>
                                      <div class="col-xs-9">
                                          <input name="sat" data-parsley-error-message="Mohon Isi Satuan Barang" id="satuan" class="form-control has-feedback-left" type="text" placeholder="Satuan" style="width:335px;" required>
                                          <span class="fa fa-circle form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Stok Awal</label>
                                      <div class="col-xs-9">
                                          <input name="stk" data-parsley-error-message="Mohon Isi Stok Awal" id="stok" class="form-control has-feedback-left" type="text" placeholder="Stok" style="width:335px;" required>
                                          <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                                      </div>
                                  </div>
               
                              </div>
               
                              <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-info" id="btn_simpan">Simpan</button>
                              </div>
                          </form>
                          </div>
                          </div>
                      </div>
                      <!--END MODAL ADD-->

                      <!-- MODAL EDIT -->
                      <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                          </div>
                          <form class="form-horizontal" id="formEdit">
                              <div class="modal-body">
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Kode Barang</label>
                                      <div class="col-xs-9">
                                          <input name="id_edit" id="id_barang2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Nama Barang</label>
                                      <div class="col-xs-9">
                                          <input name="nabar_edit" id="nama_barang2" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Harga</label>
                                      <div class="col-xs-9">
                                          <input name="harga_edit" data-parsley-type="number" id="harga2" class="form-control" type="text" placeholder="Rp." style="width:335px;" required>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Kategori</label>
                                      <div class="col-xs-9">
                                          <input name="kat_edit" id="kategori2" class="form-control" type="text" placeholder="Kategori" style="width:335px;" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Satuan</label>
                                      <div class="col-xs-9">
                                          <input name="sat_edit" id="satuan2" class="form-control" type="text" placeholder="Satuan" style="width:335px;" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Stok</label>
                                      <div class="col-xs-9">
                                          <input name="stk_edit" id="stok2" class="form-control" type="text" placeholder="Stok" style="width:335px;" required>
                                      </div>
                                  </div>
               
                              </div>
               
                              <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-info" id="btn_update">Update</button>
                              </div>
                          </form>
                          </div>
                          </div>
                      </div>
                      <!--END MODAL EDIT-->
               
                      <!--MODAL HAPUS-->
                      <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                                  </div>
                                  <form class="form-horizontal">
                                  <div class="modal-body">
                                                         
                                          <input type="hidden" name="kode" id="textkode" value="">
                                          <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                                       
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                      <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <!--END MODAL HAPUS-->

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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/jquery-validation/dist/jquery.validate.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/jquery-validation/parsley.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
        $("#formAdd").parsley();
        $("#formEdit").parsley();
        
         
        $('#mydata').dataTable({
          "order":[[0, "desc"]], 
          "columnDefs":[
          {
            "targets":[2],
            "orderable":false
          },
          {
            "targets":[3],
            "orderable":false
          },
          {
            "targets":[4],
            "orderable":false
          },
          {
            "targets":[5],
            "orderable":false
          }
          ]
        });
        //fungsi tampil barang
        
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id_barang+'</td>'+
                                '<td>'+data[i].nama_barang+'</td>'+
                                '<td>Rp. '+data[i].harga+'</td>'+
                                '<td>'+data[i].kategori+'</td>'+
                                '<td>'+data[i].satuan+'</td>'+
                                '<td>'+data[i].stok+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_barang+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_barang+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id_barang, nama_barang, harga, kategori, satuan, stok){
                        $('#ModalaEdit').modal('show');
                        $('[name="id_edit"]').val(data.id_barang);
                        $('[name="nabar_edit"]').val(data.nama_barang);
                        $('[name="harga_edit"]').val(data.harga);
                        $('[name="kat_edit"]').val(data.kategori);
                        $('[name="sat_edit"]').val(data.satuan);
                        $('[name="stk_edit"]').val(data.stok);
                    });
                }
            });
            return false;
        });
 
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $("#formAdd").submit(function(e){
          var idbar=$('#idBarang').val();
          var nabar=$('#nama_barang').val();
          var harga=$('#harga').val();
          var kat=$('#kategori').val();
          var sat=$('#satuan').val();
          var stk=$('#stok').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
              dataType : "JSON",
              data : {idbar:idbar, nabar:nabar, harga:harga, kat:kat, sat:sat, stk:stk},
              success: function(data){
                  $('#idBarang').val("");
                  $('[name="nabar"]').val("");
                  $('[name="harga"]').val("");
                  $('[name="kat"]').val("");
                  $('[name="sat"]').val("");
                  $('[name="stk"]').val("");
                  $('#ModalaAdd').modal('hide');
                  tampil_data_barang();
              }
          });
          // return false;
          e.preventDefault();
        });
        // $('#btn_simpan').on('click',function(){
          
        //     // var idbar=$('#idBarang').val();
        //     // var nabar=$('#nama_barang').val();
        //     // var harga=$('#harga').val();
        //     // var kat=$('#kategori').val();
        //     // var sat=$('#satuan').val();
        //     // var stk=$('#stok').val();
        //     // $.ajax({
        //     //     type : "POST",
        //     //     url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
        //     //     dataType : "JSON",
        //     //     data : {idbar:idbar, nabar:nabar, harga:harga, kat:kat, sat:sat, stk:stk},
        //     //     success: function(data){
        //     //         $('#idBarang').val("");
        //     //         $('[name="nabar"]').val("");
        //     //         $('[name="harga"]').val("");
        //     //         $('[name="kat"]').val("");
        //     //         $('[name="sat"]').val("");
        //     //         $('[name="stk"]').val("");
        //     //         $('#ModalaAdd').modal('hide');
        //     //         tampil_data_barang();
        //     //     }
        //     // });
        //     // return false;
        // });

        $("#formEdit").submit(function(e){

          var kobar=$('#id_barang2').val();
          var nabar=$('#nama_barang2').val();
          var harga=$('#harga2').val();
          var kat=$('#kategori2').val();
          var sat=$('#satuan2').val();
          var stk=$('#stok2').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/barang/update_barang')?>",
              dataType : "JSON",
              data : {kobar:kobar , nabar:nabar, harga:harga, kat:kat, sat:sat, stk:stk},
              success: function(data){
                  $('[name="id_edit"]').val("");
                  $('[name="nabar_edit"]').val("");
                  $('[name="harga_edit"]').val("");
                  $('[name="kat_edit"]').val("");
                  $('[name="sat_edit"]').val("");
                  $('[name="stk_edit"]').val("");
                  $('#ModalaEdit').modal('hide');
                  tampil_data_barang();
              }
          });
          // return false;
          e.preventDefault();
        });
 
        //Update Barang
        // $('#btn_update').on('click',function(){
        //     var kobar=$('#id_barang2').val();
        //     var nabar=$('#nama_barang2').val();
        //     var harga=$('#harga2').val();
        //     var kat=$('#kategori2').val();
        //     var sat=$('#satuan2').val();
        //     var stk=$('#stok2').val();
        //     $.ajax({
        //         type : "POST",
        //         url  : "<?php echo base_url('index.php/barang/update_barang')?>",
        //         dataType : "JSON",
        //         data : {kobar:kobar , nabar:nabar, harga:harga, kat:kat, sat:sat, stk:stk},
        //         success: function(data){
        //             $('[name="id_edit"]').val("");
        //             $('[name="nabar_edit"]').val("");
        //             $('[name="harga_edit"]').val("");
        //             $('[name="kat_edit"]').val("");
        //             $('[name="sat_edit"]').val("");
        //             $('[name="stk_edit"]').val("");
        //             $('#ModalaEdit').modal('hide');
        //             tampil_data_barang();
        //         }
        //     });
        //     return false;
        // });
 
        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_barang();
                    }
                });
                return false;
        });
 
    });
 
</script>

  </body>
</html>
