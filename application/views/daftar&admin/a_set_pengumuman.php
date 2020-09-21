<?php foreach ($sekolah as $skl) : ?>
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Set Pengumuman</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="<?= base_url(); ?>admin_dash/index">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                </ol>
            </div>
        </header>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="col-sm-12 alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Data Berhasil </strong><?= $this->session->flashdata('flash'); ?>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <section class="panel panel-dark">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                    <h2 class="panel-title">Upload Info</h2>
                </header>
                <div class="panel-body">
                    <form method="post" action="<?= base_url('admin_dash/update_info/' . $skl['id']) ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="periode">Input Periode :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="periode" id="periode" value="<?= $skl['periode_daftar']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="kontak1">Kontak 1 :</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="kontak1" id="kontak1" value="<?= $skl['kontak1']; ?>">
                                </div>
                                <label class="col-sm-2 control-label" for="kontak2">Kontak 2 :</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="kontak2" id="kontak2" value="<?= $skl['kontak2']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label" for="info">Input Brosur/Info :</label>
                                <div class="col-sm-6">
                                    <input type="file" accept="image/*" class="form-control" name="info" id="info" placeholder="<?= $skl['Info']; ?>" id="file" onchange="ValidateSize(this)">
                                    <p>*upload file dalam bentuk jpg/png/jpeg</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrong'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-4">
                                        <strong><?= $skl['Info']; ?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary pull-right">Edit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-12">
            <section class="panel panel-dark">
                <header class="panel-heading">
                    <h4 class="panel-title">Upload Panduan dan Ketentuan</h4>
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                </header>
                <div class="panel-body">
                    <form method="post" action="<?= base_url('admin_dash/update_tatacara/' . $skl['id']) ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label" for="panduan">Input File Panduan :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="application/pdf" class="form-control" name="panduan" id="panduan" placeholder="<?= $skl['tata_cara']; ?>" id="file" onchange="ValidateSize(this)">
                                    <p>*upload file dalam bentuk pdf</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrongs'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-12">
                                        <strong><?= $skl['tata_cara']; ?></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label" for="foto">Input Contoh Foto:</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="image/*" class="form-control" name="foto" id="foto" placeholder="<?= $skl['foto']; ?>" id="file" onchange="ValidateSize(this)">
                                    <p>*upload file dalam bentuk jpg/png/jpeg</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrongsss'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
                                        <div class="col-sm-12">
                                            <strong><?= $skl['foto']; ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <button type="submit" class="btn btn-primary pull-right">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-12">
            <section class="panel panel-dark">
                <header class="panel-heading">
                    <h4 class="panel-title">Print Kelulusan Perjurusan</h4>
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                    </div>
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <a href="<?= base_url(); ?>admin_dash/print_ATU" target="_blank" type="button" class="mb-xs mt-xs mr-xs btn btn-success"><i class="fa  fa-print"></i> Agribisnis Ternak Unggas</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="<?= base_url(); ?>admin_dash/print_pem" target="_blank" type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa  fa-print"></i> Pemasaran</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="<?= base_url(); ?>admin_dash/print_UPW" target="_blank" type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa  fa-print"></i> Usaha Perjalanan Wisata</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <?php endforeach; ?>
    <script type='text/javascript'>
        function ValidateSize(file) {
            var FileSize = file.files[0].size / 1024 / 1024; // in MB
            if (FileSize > 2) {
                alert('Ukuran File lebih dari 2 MB, Silahkan upload file sesuai ketentuan!');
                $(file).val(''); //for clearing with Jquery
            } else {

            }
        }
    </script>