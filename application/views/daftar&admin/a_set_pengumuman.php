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
                                <label class="col-sm-3 control-label" for="periode">Input Periode :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="periode" id="periode" value="<?= $skl['periode_daftar']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-3 control-label" for="info">Input Brosur/Info :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="image/*" class="form-control" name="info" id="info" placeholder="<?= $skl['Info']; ?>">
                                    <p>*upload file dalam bentuk jpg/png/jpeg</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrong'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
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
                                <label class="col-sm-3 control-label" for="info">Input Brosur/Info :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="image/*" class="form-control" name="info" id="info" placeholder="<?= $skl['Info']; ?>">
                                    <p>*upload file dalam bentuk jpg/png/jpeg</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrong'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
                                        <strong><?= $skl['Info']; ?></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label" for="panduan">Input File Panduan :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="application/pdf" class="form-control" name="panduan" id="panduan" placeholder="<?= $skl['tata_cara']; ?>">
                                    <p>*upload file dalam bentuk pdf</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrongs'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
                                        <strong><?= $skl['tata_cara']; ?></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label" for="berkas">Input Contoh Berkas :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="application/pdf" class="form-control" name="berkas" id="berkas" placeholder="<?= $skl['berkas']; ?>">
                                    <p>*upload file dalam bentuk pdf</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrongss'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
                                        <strong><?= $skl['berkas']; ?></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label" for="foto">Input Contoh Foto :</label>
                                <div class="col-sm-5">
                                    <input type="file" accept="image/*" class="form-control" name="foto" id="foto" placeholder="<?= $skl['foto']; ?>">
                                    <p>*upload file dalam bentuk jpg/png/jpeg</p>
                                    <?php if ($this->session->flashdata('wrong')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('wrongsss'); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-3 alert alert-default">
                                    <div class="col-sm-3">
                                        <strong><?= $skl['foto']; ?></strong>
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
    <?php endforeach; ?>