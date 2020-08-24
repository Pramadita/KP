<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
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
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6" href="<?= base_url(); ?>admin_dash/pendaftar">
                    <section class="panel panel-featured-left panel-featured-dark">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-dark">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <div class="info">
                                            <a href="<?= base_url(); ?>admin_dash/pendaftar"><strong class="amount">Pendaftar</strong></a>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="<?= base_url(); ?>admin_dash/pendaftar">(Lihat)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-warning">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-warning">
                                        <i class="fa fa-bullhorn"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <div class="info">
                                            <a href="<?= base_url(); ?>admin_dash/upload_data"><strong class="amount">Edit Pengumuman</strong></a>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase" href="<?= base_url(); ?>admin_dash/upload_data">(Lihat)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($oc as $oc) : ?>
            <?php if ($oc['status'] == 1) : ?>
                <div class="alert alert-danger fade in nomargin">
                    <h4>Akses Pendaftaran</h4>
                    <form method="post" class="approval" action="<?= base_url('admin_dash/approve_o/' . $oc['id']); ?>">
                        <input type="submit" class="btn btn-info mt-xs mb-xs" name="buka" value="Buka Pendaftaran">
                    </form>
                    <h6>Status Pendaftaran ditutup</h6>
                </div>
            <?php elseif ($oc['status'] == 2) : ?>
                <div class="alert alert-info fade in nomargin">
                    <h4>Akses Pendaftaran</h4>
                    <form method="post" class="approval" action="<?= base_url('admin_dash/approve_c/' . $oc['id']); ?>">
                        <input type="submit" class="btn btn-danger mt-xs mb-xs" name="tutup" value="Tutup Pendaftaran">
                    </form>
                    <h6>Status Pendaftaran dibuka</h6>
                </div>
            <?php endif ?>
        <?php endforeach; ?>

    </div>
    <!-- end page -->
</section>
</div>


</section>