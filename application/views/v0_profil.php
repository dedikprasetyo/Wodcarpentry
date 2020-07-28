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
    <title>Halaman Admin - Profil</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>images/<?php echo $row['logo']; ?>">
    <link rel="stylesheet" href="<?php echo base_url()?>vendors/bootstrap/dist/css/bootstrap.min.css">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"rel="stylesheet"id="bootstrap-css">

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
    <!-- left Panel -->
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
                    <li class="active">
                        <a href="<?php echo base_url('c0_profil')?>"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo base_url('c0_jenis_kayu');?>"> <i class="menu-icon fa fa-table"></i>Jenis Kayu </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c0_jenis_produk');?>"> <i class="menu-icon fa fa-table"></i>Jenis Produk </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('c0_data_produk');?>"> <i class="menu-icon fa fa-table"></i>Data Produk </a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <!-- /left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-12">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left" style="padding: 9px 0;">
                        <h5>Profil</h5>
                    </div>
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
                                <div class="mx-auto d-block">
                                    <h5 class="text-sm-center mt-2 mb-1">
                                        <?php echo $row['nama_usaha']; ?>
                                    </h5><br>
                                    <img class="rounded-circle mx-auto d-block" src="<?php echo base_url()?>images/<?php echo $row['logo']; ?>" height="250" width="250" alt="Card image cap"><br>
                                    <div class="text-sm-center">Sejarah : <?php echo $row['sejarah']; ?></div>
                                    <div class="text-sm-center">Moto : <?php echo $row['moto']; ?></div>
                                    <div class="text-sm-center">Alamat :
                                        <i class="fa fa-map-marker"> </i> <?php echo $row['alamat']; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#tomboledittt" class="Ubah" onclick="modal_edit_profil(
                                        '<?php echo $row['id_profil']; ?>',
                                        '<?php echo $row['nama_usaha']; ?>',
                                        '<?php echo $row['logo']; ?>',                    
                                        '<?php echo $row['sejarah']; ?>',                    
                                        '<?php echo $row['moto']; ?>',                    
                                        '<?php echo $row['alamat']; ?>'                    
                                        );"> <!-- data-toggle="modal" -->
                                        <i class="fa fa-pencil-square-o" data-toggle="tooltip" title=" Ubah" aria-hidden="true"></i> Ubah Profil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /right-panel -->

    <!-- Edit Modal HTML Profil-->
    <div id="tomboledittt" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-size: 18px;">Edit Data Profil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form enctype="multipart/form-data" action="<?php echo base_url('c0_profil/editProfil'); ?>" method="post" class="form-horizontal" autocomplete="off">
                    <div class="modal-body">
                        <input hidden id="idProfilEdit" name="idProfilEdit"> <!-- hidden -->
                        <div class="form-group">
                            <label>Nama Usaha</label>
                            <input type="text" name="namaUsahaEdit" id="namaUsahaEdit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Sejarah</label>
                            <textarea type="text" name="sejarahEdit" id="sejarahEdit" class="form-control" rows="1" maxlength="255" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Moto</label>
                            <textarea type="text" name="motoEdit" id="motoEdit" class="form-control" rows="1" maxlength="255" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" name="alamatEdit" id="alamatEdit" class="form-control" rows="1" maxlength="255" required></textarea>
                        </div>

                        <div class="form-group" style="padding-bottom: 0px">
                            <label>Upload</label>

                            <div class="input-group image-preview">
                                <input type="text" id="logoEditImg" class="form-control image-preview-filename" disabled="disabled">   
                                <span class="input-group-btn"> <!-- edit ini blm fix -->
                                    <button 
                                        type="button" 
                                        class="btn btn-default image-preview-clear" 
                                        style="display:none; height: 35px;margin-top: -2px;" 
                                        onclick="document.getElementById('logoEdit').click()" 
                                    > 
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>                                    
                                    <div class="btn btn-default image-preview-input">
                                        <span class="image-preview-input-title">Pilih File</span>
                                        <input type="file" id="logoEdit" name="logoEdit" style="width:100px" onchange="document.getElementById('logoEditImg').value=this.value" accept="image/png, image/jpg, image/jpeg, image/gif" >    
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
        function modal_edit_profil(idProfilE,namaUsahaE,logoE,sejarahE,motoE,alamatE)
        {
            $('#tomboledittt').modal('show', {backdrop: 'false'});   
            document.getElementById('idProfilEdit').value = idProfilE;
            document.getElementById('namaUsahaEdit').value = namaUsahaE;  
            document.getElementById('sejarahEdit').value = sejarahE;   
            document.getElementById('motoEdit').value = motoE;   
            document.getElementById('alamatEdit').value = alamatE; 
            document.getElementById('logoEditImg').value = logoE; 
        }
    </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
    <script src="<?php echo base_url()?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

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