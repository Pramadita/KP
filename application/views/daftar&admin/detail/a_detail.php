<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail Pendaftar</h2>
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
    <!-- start  page -->
    <div class="col-md-12">
        <section class="panel panel-dark">
            <header class="panel-heading">
                <h4 class="panel-title">Detail Siswa</h4>
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
            </header>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <div class="col-sm-8">
                        <li>
                            <div class="form-group">
                                <div class="form-group"> <label class="col-sm-4 control-label dark" for="Prodi">Tingkat : </label>
                                    <div class="col-sm-4">
                                        <p><strong><?= $siswa["Tingkat"]; ?></strong> </p>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <div class="form-group"> <label class="col-sm-4 control-label dark" for="Prodi">Program Studi : </label>
                                    <div class="col-sm-4">
                                        <p><strong><?= $siswa["Prodi"]; ?> </strong></p>
                                    </div>
                                </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="Nama_Siswa">Nama : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["Nama_Siswa"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label " for="jk">Jenis Kelamin : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["Jenis_Kelamin"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="asek">Asal Sekolah : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["Asal_Sekolah"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="asek">NISN : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["NISN"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="ijazah">NO SERI IJAZAH : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["No_Ijazah"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="skhun">NO SERI SKHUN SMP/MTs : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["No_SKHUN"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="un">No UN SMP/MTs : </label>
                                <div class="col-sm-4">
                                    <p><strong><?= $siswa["No_UN"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="nik">NIK : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["NIK"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="tl">Tempat Tanggal Lahir : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["TTL"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="att">Alamat Tempat Tinggal : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Alamat_Tinggal"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="transport">Alat Transportasi : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Transportasi"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="jtinggal">Jenis Tinggal : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Jenis_Tinggal"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="rtinggal">Rencana Tinggal : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Rencana_Tinggal"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="pakaian">Ukuran Pakaian : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Ukuran_Pakaian"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="hp">No Handphone : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["No_HP"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="email">Email : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Email"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="bantuan">Jenis Bantuan : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["Jenis_Bantuan"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group"><label class="col-sm-4 control-label" for="kps">No KKS : </label>
                                <div class="col-sm-5">
                                    <p><strong><?= $siswa["No_KKS"]; ?></strong></p>
                                </div>
                            </div>
                        </li>
                        <li>
                        </li>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <h5 class="text-semibold text-dark text-uppercase"><?= $siswa["Foto"]; ?></h5>
                            <a href="<?= base_url(); ?>pendaftar/Foto_Siswa/<?= $siswa["Foto"]; ?>" data-plugin-lightbox data-plugin-options='{ "type":"image" }' title="<?= $siswa["Foto"]; ?>">
                                <img class="img-responsive" src="<?= base_url(); ?>pendaftar/Foto_Siswa/<?= $siswa["Foto"]; ?>" width="145">
                            </a>
                        </div>
                        <div class="row">
                            <h4>Status Siswa : </h4>
                            <?php if ($siswa['status'] == 1) : ?>
                                <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-success" name="verif" href="#verif">Lulus</a>
                                <div id="verif" class="modal-block modal-header-color modal-block-success mfp-hide">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            <h2 class="panel-title">Apakah anda yakin ?</h2>
                                        </header>
                                        <div class="panel-body">
                                            <div class="modal-wrapper">
                                                <div class="modal-icon">
                                                    <i class="fa fa-question-circle"></i>
                                                </div>
                                                <div class="modal-text">
                                                    <h4>Verifikasi</h4>
                                                    <p>Pilih satsus Kelulusan Siswa <strong>Lulus</strong>?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-sm-10 text-right">
                                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                                    </div>
                                                    <div>
                                                        <form method="post" class="approval" action="<?= base_url('admin_dash/approve_siswa/' . $siswa['id']); ?>">
                                                            <input type="submit" class="btn btn-success" name="conf" value="Confirm">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                                <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-danger" name="verif" href="#verif2">Tidak Lulus</a>
                                <div id="verif2" class="modal-block modal-header-color modal-block-danger mfp-hide">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            <h2 class="panel-title">Apakah anda yakin ?</h2>
                                        </header>
                                        <div class="panel-body">
                                            <div class="modal-wrapper">
                                                <div class="modal-icon">
                                                    <i class="fa fa-question-circle"></i>
                                                </div>
                                                <div class="modal-text">
                                                    <h4>Verifikasi</h4>
                                                    <p>Apakah anda yakin untuk memverifikasi <strong>Tidak Lulus</strong> ?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-sm-10 text-right">
                                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                                    </div>
                                                    <div>
                                                        <form method="post" class="approval" action="<?= base_url('admin_dash/no_approve_siswa/' . $siswa['id']); ?>">
                                                            <input type="submit" class="btn btn-danger" name="conf" value="Confirm">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>

                            <?php elseif ($siswa['status'] == 2) : ?>
                                <h3 class="text-success">LULUS</h3>
                                <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-warning" name="verif" href="#verif2">Batalkan Status</a>
                                <div id="verif2" class="modal-block modal-header-color modal-block-warning mfp-hide">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            <h2 class="panel-title">Apakah anda yakin ?</h2>
                                        </header>
                                        <div class="panel-body">
                                            <div class="modal-wrapper">
                                                <div class="modal-icon">
                                                    <i class="fa fa-question-circle"></i>
                                                </div>
                                                <div class="modal-text">
                                                    <h4>Verifikasi</h4>
                                                    <p>Apakah Anda Yakin <strong>Membatalkan Status</strong>?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-sm-10 text-right">
                                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                                    </div>
                                                    <div>
                                                        <form method="post" class="approval" action="<?= base_url('admin_dash/back_approve_siswa/' . $siswa['id']); ?>">
                                                            <input type="submit" class="btn btn-warning" name="conf" value="Confirm">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                            <?php elseif ($siswa['status'] == 3) : ?>
                                <h3 class="text-danger">TIDAK LULUS</h3>
                                <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-warning" name="verif" href="#verif2">Batalkan Status</a>
                                <div id="verif2" class="modal-block modal-header-color modal-block-warning mfp-hide">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            <h2 class="panel-title">Apakah anda yakin ?</h2>
                                        </header>
                                        <div class="panel-body">
                                            <div class="modal-wrapper">
                                                <div class="modal-icon">
                                                    <i class="fa fa-question-circle"></i>
                                                </div>
                                                <div class="modal-text">
                                                    <h4>Verifikasi</h4>
                                                    <p>Apakah Anda Yakin <strong>Membatalkan Status</strong>?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-sm-10 text-right">
                                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                                    </div>
                                                    <div>
                                                        <form method="post" class="approval" action="<?= base_url('admin_dash/back_approve_siswa/' . $siswa['id']); ?>">
                                                            <input type="submit" class="btn btn-warning" name="conf" value="Confirm">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </section>
                                </div>
                            <?php endif ?>
                            <a href="<?= base_url(); ?>admin_dash/edit/<?= $siswa["id"]; ?>"><button type="button" class="mb-xs mt-xs mr-xs btn-sm btn btn-info">Edit Data Siswa</button></a>
                            <a href="<?= base_url(); ?>admin_dash/pendaftar_proses"><button type="button" class="mb-xs mt-xs mr-xs btn-sm btn btn-primary">Kembali Ke Tabel Pendaftar</button></a>

                        </div>
                    </div>

                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel panel-info">
            <header class="panel-heading">
                <h4 class="panel-title">Data Orang Tua/Wali</h4>
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Data Ayah Kandung </h3>
                        <ul class="list-unstyled">
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="nayah">Nama Ayah : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Nama_Ayah"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="tlyah">Tahun Lahir Ayah : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Lahir_Ayah"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="jobayah">Pekerjaan Ayah : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Pekerjaan_Ayah"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="edua">Pendidikan Ayah : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Pendidikan_Ayah"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="hasila">Penghasilan Bulanan Ayah : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Penghasilan_Ayah"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h3>Data Ibu Kandung </h3>
                        <ul class="list-unstyled">
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="nibu">Nama Ibu : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Nama_Ibu"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="tlibu">Tahun Lahir Ibu : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Lahir_Ibu"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="jobibu">Pekerjaan Ibu : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Nama_Ibu"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="edui">Pendidikan Terakhir Ibu : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Pendidikan_Ibu"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="hasili">Penghasilan Ibu : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Penghasilan_Ibu"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3>Data Wali (Bukan Ayah/Ibu Kandung) </h3>
                        <ul class="list-unstyled">
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="nwali">Nama Wali : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Nama_Wali"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="tlwali">Tahun Lahir Wali : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Lahir_Wali"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="jobwali">Pekerjaan Wali : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Pekerjaan_Wali"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="eduw">Pendidikan Wali : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Pendidikan_Wali"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="hasilw">Penghasilan Bulanan Wali : </label>
                                    <div class="col-sm-5">
                                        <p><strong><?= $siswa["Penghasilan_Wali"]; ?></strong></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
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
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Tinggi Badan : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Tinggi_Badan"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="bb">Berat Badan : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Berat_Badan"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jarak">Jarak Ke Sekolah : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Jarak_Sekolah"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Waktu Tempuh Ke Sekolah : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Waktu_Tempuh"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Jumlah Saudara Kandung : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Saudara_Kandung"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel panel-info">
            <header class="panel-heading">
                <h4 class="panel-title">Prestasi</h4>
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
            </header>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres">Prestasi 1 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Prestasi_1"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres2">Prestasi 2 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Prestasi_2"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres3">Prestasi 3 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Prestasi_3"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel panel-info">
            <header class="panel-heading">
                <h4 class="panel-title">Beasiswa</h4>
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
            </header>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa">Beasiswa 1 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Beasiswa_1"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa2">Beasiswa 2 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Beasiswa_2"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa3">Beasiswa 3 : </label>
                            <div class="col-sm-5">
                                <p><strong><?= $siswa["Beasiswa_3"]; ?></strong></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>

                <h2 class="panel-title">Berkas Pendaftar</h2>
            </header>
            <div class="panel-body">
                <div class="popup-gallery">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/Akta_Lahir/<?= $siswa["Akta_Lahir"]; ?>" title="<?= $siswa["Akta_Lahir"]; ?>">
                                <p class="text-center"><?= $siswa["Akta_Lahir"]; ?></p>
                                <div class="img-responsive center">
                                    <img src="<?= base_url(); ?>pendaftar/Akta_Lahir/<?= $siswa["Akta_Lahir"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/KK/<?= $siswa["KK"]; ?>" title="<?= $siswa["KK"]; ?>">
                                <p class="text-center"><?= $siswa["KK"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/KK/<?= $siswa["KK"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/Bio_Raport/<?= $siswa["Raport"]; ?>" title="<?= $siswa["Raport"]; ?>">
                                <p class="text-center"><?= $siswa["Raport"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/Bio_Raport/<?= $siswa["Raport"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/KTP_Ayah/<?= $siswa["KTP_Ayah"]; ?>" title="<?= $siswa["KTP_Ayah"]; ?>">
                                <p class="text-center"><?= $siswa["KTP_Ayah"]; ?></p>
                                <div class="img-responsive center">
                                    <img src="<?= base_url(); ?>pendaftar/KTP_Ayah/<?= $siswa["KTP_Ayah"]; ?>" width="105">
                                </div>
                            </a>
                        </div>
                        <div class="form-group">
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/KTP_Ibu/<?= $siswa["KTP_Ibu"]; ?>" title="<?= $siswa["KTP_Ibu"]; ?>">
                                <p class="text-center"><?= $siswa["KTP_Ibu"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/KTP_Ibu/<?= $siswa["KTP_Ibu"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/Ijazah/<?= $siswa["Ijazah"]; ?>" title="<?= $siswa["Ijazah"]; ?>">
                                <p class="text-center"><?= $siswa["Ijazah"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/Ijazah/<?= $siswa["Ijazah"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/SKHUN/<?= $siswa["SKHUN"]; ?>" title="<?= $siswa["SKHUN"]; ?>">
                                <p class="text-center"><?= $siswa["SKHUN"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/SKHUN/<?= $siswa["SKHUN"]; ?>" width="105">
                                </div>
                            </a>
                            <a class="pull-left mb-xs mr-xs" href="<?= base_url(); ?>pendaftar/Surat_Lulus/<?= $siswa["Surat_Lulus"]; ?>" title="<?= $siswa["Surat_Lulus"]; ?>">
                                <p class="text-center"><?= $siswa["Surat_Lulus"]; ?></p>
                                <div class="img-responsive center col-sm-3">
                                    <img src="<?= base_url(); ?>pendaftar/Surat_Lulus/<?= $siswa["Surat_Lulus"]; ?>" width="105">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- end  page -->
</section>
</div>
</section>