<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>

      <li><a><i class="fa fa-desktop"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url(); ?>transaksi.html">Entry Transaksi</a></li>
          <li><a href="<?=base_url(); ?>transaksi/listTransaksi.html">List Penjualan</a></li>
        </ul>
      </li>
      
      <li><a><i class="fa fa-database"></i>Data <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url(); ?>barang.html">Data Barang</a></li>
          <li><a href="<?=base_url(); ?>customer.html">Data Customer</a></li>
          <li><a href="fixed_sidebar.html">Data Supplier</a></li>
          <li style="display: none;"><a href="<?=base_url(); ?>barang/addBarang.html">Data Barang</a></li>
        </ul>
      </li>
      
      <li><a><i class="fa fa-file"></i>Laporan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Laporan Penjualan</a></li>
          <li><a href="fixed_footer.html">Laporan Barang</a></li>
          <li><a href="fixed_footer.html">Laporan Keuangan</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-arrow-right"></i>Retur Barang <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Rencana Retur</a></li>
          <li><a href="fixed_footer.html">Sudah Retur</a></li>
        </ul>
      </li>
      
      <li><a><i class="fa fa-male"></i>Karyawan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_footer.html">Data Karyawan</a></li>
          <li><a href="fixed_sidebar.html">Manajemen Gaji</a></li>
          
        </ul>
      </li>
      
      <li><a><i class="fa fa-line-chart"></i>Keuangan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url(); ?>piutang.html">Piutang</a></li>
          <li><a href="fixed_sidebar.html">Hutang</a></li>
          
        </ul>
      </li>
      
      <li><a href="<?=base_url(); ?>login/logout"><i class="fa fa-clone"></i>Log Out </a></li>
    </ul>
  </div>

</div>
<!-- /sidebar menu-->