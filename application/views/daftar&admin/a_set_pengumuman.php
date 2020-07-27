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
                                    <input type="text" class="form-control" name="periode" id="periode" placeholder="<?= $skl['periode_daftar']; ?>" required>
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
                    <h4 class="panel-title">Data Periodik</h4>
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
                                    <input type="file" class="form-control" name="panduan" id="panduan" placeholder="<?= $skl['tata_cara']; ?>" required>
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