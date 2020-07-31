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
                    <div class="row">
                        <div class=" col-sm-8">
                            <li>
                                <div class="form-group">
                                    <div class="form-group"> <label class="col-sm-4 control-label dark" for="Prodi">Program Studi </label>
                                        <div class="col-sm-4">
                                            <label> : <?= $siswa["Prodi"]; ?> </label>
                                        </div>
                                    </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="Nama_Siswa">Nama </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["Nama_Siswa"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label " for="jk">Jenis Kelamin </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["Jenis_Kelamin"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="asek">Asal Sekolah </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["Asal_Sekolah"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="asek">NISN </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["NISN"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="ijazah">NOMOR SERI IJAZAH </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["No_Ijazah"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="skhun">SERI SKHUN SMP/MTs </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["No_SKHUN"]; ?></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group"><label class="col-sm-4 control-label" for="un">No Ujian Nasional SMP/MTs </label>
                                    <div class="col-sm-4">
                                        <label> : <?= $siswa["No_UN"]; ?></label>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class=" col-sm-4">
                            <h5 class="text-semibold text-dark text-uppercase"><?= $siswa["Foto"]; ?></h5>
                            <a href="<?= base_url(); ?>pendaftar/Foto/<?= $siswa["Foto"]; ?>" data-plugin-lightbox data-plugin-options='{ "type":"image" }' title="Caption. Can be aligned it to any side and contain any HTML.">
                                <img class="img-responsive" src="<?= base_url(); ?>pendaftar/Foto/<?= $siswa["Foto"]; ?>" width="145">
                            </a>
                        </div>
                    </div>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="nik">NIK </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["NIK"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tl">Tempat Tanggal Lahir </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["TTL"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="att">Alamat Tempat Tinggal </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Alamat_Tinggal"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="transport">Alat Transportasi ke Sekolah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Transportasi"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jtinggal">Jenis Tinggal </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Jenis_Tinggal"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="rtinggal">Rencana Tinggal </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Rencana_Tinggal"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="pakaian">Ukuran Pakaian </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Ukuran_Pakaian"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="hp">No Handphone </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["No_HP"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="email">Email </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Email"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="kps">No KKS </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["No_KKS"]; ?></label>
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
                <h4 class="panel-title">Data Orang Tua/Wali</h4>
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                </div>
            </header>
            <div class="panel-body">
                <h3>Data Ayah Kandung </h3>
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="nayah">Nama Ayah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Nama_Ayah"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tlyah">Tahun Lahir Ayah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Lahir_Ayah"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jobayah">Pekerjaan Ayah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Pekerjaan_Ayah"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="edua">Pendidikan Ayah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Pendidikan_Ayah"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="hasila">Penghasilan Bulanan Ayah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Penghasilan_Ayah"]; ?></label>
                            </div>
                        </div>
                    </li>
                </ul>
                <h3>Data Ibu Kandung </h3>
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="nibu">Nama Ibu </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Nama_Ibu"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tlibu">Tahun Lahir Ibu </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Lahir_Ibu"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jobibu">Pekerjaan Ibu </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Nama_Ibu"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="edui">Pendidikan Terakhir Ibu </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Pendidikan_Ibu"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="hasili">Penghasilan Ibu </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Penghasilan_Ibu"]; ?></label>
                            </div>
                        </div>
                    </li>
                </ul>
                <h3>Data Wali (Bukan Ayah/Ibu Kandung) </h3>
                <ul class="list-unstyled">
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="nwali">Nama Wali </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Nama_Wali"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tlwali">Tahun Lahir Wali </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Lahir_Wali"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jobwali">Pekerjaan Wali </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Pekerjaan_Wali"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="eduw">Pendidikan Wali </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Pendidikan_Wali"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="hasilw">Penghasilan Bulanan Wali </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Penghasilan_Wali"]; ?></label>
                            </div>
                        </div>
                    </li>
                </ul>
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
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Tinggi Badan </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Tinggi_Badan"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="bb">Berat Badan </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Berat_Badan"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jarak">Jarak Ke Sekolah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Jarak_Sekolah"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Waktu Tempuh Ke Sekolah </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Waktu_Tempuh"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="tinggi">Jumlah Saudara Kandung </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Saudara_Kandung"]; ?></label>
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
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres">Prestasi 1 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Prestasi_1"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres2">Prestasi 2 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Prestasi_2"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="jepres3">Prestasi 3 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Prestasi_3"]; ?></label>
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
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa">Beasiswa 1 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Beasiswa_1"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa2">Beasiswa 2 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Beasiswa_2"]; ?></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group"><label class="col-sm-4 control-label" for="beasiswa3">Beasiswa 3 </label>
                            <div class="col-sm-5">
                                <label> : <?= $siswa["Beasiswa_3"]; ?></label>
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
                <h2 class="panel-title">Berkas</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-semibold text-dark text-uppercase text-center"><?= $siswa["Berkas"]; ?></h5>
                        <a href="<?= base_url(); ?>pendaftar/Berkas/<?= $siswa["Berkas"]; ?>">
                            <embed class="responsive" src="<?= base_url(); ?>pendaftar/Berkas/<?= $siswa["Berkas"]; ?>" width="100%" height="600px" />
                        </a>
                    </div>
                </div>
        </section>
    </div>

    <?php if ($siswa['status'] == 1) : ?>
        <a class="mb-xs mt-xs mr-xs btn-sm modal-basic btn btn-warning" name="verif" href="#verif">Verifikasi</a>
        <div id="verif" class="modal-block modal-header-color modal-block-warning mfp-hide">
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
                            <p>Apakah anda yakin untuk memverifikasi ?</p>
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
                                    <input type="submit" class="btn btn-warning" name="conf" value="Confirm">
                                </form>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
        </div>
    <?php elseif ($siswa['status'] == 2) : ?>
        <div class="col-sm-10">
            <input type="submit" class="text-right" disabled value="LULUS">
        </div>
    <?php endif ?>
    <!-- end  page -->
</section>
</div>
</section>