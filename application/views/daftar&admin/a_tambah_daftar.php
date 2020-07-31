<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tambah Pendaftar</h2>
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
                        </a>Tambah Pendaftar
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

                    <form method="post" action="<?= base_url('form_daftar/tambah_form_admin'); ?>" enctype="multipart/form-data">
                        <div class="tab-content">
                            <div id="w4-siswa" class="tab-pane active">
                                <!--<div class="form-group">
                                    <label class="col-md-3 control-label" for="Tingkat">Tingkat * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="Tingkat" id="Tingkat" required>
                                            <option value="" selected disabled>-Pilih Tingkat-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2 control-label" for="Prodi">Program Studi * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="Prodi" id="Prodi" required>
                                            <option value="" selected disabled>-Pilih Program Studi-</option>
                                            <option value="Agribisnis Peternakan Unggas">Agribisnis Peternakan Unggas</option>
                                            <option value="Usaha Perjalanan Wisata">Usaha Perjalanan Wisata</option>
                                            <option value="Pemasaran">Pemasaran</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="Nama_Siswa">Nama Lengkap * :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Nama_Siswa" id="Nama_Siswa" required>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-jk">Jenis Kelamin * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jk" id="w4-jk">
                                            <option value="0" selected disabled>-Jenis Kelamin-</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-asek">Asal Sekolah * :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="asek" id="w4-asek" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nisn">NISN * :</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="nisn" id="w4-nisn" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-ijazah">NOMOR SERI IJAZAH SMP/Mts :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="ijazah" id="w4-ijazah">
                                        <b>DN-</b>
                                    </div>
                                    <label class="control-label">lihat pada lembar ijazah paling bawah</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-skhun">NOMOR SERI SKHUN SMP/Mts :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="skhun" id="w4-skhun">
                                        <b>DN-</b>
                                    </div>
                                    <label class="control-label">lihat pada lembar SKHUN paling bawah</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-un">No Ujian Nasional SMP/Mts *:</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="un" id="w4-un" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nik">NIK * :</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="nik" id="w4-nik" required>
                                    </div>
                                    <label class="control-label">lihat pada kartu keluarga</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-tl">Tempat Tanggal Lahir * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="tl" id="w4-tl" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-att"> Alamat Tempat Tinggal * :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="att" id="w4-att" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                        <label>maksimal 200 karakter</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-transport">Alat Transportasi ke Sekolah * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="transport" id="w4-transport" required>
                                            <option value="0" selected disabled>-Pilih Transport-</option>
                                            <option value="Jalan Kaki">Jalan Kaki</option>
                                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                            <option value="Kendaraan Umum">Kendaraan Umum</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-jtinggal">Jenis Tinggal * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jtinggal" id="w4-jtinggal" required>
                                            <option value="0" selected disabled>-Jenis Tinggal-</option>
                                            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                            <option value="Asrama">Asrama</option>
                                            <option value="Kost">Kost</option>
                                            <option value="Panti Asuhan">Panti Asuhan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-rtinggal">Rencana Tinggal * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="rtinggal" id="w4-rtinggal" required>
                                            <option value="0" selected disabled>-Rencana Tinggal-</option>
                                            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                            <option value="Asrama">Asrama</option>
                                            <option value="Kost">Kost</option>
                                            <option value="Panti Asuhan">Panti Asuhan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-pakaian">Ukuran Pakaian * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="pakaian" id="w4-pakaian" required>
                                            <option value="0" selected disabled>-Pilih Ukuran`-</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </div>
                                    <label class="control-label">mohon diisi sesuai ukuran tubuh</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-hp">No Handphone * :</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" name="hp" id="w4-hp" required>
                                    </div>
                                    <label>No Hp digunakan untuk komunikasi dan informasi sekolah</br>mohon isi dengan nomor yang aktif</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-email">Email * :</label>
                                    <div class="col-md-5">
                                        <input type="email" class="form-control" name="email" id="w4-email" required>
                                    </div>
                                    <label>mohon isi dengan email yang aktif</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-kps">Jenis Bantuan :</label>
                                    <div class="col-md-5">
                                        <select class="form-control mb-md" name="bantuan" id="w4-bantuan">
                                            <option value="0" selected disabled>-Jenis Bantuan-</option>
                                            <option value="Kartu Indonesia Pintar (KIP)">Kartu Indonesis Pintar (KIP)</option>
                                            <option value="Kartu Indonesia Sehat (KIS)">Kartu Indonesia Sehat (KIS)</option>
                                            <option value="PKH">PKH</option>
                                            <option value="KPS">KPS</option>
                                        </select>
                                    </div>
                                    <label>tidak perlu diisi jika bukan penerima bantuan</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-kps">No Kartu Bantuan :</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="kps" id="w4-kps">
                                    </div>
                                    <label>tidak perlu diisi jika bukan penerima bantuan</label>
                                </div>

                            </div>

                            <div id="w4-ortuw" class="tab-pane">
                                <h3>Data Ayah Kandung (Wajib Diisi)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nayah">Nama Ayah * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nayah" id="w4-nayah" required>
                                    </div>
                                    <label class="col-sm-2  control-label" for="w4-tlayah">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="tlayah" id="w4-tlayah" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobayah">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobayah" id="w4-jobayah" required>
                                            <option value="0" selected disabled>-Pilih Pekerjaan-</option>
                                            <option value="Tidak bekerja">Tidak Bekerja</option>
                                            <option value="Nelayan">Nelayan</option>
                                            <option value="Petani">Petani</option>
                                            <option value="Peternak">Peternak</option>
                                            <option value="Pns/tni/polri">Nelayan</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Buruh">Buruh</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-edua">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="edua" id="w4-edua" required>
                                            <option value="0" selected disabled>-Pilih Pendidikan-</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="D1-D3">D1-D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasila">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasila" id="w4-hasila" required>
                                            <option value="0" selected disabled>-Jumlah Penghasilan-</option>
                                            <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                            <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                            <option value="Lebih dari Rp.2.000.000">Lebih dari Rp.2.000.000</option>
                                        </select>
                                    </div>
                                </div>

                                <h3>Data Ibu Kandung (Wajib Diisi)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nibu">Nama Ibu * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nibu" id="w4-nibu">
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-tlibu">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="tlibu" id="w4-tlibu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobibu">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobibu" id="w4-jobibu" required>
                                            <option value="0" selected disabled>-Pilih Pekerjaan-</option>
                                            <option value="Tidak bekerja">Tidak Bekerja</option>
                                            <option value="Nelayan">Nelayan</option>
                                            <option value="Petani">Petani</option>
                                            <option value="Peternak">Peternak</option>
                                            <option value="Pns/tni/polri">Nelayan</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Buruh">Buruh</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-edui">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="edui" id="w4-edui" required>
                                            <option value="0" selected disabled>-Pilih Pendidikan-</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="D1-D3">D1-D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasili">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasili" id="w4-hasili" required>
                                            <option value="0" selected disabled>-Jumlah Penghasilan-</option>
                                            <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                            <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                            <option value="Lebih dari Rp.2.000.000">Lebih dari Rp.2.000.000</option>
                                        </select>
                                    </div>
                                </div>
                                <h3>Data Wali (Bukan Ayah/Ibu Kandung)</h3>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-nwali">Nama Ibu * :</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="nwali" id="w4-nwali">
                                    </div>
                                    <label class="col-sm-2 control-label" for="w4-tlwali">Tahun Lahir * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="tlwali" id="w4-tlwali">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-jobwali">Pekerjaan * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="jobwali" id="w4-jobwali">
                                            <option value="0" selected>-Pilih Pekerjaan-</option>
                                            <option value="Tidak bekerja">Tidak Bekerja</option>
                                            <option value="Nelayan">Nelayan</option>
                                            <option value="Petani">Petani</option>
                                            <option value="Peternak">Peternak</option>
                                            <option value="Pns/tni/polri">Pns/tni/polri</option>
                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Buruh">Buruh</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <label class="col-md-3 control-label" for="w4-eduw">Pendidikan Terakhir * :</label>
                                    <div class="col-md-3">
                                        <select class="form-control mb-md" name="eduw" id="w4-eduw">
                                            <option value="0" selected>-Pilih Pendidikan-</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                                            <option value="SD Sederajat">SD Sederajat</option>
                                            <option value="SMP Sederajat">SMP Sederajat</option>
                                            <option value="SMA Sederajat">SMA Sederajat</option>
                                            <option value="D1-D3">D1-D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="w4-hasilw">Penghasilan Bulanan * :</label>
                                    <div class="col-md-4">
                                        <select class="form-control mb-md" name="hasilw" id="w4-hasilw">
                                            <option value="0" selected>-Pilih Penghasilan-</option>
                                            <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                            <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                            <option value="Lebih dari Rp.2.000.000">Lebih dari Rp.2.000.000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="w4-periodik" class="tab-pane">
                                <h2>Data Periodik (Wajib Diisi)</h2>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-tinggi">Tinggi Badan * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="tinggi" id="w4-tinggi">
                                    </div>
                                    <label class="col-sm-1 control-label" for="w4-tinggi">cm</label>
                                    <label class="col-sm-2  control-label" for="w4-bb">Berat Badan * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="bb" id="w4-bb">
                                    </div>
                                    <label class=" control-label" for="w4-tinggi">kg</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-jarak">Jarak Ke Sekolah * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="jarak" id="w4-jarak">
                                    </div>
                                    <label class="col-sm-1 control-label" for="w4-jarak">km</label>
                                    <label class="col-sm-2  control-label" for="w4-waktu">Waktu Tempuh Ke Sekolah * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="waktu" id="w4-waktu">
                                    </div>
                                    <label class=" control-label" for="w4-waktu">menit</label>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="w4-saudara">Jumlah Saudara Kandung * :</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="saudara" id="w4-saudara">
                                    </div>
                                </div>
                            </div>

                            <div id="w4-presba" class="tab-pane">
                                <section id="prestasi">
                                    <h3>Prestasi (Jika Ada)</h3>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres">Prestasi 1 :</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="prestasi1" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres2">Prestasi 2:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="prestasi2" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-jepres3">Prestasi 3:</label>
                                        <div class="col-sm-9"><textarea class="form-control" name="prestasi3" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                </section>
                                <section id="beasiswa">
                                    <h3>Beassiwa (Jika Ada)</h3>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa">Beasiswa 1 :</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa1" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa2">Beasiswa 2:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa2" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-beasiswa3">Beasiswa 3:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="beasiswa3" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 74px;"></textarea>
                                            <label>maksimal 200 karakter</label>
                                        </div>
                                    </div>
                                </section>
                            </div>-->

                                <div id="w4-confirm" class="tab-pane">
                                    <h4 class="text-danger">Ketentuan Berkas dan Foto Siswa!</h4>
                                    <h5 class="text-primary">Berkas.</h5>
                                    <li>Scan/Foto berkas harus jelas!</li>
                                    <li class="text-dark">Berkas yang <strong>wajib</strong> disertakan yaitu : Akta Kelahiran, Kartu Keluarga, Biodata Rapot SMP, KTP Ibu dan Ayah </br><strong>(Untuk penerima kartu bantuan</strong>, kartu bantuan <strong>wajib</strong> disertakan).</li>
                                    <li class="text-dark">Berkas yang <strong>ikut disertakan jika sudah ada atau tidak wajib disertakan jika belum ada</strong> yaitu : Ijazah SMP, SKHUN SMP, Surat Kelulusan SMP.</li>
                                    <li class="text-dark">Seluruh foto berkas dimasukkan dalam 1 jenis file berbentuk <strong>.pdf</strong>.</br>Bisa gunakan microsoft word, wps dan aplikasi lain untuk membuatnya. </li>
                                    <li class="text-dark">Nama file disesuaikan dengan format.</li>
                                    <p class="text-dark"> Format Penamaan Berkas = <strong>Berkas_Nama Lengkap Pendaftar_Jurusan yang dipilih.jenis file berkas</strong>, Contoh : Berkas_Lily Lyanna_Pemasaran.doc</p>
                                    </br>
                                    <h5 class="text-primary">Foto Siswa.</h5>
                                    <li>Foto siswa harus jelas!</li>
                                    <li class="text-dark"> Ukuran foto <strong>3x4 dengan format .jpg atau .jpeg atau.png</strong></li>
                                    <li class="text-dark">Foto yang disertakan merupakan <strong>foto resmi dengan background berwarna biru</strong></li>
                                    <li class="text-dark"><strong>Foto diupload terpisah dengan berkas.</strong> Tersedia form input foto setelah berkas.</li>
                                    <li class="text-dark">Nama file disesuaikan dengan format.</li>
                                    <p class="text-dark"> Format Penamaan Foto = <strong>Foto_Nama Lengkap Pendaftar_Jurusan yang dipilih.jenis file foto</strong>, Contoh : Foto_Lily Lyanna_Pemasaran.png</p>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-akta">Berkas* :</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" name="berkas" id="w4-berkas" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="w4-kk">Foto Pendaftar* :</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" name="foto" id="w4-foto" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" name="terms" id="w4-terms">
                                                <label for="w4-terms">Saya menyatakan semua data yang dimasukkan adalah benar.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Daftar</button>
                                </div>

                            </div>
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