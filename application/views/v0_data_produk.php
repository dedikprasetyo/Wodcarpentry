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
    <link rel="apple-touch-icon" href="<?php echo base_url()?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>images/<?php echo $row['logo']; ?>">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
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
            </div>
        </nav>
    </aside>
    <!-- /left-panel -->

    <!-- right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- header-->
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
                    <a href="#tambahdataproduk" data-toggle="modal"><i class="fa fa-plus-square" aria-hidden="true"></i><span class="text-right"> Tambah Data </span></a>
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
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Jenis Produk</th>
                                            <th>Jenis Kayu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no = 1;                                          
                                            foreach ($dataProduk as $row2) {   
                                                $nama_cut = $row2['nama_produk']; 
                                                if (strlen($row2['nama_produk']) != 0 && strlen($row2['nama_produk']) > 15) {
                                                    $nama_cut = substr($row2['nama_produk'], 0, 15).' ...'; 
                                                }
                                                $deskripsi_cut = $row2['deskripsi_data_produk']; 
                                                if (strlen($row2['deskripsi_data_produk']) != 0 && strlen($row2['deskripsi_data_produk']) > 10) {
                                                    $deskripsi_cut = substr($row2['deskripsi_data_produk'], 0, 10).' ...'; 
                                                }
                                                $gambar_cut = $row2['gambar_produk']; 
                                                if (strlen($row2['gambar_produk']) != 0 && strlen($row2['gambar_produk']) > 15) {
                                                    $gambar_cut = substr($row2['gambar_produk'], 0, 15).' ...';
                                                }   
                                                $jp_cut = $row2['jenis_produk']; 
                                                if (strlen($row2['jenis_produk']) != 0 && strlen($row2['jenis_produk']) > 15) {
                                                    $jp_cut = substr($row2['jenis_produk'], 0, 15).' ...';
                                                }  
                                                $jk_cut = $row2['jenis_kayu']; 
                                                if (strlen($row2['jenis_kayu']) != 0 && strlen($row2['jenis_kayu']) > 15) {
                                                    $jk_cut = substr($row2['jenis_kayu'], 0, 15).' ...';
                                                }                    
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $nama_cut; ?></td>
                                            <td><?php echo $deskripsi_cut; ?></td>
                                            <td><del><?php echo $row2['harga_awal'];?></del><?php echo " ".$row2['harga_akhir']; ?></td>
                                            <td><?php echo $gambar_cut; ?></td>
                                            <td><?php echo $jp_cut;?></td>
                                            <td><?php echo $jk_cut?></td>
                                            <td>
                                                <a href="#editdataproduk" class="Ubah" onclick="modal_edit_dataproduk(
                                                    '<?php echo $row2['id_produk']; ?>',
                                                    '<?php echo $row2['id_jenis_produk']; ?>',
                                                    '<?php echo $row2['id_jenis_kayu']; ?>',
                                                    '<?php echo $row2['nama_produk']; ?>',       
                                                    '<?php echo $row2['deskripsi_data_produk']; ?>',       
                                                    '<?php echo $row2['harga_awal']; ?>',       
                                                    '<?php echo $row2['harga_akhir']; ?>',       
                                                    '<?php echo $row2['gambar_produk']; ?>',       

                                                    '<?php echo $row2['gambar_jkayu']; ?>'                    
                                                    );">
                                                    <i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Ubah" aria-hidden="true"></i>
                                                </a>
                                                <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_dproduk(
                                                        '<?php echo $row2['id_produk']; ?>'
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
            </div>
        </div>
    </div>
    <!-- /right Panel -->

    <!-- Tambah Modal Data Produk -->
    <div id="tambahdataproduk" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="scrollmodalLabel">Tambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('c0_data_produk/tambah_data_produk'); ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="namaProduk" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Produk</label>
                            <textarea type="text" class="form-control" id="deskProduk"  name="deskProduk" rows="1" maxlength="1000"></textarea>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Harga Awal Produk</label>
                            <input type="text" class="form-control" id="hargaAwal" name="hargaAwal" maxlength="255" placeholder="Contoh : Rp10.000,00" required>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Harga Akhir Produk</label>
                            <input type="text" class="form-control" id="hargaAkhir" name="hargaAkhir" maxlength="255" placeholder="Contoh : Rp10.000,00" required>
                        </div>
                        
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Jenis Produk</label>
                            <select class="form-control" id="jjenisProduk" name="jjenisProduk">
                                <?php foreach($listJenisProduk as $rowX):?>
                                    <option value="<?php echo $rowX->id_jenis_produk;?>">
                                        <?php echo $rowX->jenis_produk;?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Jenis Kayu</label>
                            <select class="form-control" id="jjenisKayu" name="jjenisKayu">
                                <?php foreach($listJenisKayu as $rowY):?>
                                    <option value="<?php echo $rowY->id_jenis_kayu;?>">
                                        <?php echo $rowY->jenis_kayu;?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload</label>
                            <div class="input-group image-preview">
                                <input type="text" id="gambarProdukTambahImg" class="form-control image-preview-filename" disabled="disabled">   
                                <span class="input-group-btn"> 
                                    <button 
                                        type="button" 
                                        class="btn btn-default image-preview-clear" 
                                        style="display:none; height: 35px;margin-top: -2px;" 
                                        onclick="document.getElementById('gambarProdukTambah').click()" 
                                    > 
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" id="gambarProdukTambah" name="gambarProdukTambah" style="width:100px" onchange="document.getElementById('gambarProdukTambahImg').value=this.value" accept="image/png, image/jpg, image/jpeg, image/gif" >    
                                    </div>
                                </span>
                            </div>
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

    <!-- Edit Modal Data Produk -->
    <div id="editdataproduk" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-size: 18px;">Ubah Data Produk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('c0_data_produk/edit_data_produk'); ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <input hidden id="idProdukEdit" name="idProdukEdit"> 
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" id="namaProdukEdit" name="namaProdukEdit" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Produk</label>
                            <textarea type="text" class="form-control" id="deskProdukEdit"  name="deskProdukEdit" rows="1" maxlength="1000"></textarea>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Harga Awal Produk</label>
                            <input type="text" class="form-control" id="hargaAwalEdit" name="hargaAwalEdit" maxlength="255" required>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Harga Akhir Produk</label>
                            <input type="text" class="form-control" id="hargaAkhirEdit" name="hargaAkhirEdit" maxlength="255" required>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Jenis Produk</label>
                            <select class="form-control" id="idJenisProdukEdit" name="idJenisProdukEdit">
                                <?php foreach($listJenisProduk as $rowX):?>
                                    <option value="<?php echo $rowX->id_jenis_produk;?>">
                                        <?php echo $rowX->jenis_produk;?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6" style="padding-right: 0px; padding-left: 0px;">
                            <label>Jenis Kayu</label>
                            <select class="form-control" id="idJenisKayuEdit" name="idJenisKayuEdit">
                                <?php foreach($listJenisKayu as $rowY):?>
                                    <option value="<?php echo $rowY->id_jenis_kayu;?>">
                                        <?php echo $rowY->jenis_kayu;?>
                                    </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload</label>
                            <div class="input-group image-preview">
                                <input type="text" id="gambarProdukEditImg" class="form-control image-preview-filename" disabled="disabled">   
                                <span class="input-group-btn"> <!-- edit ini blm fix -->
                                    <button 
                                        type="button" 
                                        class="btn btn-default image-preview-clear" 
                                        style="display:none; height: 35px;margin-top: -2px;" 
                                        onclick="document.getElementById('gambarProdukEdit').click()" 
                                    > 
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" id="gambarProdukEdit" name="gambarProdukEdit" style="width:100px" onchange="document.getElementById('gambarProdukEditImg').value=this.value" accept="image/png, image/jpg, image/jpeg, image/gif" >    
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function modal_edit_dataproduk(idProdukE,idJenisProdukE,idJenisKayuE,namaProdukE,deskProdukE,
            hargaAwalE,hargaAkhirE,gambarProdukE)
        {
            $('#editdataproduk').modal('show', {backdrop: 'false'});       
            document.getElementById('idProdukEdit').value = idProdukE;
            document.getElementById('idJenisProdukEdit').value = idJenisProdukE;  
            document.getElementById('idJenisKayuEdit').value = idJenisKayuE;   
            document.getElementById('namaProdukEdit').value = namaProdukE;  
            document.getElementById('deskProdukEdit').value = deskProdukE;   
            document.getElementById('hargaAwalEdit').value = hargaAwalE;   
            document.getElementById('hargaAkhirEdit').value = hargaAkhirE;   
            document.getElementById('gambarProdukEditImg').value = gambarProdukE;   

        }
    </script>

    <!-- Hapus Modal Data Produk -->
    <div id="hapusdataproduk" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">            
                        <h4 class="modal-title" style="font-size: 18px;">Hapus Data Produk</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">          
                        <p>Yakin ingin menghapus data ini?</p>
                        <p class="text-warning"><small></small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Batal">
                        <a href="" id="idHapusDataProduk"><input type="button" class="btn btn-danger" value="Hapus"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function confirm_modal_dproduk(delete_url){
            $('#hapusdataproduk').modal('show', {backdrop: 'static'});
            document.getElementById('idHapusDataProduk').setAttribute('href',"c0_data_produk/hapus_data_produk/"+delete_url);
        }
    </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url()?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url()?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/init-scripts/data-table/datatables-init.js"></script>
</body>
</html>