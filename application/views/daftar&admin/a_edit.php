<section role="main" class="content-body">
    <header class="page-header">
        <h2>Edit Data Pendaftar</h2>
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
        <div class="col-xs-12">
            <section class="panel form-wizard" id="w4">
                <header class="panel-heading">
                    <h1 class="panel-title"><a href="/" class="logo pull-left">
                        </a>Edit Data Siswa
                    </h1>

                </header>
                <div class="panel-body">
                    <div class="wizard-progress wizard-progress-lg">
                        <div class="steps-progress">
                            <div class="progress-indicator"></div>
                        </div>
                        <ul class="wizard-steps">
                            <li class="active">
                                <a href="#w4-siswa" data-toggle="tab"><span>1</span>DATA SISWA</a>
                            </li>
                            <li>
                                <a href="#w4-ortuw" data-toggle="tab"><span>2</span>DATA</br>ORTU/WALI</a>
                            </li>
                            <li>
                                <a href="#w4-periodik" data-toggle="tab"><span>3</span>DATA PERIODIK</a>
                            </li>
                            <li>
                                <a href="#w4-presba" data-toggle="tab"><span>4</span>PRESTASI &<br />BEASISWA</a>
                            </li>
                            <li>
                                <a href="#w4-confirm" data-toggle="tab"><span>5</span>BERKAS &<br>PERSETUJUAN</a>
                            </li>
                        </ul>
                    </div>
                    <div class="well warning">
                        <h4> Field dengan label bertanda <b><i> * wajib diisi</i></b></h4>
                    </div>

                    <form method="post" action="<?= base_url('admin_dash/edit_form/') . $siswa['id']; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                        <div class="tab-content">
                            <div id="w4-siswa" class="tab-pane active">
                                <div class="form-group">
                                    <!--<label class="col-md-3 control-label" for="Tingkat">Tingkat * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="Tingkat" id="Tingkat">
                                            <option value="0" disabled>-Tingkat-</option>
                                            <?php foreach ($Tingkat as $tingkat) : ?>
                                                <?php if ($tingkat == $siswa['Tingkat']) : ?>
                                                    <option value="<?php echo $siswa["Tingkat"]; ?>" selected> <?= $tingkat; ?></option>
                                                <?php else : ?>
                                                    <option value="<?php echo $siswa["Tingkat"]; ?>"><?= $tingkat; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>-->
                                    <label class="col-md-2 control-label" for="Prodi">Program Studi * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="Prodi" id="Prodi">
                                            <option value="0" disabled>-Program Studi-</option>
                                            <?php foreach ($Prodi as $prodi) : ?>
                                                <?php if ($prodi == $siswa['Prodi']) : ?>
                                                    <option value="<?= $prodi; ?>" selected> <?= $prodi; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $prodi; ?>"><?= $prodi; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="Nama_Siswa">Nama Lengkap * :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Nama_Siswa" id="Nama_Siswa" value="<?= $siswa['Nama_Siswa']; ?>" required>
                                    </div>
                                </div>
                                <!--<div class=" form-group">
                                    <label class="col-sm-3 control-label" for="w4-jk">Jenis Kelamin * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jk" id="w4-jk">
                                            <option value="0" disabled>-Jenis Kelamin-</option>
                                            <?php foreach ($Jenis_Kelamin as $jk) : ?>
                                                <?php if ($jk == $siswa['Jenis_Kelamin']) : ?>
                                                    <option value="<?= $jk; ?>" selected> <?= $jk; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-asek">Asal Sekolah * :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="asek" id="w4-asek" value="<?= $siswa['Asal_Sekolah']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nisn">NISN * :</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="nisn" id="w4-nisn" value="<?= $siswa['NISN']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-ijazah">NOMOR SERI IJAZAH SMP/Mts :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="ijazah" id="w4-ijazah" value="<?= $siswa['No_Ijazah']; ?>">
                                        <b>DN-</b>
                                    </div>
                                    <label class="control-label">lihat pada lembar ijazah paling bawah</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-skhun">NOMOR SERI SKHUN SMP/Mts :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="skhun" id="w4-skhun" value="<?= $siswa['No_SKHUN']; ?>">
                                        <b>DN-</b>
                                    </div>
                                    <label class="control-label">lihat pada lembar SKHUN paling bawah</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-un">No Ujian Nasional SMP/Mts *:</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="un" id="w4-un" value="<?= $siswa['No_UN']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nik">NIK * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nik" id="w4-nik" value="<?= $siswa['NIK']; ?>" required>
                                    </div>
                                    <label class="control-label">lihat pada kartu keluarga</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-tl">Tempat Tanggal Lahir * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="tl" id="w4-tl" value="<?= $siswa['TTL']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-att"> Alamat Tempat Tinggal * :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="att" id="w4-att" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;" required><?= $siswa['Alamat_Tinggal']; ?></textarea>
                                        <label>maksimal 200 karakter</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-transport">Alat Transportasi ke Sekolah * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="transport" id="w4-transport">
                                            <option value="0" disabled>-Alat Transportasi ke Sekolah-</option>
                                            <?php foreach ($Transport as $transport) : ?>
                                                <?php if ($transport == $siswa['Transportasi']) : ?>
                                                    <option value="<?= $transport; ?>" selected> <?= $transport; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $transport; ?>"><?= $transport; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-jtinggal">Jenis Tinggal * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jtinggal" id="w4-jtinggal">
                                            <option value="0" disabled>-Jenis Tinggal-</option>
                                            <?php foreach ($Tinggal as $tinggal) : ?>
                                                <?php if ($tinggal == $siswa['Jenis_Tinggal']) : ?>
                                                    <option value="<?= $tinggal; ?>" selected> <?= $tinggal; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $tinggal; ?>"><?= $tinggal; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-rtinggal">Rencana Tinggal * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="rtinggal" id="w4-rtinggal">
                                            <option value="0" disabled>-Rencana Tinggal-</option>
                                            <?php foreach ($Tinggal as $tinggal) : ?>
                                                <?php if ($tinggal == $siswa['Rencana_Tinggal']) : ?>
                                                    <option value="<?= $tinggal; ?>" selected> <?= $tinggal; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $tinggal; ?>"><?= $tinggal; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-pakaian">Ukuran Pakaian * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="pakaian" id="w4-pakaian">
                                            <option value="0" disabled>-Ukuran Pakaian-</option>
                                            <?php foreach ($Pakaian as $pakaian) : ?>
                                                <?php if ($pakaian == $siswa['Ukuran_Pakaian']) : ?>
                                                    <option value="<?= $pakaian; ?>" selected> <?= $pakaian; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $pakaian; ?>"><?= $pakaian; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="control-label">mohon diisi sesuai ukuran tubuh</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-hp">No Handphone * :</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="hp" id="w4-hp" value="<?= $siswa['No_HP']; ?>">
                                    </div>
                                    <label>No Hp digunakan untuk komunikasi dan informasi sekolah</br>mohon isi dengan nomor yang aktif</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-email">Email * :</label>
                                    <div class="col-md-5">
                                        <input type="email" class="form-control" name="email" id="w4-email" value="<?= $siswa['Email']; ?>">
                                    </div>
                                    <label>mohon isi dengan email yang aktif</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-kps">NO KKS :</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="kps" id="w4-kps" value="<?= $siswa['No_KKS']; ?>">
                                        <i>*)KPS = Kartu Perlindungan Sosial</i>
                                    </div>
                                    <label>tidak perlu diisi jika bukan penerima kps</label>
                                </div>
                            </div>

                            <div id="w4-ortuw" class="tab-pane">
                                <h3>Data Ayah Kandung (Wajib Diisi)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nayah">Nama Ayah * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nayah" id="w4-nayah" value="<?= $siswa['Nama_Ayah']; ?>">
                                    </div>
                                    <label class="col-sm-2  control-label" for="w4-tlayah">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="tlayah" id="w4-tlayah" value="<?= $siswa['Lahir_Ayah']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobayah">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobayah" id="w4-jobayah">
                                            <option value="0" disabled>-Pekerjaan Ayah-</option>
                                            <?php foreach ($Pekerjaan as $job) : ?>
                                                <?php if ($job == $siswa['Pekerjaan_Ayah']) : ?>
                                                    <option value="<?= $job; ?>" selected> <?= $job; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $job; ?>"><?= $job; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-edua">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="edua" id="w4-edua">
                                            <option value="0" disabled>-Pendidikan Ayah-</option>
                                            <?php foreach ($Pendidikan as $edu) : ?>
                                                <?php if ($edu == $siswa['Pendidikan_Ayah']) : ?>
                                                    <option value="<?= $edu; ?>" selected> <?= $edu; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $edu; ?>"><?= $edu; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasila">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasila" id="w4-hasila">
                                            <option value="0" disabled>-Penghasilan Ayah-</option>
                                            <?php foreach ($Penghasilan as $penghasilan) : ?>
                                                <?php if ($penghasilan == $siswa['Penghasilan_Ayah']) : ?>
                                                    <option value="<?= $penghasilan; ?>" selected> <?= $penghasilan; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $penghasilan; ?>"><?= $penghasilan; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <h3>Data Ibu Kandung (Wajib Diisi)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nibu">Nama Ibu * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nibu" id="w4-nibu" value="<?= $siswa['Nama_Ibu']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-tlibu">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="tlibu" id="w4-tlibu" value="<?= $siswa['Lahir_Ibu']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobibu">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobibu" id="w4-jobibu">
                                            <option value="0" disabled>-Pekerjaan Ibu-</option>
                                            <?php foreach ($Pekerjaan as $job) : ?>
                                                <?php if ($job == $siswa['Pekerjaan_Ibu']) : ?>
                                                    <option value="<?= $job; ?>" selected> <?= $job; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $job; ?>"><?= $job; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-edui">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="edui" id="w4-edui">
                                            <option value="0" disabled>-Pendidikan Ibu-</option>
                                            <?php foreach ($Pendidikan as $edu) : ?>
                                                <?php if ($edu == $siswa['Pendidikan_Ibu']) : ?>
                                                    <option value="<?= $edu; ?>" selected> <?= $edu; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $edu; ?>"><?= $edu; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasili">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasili" id="w4-hasili">
                                            <option value="0" disabled>-Penghasilan Ibu-</option>
                                            <?php foreach ($Penghasilan as $penghasilan) : ?>
                                                <?php if ($penghasilan == $siswa['Penghasilan_Ibu']) : ?>
                                                    <option value="<?= $penghasilan; ?>" selected><?= $penghasilan; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $penghasilan; ?>"><?= $penghasilan; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>


                                <h3>Data Wali (Bukan Ayah/Ibu Kandung)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nwali">Nama Wali * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nwali" id="w4-nwali" value="<?= $siswa['Nama_Wali']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-tlwali">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="tlwali" id="w4-tlwali" value="<?= $siswa['Lahir_Wali']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobwali">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobwali" id="w4-jobwali">
                                            <option value="0" disabled>-Pekerjaan-</option>
                                            <?php foreach ($Pekerjaan as $job) : ?>
                                                <?php if ($job == $siswa['Pekerjaan_Wali']) : ?>
                                                    <option value="<?= $job; ?>" selected> <?= $job; ?></option>
                                                    <?php if ($job == $siswa[null]) : ?>
                                                        <option value="" selected disabled>-Pendidikan Terakhir-</option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $job; ?>"><?= $job; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-eduw">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="eduw" id="w4-eduw">
                                            <option value="" disabled>-Pendidikan Terakhir-</option>
                                            <?php foreach ($Pendidikan as $edu) : ?>
                                                <?php if ($edu == $siswa['Pendidikan_Wali']) : ?>
                                                    <option value="<?= $edu; ?>" selected> <?= $edu; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $edu; ?>"><?= $edu; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasilw">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasilw" id="w4-hasilw">
                                            <option value="" disabled>-Penghasilan-</option>
                                            <?php foreach ($Penghasilan as $penghasilan) : ?>
                                                <?php if ($penghasilan == $siswa['Penghasilan_Wali']) : ?>
                                                    <option value="<?= $penghasilan; ?>" selected><?= $penghasilan; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $penghasilan; ?>"><?= $penghasilan; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="w4-periodik" class="tab-pane">
                                <h2>Data Periodik (Wajib Diisi)</h2>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-tinggi">Tinggi Badan * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="tinggi" id="w4-tinggi" value="<?= $siswa['Tinggi_Badan']; ?>">
                                    </div>
                                    <label class="col-sm-1 control-label" for="w4-tinggi">cm</label>
                                    <label class="col-sm-2  control-label" for="w4-bb">Berat Badan * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="bb" id="w4-bb" value="<?= $siswa['Berat_Badan']; ?>">
                                    </div>
                                    <label class=" control-label" for="w4-tinggi">kg</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-jarak">Jarak Ke Sekolah * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="jarak" id="w4-jarak" value="<?= $siswa['Jarak_Sekolah']; ?>">
                                    </div>
                                    <label class="col-sm-1 control-label" for="w4-jarak">km</label>
                                    <label class="col-sm-2  control-label" for="w4-waktu">Waktu Tempuh Ke Sekolah * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="waktu" id="w4-waktu" value="<?= $siswa['Waktu_Tempuh']; ?>">
                                    </div>
                                    <label class=" control-label" for="w4-waktu">menit</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-saudara">Jumlah Saudara Kandung * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="saudara" id="w4-saudara" value="<?= $siswa['Saudara_Kandung']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div id="w4-presba" class="tab-pane">
                                <section id="prestasi">
                                    <h3>Prestasi (Jika Ada)</h3>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres">Prestasi 1 :</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="prestasi1" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Prestasi_1']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres2">Prestasi 2:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="prestasi2" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Prestasi_2']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres3">Prestasi 3:</label>
                                        <div class="col-sm-9"><textarea class="form-control" name="prestasi3" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Prestasi_3']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                </section>
                                <section id="beasiswa">
                                    <h3>Beassiwa (Jika Ada)</h3>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa">Beasiswa 1 :</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa1" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Beasiswa_1']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa2">Beasiswa 2:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa2" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Beasiswa_2']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa3">Beasiswa 3:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa3" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"><?= $siswa['Beasiswa_3']; ?></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div id="w4-confirm" class="tab-pane">
                                <h4 class="text-danger">Ketentuan Berkas dan Foto Siswa!</h4>
                                <h5 class="text-primary">Berkas.</h5>
                                <li>Scan/Foto berkas harus jelas!</li>
                                <li class="text-dark">Berkas yang <strong>wajib</strong> disertakan yaitu : Akta Kelahiran, Kartu Keluarga, Biodata Rapot SMP, KTP Ibu dan Ayah </br><strong>(Untuk penerima kartu bantuan</strong>, kartu bantuan <strong>wajib</strong> disertakan).</li>
                                <li class="text-dark">Berkas yang <strong>ikut disertakan jika sudah ada atau tidak wajib disertakan jika belum ada</strong> yaitu : Ijazah SMP, SKHUN SMP, Surat Kelulusan SMP.</li>
                                <li class="text-dark">Seluruh foto berkas dimasukkan dalam 1 jenis file berbentuk <strong> .pdf</strong>.</br>Bisa gunakan microsoft word, wps dan aplikasi lain untuk membuatnya. </li>
                                <li class="text-dark">Nama file disesuaikan dengan format.</li>
                                <p class="text-dark"> Format Penamaan Berkas = <strong>Berkas_Nama Lengkap Pendaftar_Jurusan yang dipilih.jenis file berkas</strong>, Contoh : Berkas_Lily Lyanna_Pemasaran.doc</p>
                                </br>
                                <h5 class="text-primary">Foto Siswa.</h5>
                                <li>Foto siswa harus jelas!</li>
                                <li class="text-dark"> Ukuran foto <strong>3x4 dengan format .jpg atau .jpeg atau.png</strong></li>
                                <li class="text-dark">Foto yang disertakan merupakan <strong>foto resmi dengan background berwarna biru</strong></li>
                                <li class="text-dark"><strong>Foto diupload terpisah dengan berkas.</strong> Tersedia form input foto setelah berkas.</li>
                                <li class="text-dark">Nama file disesuaikan dengan format.</li>
                                <p class="text-dark"> Format Penamaan Foto = <strong>Foto_Nama Lengkap Pendaftar_Jurusan yang dipilih.jenis file foto</strong>, Contoh : Foto_Lily Lyanna_Pemasaran.png</p>-->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-foto">Foto Siswa* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="foto" id="w4-foto" accept="image/*" value="<?= $siswa['Foto']; ?>">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-3 control-label" for="w4-akta">Akta Kelahiran* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="akta" id="w4-akta" accept="image/*" value="<?= $siswa['Akta_Lahir']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-kk">KK* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="kk" id="w4-kk" accept="image/*" value="<?= $siswa['KK']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-raport">Biodata Raport* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="raport" id="w4-raport" accept="image/*" value="<?= $siswa['Raport']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-ktpa">KTP Ayah* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="ktpa" id="w4-ktpa" accept="image/*" value="<?= $siswa['KTP_Ayah']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-ktpi">KTP Ibu* :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="ktpi" id="w4-ktpi" accept="image/*" value="<?= $siswa['KTP_Ibu']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-ijazah">Ijazah :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="ijazah" id="w4-ijazah" accept="image/*" value="<?= $siswa['Ijazah']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-skhun">SKHUN :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="skhun" id="w4-skhun" accept="image/*" value="<?= $siswa['SKHUN']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-sulus">Surat Kelulusan SMP :</label>
                                    <div class="col-sm-5">
                                        <input type="file" class="form-control" name="sulus" id="w4-sulus" accept="image/*" value="<?= $siswa['Surat_Lulus']; ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Edit</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <ul class="pager">
                        <li class="previous disabled">
                            <a><i class="fa fa-angle-left"></i> Previous</a>
                        </li>
                        <!--<li>
                                <button type="submit" class="btn btn-primary pull-right">Daftar</button>
                            </li>-->
                        <li class="next">
                            <a>Next <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                </form>

            </section>
        </div>
    </div>
    <!-- end: page -->

</section>
</div>