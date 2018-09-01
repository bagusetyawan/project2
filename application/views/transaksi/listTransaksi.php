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
                  <li><a><i class="fa fa-desktop"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url(); ?>index.php/transaksi">Entry Transaksi</a></li>
                      <li><a href="<?=base_url(); ?>index.php/transaksi/listTransaksi">List Transaksi</a></li>
                    </ul>
                  </li>
                  <li><a href="<?=base_url(); ?>index.php/barang"><i class="fa fa-edit"></i> Data Barang</a>
                  </li>
                  <li><a href="<?=base_url(); ?>index.php/piutang"><i class="fa fa-table"></i> Piutang </a>
                  </li>
                  <li><a href="<?=base_url(); ?>index.php/customer"><i class="fa fa-bar-chart-o"></i> Customer</a>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Log Out </a>
                  </li>
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
                <h3>Data Transaksi</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                      
                      <div class="row">
                          <div id="reload">
                          <table class="table table-striped" id="mydata">
                          <thead>
                              <tr>
                                  <th></th>
                                  <th>ID</th>
                                  <th>Nama Barang</th>
                                  <th>Harga</th>
                                  <th>Kategori</th>
                                  <th>Satuan</th>
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
                          <form class="form-horizontal">
                              <div class="modal-body">

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >ID Barang</label>
                                      <div class="col-xs-9">
                                          <input name="idBarang" id="idBarang" class="form-control" type="text" placeholder="ID Barang" style="width:335px;" required>
                                      </div>
                                  </div>
                 
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Nama Barang</label>
                                      <div class="col-xs-9">
                                          <input name="nabar" id="nama_barang" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Harga</label>
                                      <div class="col-xs-9">
                                          <input name="harga" id="harga" class="form-control" type="text" placeholder="Rp." style="width:335px;" required>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Kategori</label>
                                      <div class="col-xs-9">
                                          <input name="kat" id="kategori" class="form-control" type="text" placeholder="Kategori" style="width:335px;" required>
                                      </div>
                                  </div>
               
                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Satuan</label>
                                      <div class="col-xs-9">
                                          <input name="sat" id="satuan" class="form-control" type="text" placeholder="Satuan" style="width:335px;" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="control-label col-xs-3" >Stok</label>
                                      <div class="col-xs-9">
                                          <input name="stk" id="stok" class="form-control" type="text" placeholder="Stok" style="width:335px;" required>
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
                          <form class="form-horizontal">
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
                                          <input name="harga_edit" id="harga2" class="form-control" type="text" placeholder="Rp." style="width:335px;" required>
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

    <script type="text/javascript">
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        var t =  $('#mydata').dataTable({
          "columnDefs":[
          {
            "targets":[0],
            "orderable": true
          },
          {
            "visible":false,
            "targets":[1]
          }
          ]
        });


        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Transaksi/getList',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var a = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+a+'</td>'+
                                '<td>'+data[i].id+'</td>'+
                                
                                '<td>'+data[i].tanggal+'</td>'+
                                '<td>Rp. '+data[i].total+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].kodePel+'</td>'+
                                '<td style="text-align:right;">'+
                                    
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" kodePel="'+data[i].kodePel+'" idTrans="'+data[i].id+'">Cetak Faktur</a>'+
                                '</td>'+
                                '</tr>';
                                a = a+1;

                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('idTrans');
            var kode =$(this).attr('kodePel');
            window.open('<?=site_url(); ?>/transaksi/cetakPDF?kodeTrans='+id+'&kodePel='+kode, '_blank');
            return false;
        });

        // 
 
        
 
    });
 
</script>

  </body>
</html>
