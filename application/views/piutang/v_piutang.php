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
              <a href="index.html" class="site_title"><i class="fa fa-shopping-bag"></i> <span>Prawiratama Mandiri!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url(); ?>assets/build/images/img.jpg" alt="..." class="img-circle profile_img">
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
                  <li><a href="<?=base_url(); ?>index.php/login/logout"><i class="fa fa-clone"></i>Log Out </a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
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
            </div> -->
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
            <div class="page-title">
              <div class="title_left">
                <h3>Data Piutang Customer</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-7 col-sm-7 col-xs-7">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                        <div id="reload">
                        <table class="table table-striped" id="mydata">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Pembayaran</th>
                                <th>Sisa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                        <!-- Datatable content goes here -->
                        </tbody>
                        </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-sm-5 col-xs-5" id="detailDiv" style="display: none">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                        <div id="reload">
                          <h3>Detail Hutang</h3>
                        <table class="table table-striped" id="mydata">
                        <thead>
                            <tr>
                                <th>Dealine</th>
                                <th>Nominal</th>
                                <th>Pembayaran</th>
                                <th>Sisa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="show_detail">
                        <!-- Datatable content goes here -->
                        </tbody>
                        </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- MODAL ADD -->
              <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3 class="modal-title" id="myModalLabel">Tambah Customer</h3>
                  </div>
                  <form class="form-horizontal">
                      <div class="modal-body">
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Nama Customer</label>
                              <div class="col-xs-9">
                                  <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Customer" style="width:335px;" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-xs-3" >Alamat</label>
                              <div class="col-xs-9">
                                  <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                              </div>
                          </div>
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Kota</label>
                              <div class="col-xs-9">
                                  <input name="kota" id="kota" class="form-control" type="text" placeholder="Kota" style="width:335px;" required>
                              </div>
                          </div>
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Telepon</label>
                              <div class="col-xs-9">
                                  <input name="telepon" id="telepon" class="form-control" type="text" placeholder="Telepon" style="width:335px;" required>
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
                      <h3 class="modal-title" id="myModalLabel">Bayar Hutang</h3>
                  </div>
                  <form class="form-horizontal" id="formBayar">
                      <div class="modal-body">
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >ID</label>
                              <div class="col-xs-9">
                                  <input name="id_edit" id="id_piutang2" class="form-control has-feedback-left" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                                  <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                              </div>
                          </div>
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Total Hutang</label>
                              <div class="col-xs-9">
                                  <input name="total_edit" id="total2" class="form-control has-feedback-left" type="text" placeholder="" style="width:335px;" required="" readonly="">
                                  <span class="fa fa-paper-plane form-control-feedback left" aria-hidden="true"></span>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-xs-3" >Deadline</label>
                              <div class="col-xs-9">
                                  <input name="deadline_edit" id="deadline2" class="form-control has-feedback-left" type="text" placeholder="" style="width:335px;" required readonly="">
                                  <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                              </div>
                          </div>
       
                          <div class="form-group">
                              <label class="control-label col-xs-3" >Sudah Dibayar</label>
                              <div class="col-xs-9">
                                  <input name="sudah_dibayar" id="sudah2" class="form-control has-feedback-left" type="text" placeholder="" style="width:335px;" required readonly="">
                                  <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-xs-3" >Pembayaran</label>
                              <div class="col-xs-9">
                                  <input name="pembayaran_edit" id="pembayaran2" class="form-control has-feedback-left" type="text" placeholder="Rp." style="width:335px;" required="" data-parsley-error-message="Tidak bisa melakukan Pembayaran dg nominal 0.">
                                  <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                              </div>
                          </div>
       
                      </div>
       
                      <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                          <button class="btn btn-info" id="btn_bayar">Bayar!</button>
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

    <script src="<?php echo base_url(); ?>assets/jquery-validation/parsley.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        tampil_data_piutang();   //pemanggilan fungsi tampil piutang.
        
        $('#mydata').dataTable( {
          "columnDefs": [
            { "width": "10%", "targets": 0 }
          ],
          searching: false,
          info: false
        });


        //fungsi tampil piutang
        function tampil_data_piutang(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/Piutang/data_piutang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      var sisa = data[i].sisa;
                      var isi = '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_customer+'" id="cekDetail">Cek Detail</a>';
                      if(sisa <= '0'){
                        isi = '<span class="label label-success">LUNAS</span>';
                      }
                      
                        html += '<tr>'+
                                '<td>'+data[i].id_customer+'</td>'+
                                '<td>'+data[i].nama_customer+'</td>'+
                                '<td>'+data[i].sum_total+'</td>'+
                                '<td>'+data[i].pembayaran+'</td>'+
                                '<td>'+data[i].sisa+'</td>'+
                                '<td style="text-align:right;">'+isi+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        //fungsi tampil detail piutang
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            // alert(id);
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Piutang/get_piutang')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      var sisa = data[i].sisa;
                      var isi = '<a href="javascript:;" class="btn btn-success btn-xs item_edit" data="'+data[i].id+'" id="bayar">Bayar!</a>';
                      if(sisa <= '0'){
                        isi = '<span class="label label-success">LUNAS</span>';
                      }
                        html += '<tr>'+
                                '<td>'+data[i].deadline+'</td>'+
                                '<td>'+data[i].total+'</td>'+
                                '<td>'+data[i].pembayaran+'</td>'+
                                '<td>'+data[i].sisa+'</td>'+
                                '<td style="text-align:right;">'+isi+'</td>'+
                                '</tr>';
                    }
                    $('#show_detail').html(html);
                }
            });

            $("#detailDiv").toggle( "slow" );
            
            return false;
        });

        $('#show_detail').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/Piutang/get_piutang_id')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id, total, deadline, pembayaran){
                        $('#ModalaEdit').modal('show');
                        $('[name="id_edit"]').val(data.id);
                        $('[name="total_edit"]').val(data.total);
                        $('[name="deadline_edit"]').val(data.deadline);
                        $('[name="sudah_dibayar"]').val(data.pembayaran);
                        $('[name="pembayaran_edit"]').val('');
                    });
                }
            });
            return false;
        });

        //Bayar Hutang
        $('#formBayar').parsley().on('form:submit', function() {
            var id=$('#id_piutang2').val();
            var pembayaran=$('#pembayaran2').val();
            var sudah=$('#sudah2').val();
            var newBayar = parseInt(pembayaran) + parseInt(sudah);
            
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/Piutang/bayar_hutang')?>",
                dataType : "JSON",
                data : {id:id , bayar:newBayar},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="total_edit"]').val("");
                    $('[name="deadline_edit"]').val("");
                    $('[name="sudah_dibayar"]').val("");
                    $('[name="pembayaran_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_piutang();
                    $("#detailDiv").toggle( "slow" );
                }
            });
            return false;
        });        
 
    });
 
</script>

  </body>
</html>
