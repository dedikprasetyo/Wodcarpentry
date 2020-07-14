<!doctype html>
<html class="no-js" lang="en">

<?php 
    foreach($profil as $row) {
    // echo "$value->nama_usaha";
    }
?> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin - Data Produk</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url() ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>images/<?php echo $row['logo']; ?>">

    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('c0_profil')?>">
                    <img src="<?php echo base_url()?>images/<?php echo $row['logo']; ?>" height="25" width="25" alt="Logo">
                </a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('c0_profil')?>"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url('c0_jenis_kayu');?>"> <i class="menu-icon fa fa-table"></i>Jenis Kayu </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c0_jenis_produk');?>"> <i class="menu-icon fa fa-table"></i>Jenis Produk </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('c0_data_produk');?>"> <i class="menu-icon fa fa-table"></i>Data Produk </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-6">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left" style="padding: 9px 0;">
                        <h5>Data Produk</h5>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    <div class="header-left" style="padding: 9px 0;  float: right;" >
                    <a href="#" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span class="text-right"> Tambah Data </span></a>
                </div>
            </div>
        </header>
        <!-- /header -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" style="line-height: 0.8" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Harga Awal</th>
                                            <th>Harga Diskon</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;                                          
                                            foreach ($dataProduk as $row2) {   
                                                $nama_cut = $row2['nama_produk']; 
                                                if (strlen($row2['nama_produk']) != 0 && strlen($row2['nama_produk']) > 25) {
                                                    $nama_cut = substr($row2['nama_produk'], 0, 25).' ...'; 
                                                }
                                                $deskripsi_cut = $row2['deskripsi_data_produk']; 
                                                if (strlen($row2['deskripsi_data_produk']) != 0 && strlen($row2['deskripsi_data_produk']) > 20) {
                                                    $deskripsi_cut = substr($row2['deskripsi_data_produk'], 0, 20).' ...'; 
                                                }
                                                $gambar_cut = $row2['gambar_produk']; 
                                                if (strlen($row2['gambar_produk']) != 0 && strlen($row2['gambar_produk']) > 20) {
                                                    $gambar_cut = substr($row2['gambar_produk'], 0, 20).' ...'; 
                                                }                     
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $nama_cut; ?></td>
                                            <td><?php echo $deskripsi_cut; ?></td>
                                            <td><?php echo $row2['harga_awal']; ?></td>
                                            <td><?php echo $row2['harga_akhir']; ?></td>
                                            <td><?php echo $gambar_cut; ?></td>
                                            <td>
                                                <a href="#" class="ubah" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Ubah" aria-hidden="true"></i></a>
                                                <a href="" class="delete" data-toggle="modal" onclick=""><i class="fa fa-trash-o" data-toggle="tooltip" title="Hapus" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php                                 
                                                $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <script src="<?php echo base_url() ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>