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
    <title>Halaman Admin - Jenis Kayu</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url() ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>images/<?php echo $row['logo']; ?>">

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
                    <img src="<?php echo base_url() ?>images/<?php echo $row['logo']; ?>" height="25" width="25" alt="Logo">
                </a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('c0_profil')?>"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="<?php echo base_url('c0_jenis_kayu');?>"> <i class="menu-icon fa fa-table"></i>Jenis Kayu </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c0_jenis_produk');?>"> <i class="menu-icon fa fa-table"></i>Jenis Produk </a>
                    </li>
                    <li>
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
                        <h5>Jenis Kayu</h5>
                    </div>
                    
                </div>
                <div class="col-sm-6">
                    <div class="header-left" style="padding: 9px 0;  float: right;" >
                    <a href="#tambahjeniskayu" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span class="text-right"> Tambah Data </span></a>
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
                                            <th>Jenis Kayu</th>
                                            <th>Deskripsi Jenis Kayu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;                                          
                                            foreach ($jenisKayu as $row2) {   
                                                $jenis_kayu_cut = $row2['jenis_kayu']; 
                                                if (strlen($row2['jenis_kayu']) != 0 && strlen($row2['jenis_kayu']) > 20) {
                                                    $jenis_kayu_cut = substr($row2['jenis_kayu'], 0, 21).' ...'; 
                                                }
                                                $deskripsi_cut = $row2['deskripsi_kayu']; 
                                                if (strlen($row2['deskripsi_kayu']) != 0 && strlen($row2['deskripsi_kayu']) > 100) {
                                                    $deskripsi_cut = substr($row2['deskripsi_kayu'], 0, 101  ).' ...'; 
                                                }                     
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $jenis_kayu_cut; ?></td>
                                            <td><?php echo $deskripsi_cut; ?></td>
                                            <td>
                                                <a href="#" class="ubah" onclick=""><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Ubah" aria-hidden="true"></i></a>


                                                <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_hapus_jenis_kayu(
                                                        '<?php echo $row2['id_jenis_kayu']; ?>'
                                                    );">
                                                    <i class="fa fa-trash-o" data-toggle="tooltip" title="Hapus" aria-hidden="true"></i>
                                                </a>
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

    <!-- Tambah Modal Jenis Kayu -->
    <div id="tambahjeniskayu" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollmodalLabel">Tambah Jenis Kayu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('c0_jenis_kayu/tambah_jenis_kayu'); ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Jenis Kayu</label>
                            <input type="text" class="form-control" id="jjenisKayu" name="jjenisKayu" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Jenis Kayu</label>
                            <textarea type="text" class="form-control" id="deskJenisKayu"  name="deskJenisKayu" rows="3" maxlength="255"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>   
                </form>         
            </div>
        </div>
    </div>

    <div id="hapusjeniskayu" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">            
                        <h4 class="modal-title" style="font-size: 18px;">Hapus Data Jenis Kayu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">          
                        <p>Yakin ingin menghapus data ini?</p>
                        <p class="text-warning"><small></small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                        <a href="" id="idHapusJenisKayu"><input type="button" class="btn btn-danger" value="Hapus"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function confirm_modal_hapus_jenis_kayu(delete_url){
            $('#hapusjeniskayu').modal('show', {backdrop: 'static'});
            document.getElementById('idHapusJenisKayu').setAttribute('href' ,"c0_jenis_kayu/hapus_jenis_kayu/"+delete_url);
        }

    </script>

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