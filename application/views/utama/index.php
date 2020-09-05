<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">

            <li style="background-image:url(<?= base_url('assets/images/atm.jpg'); ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Selamat Datang di PPDB Online SMK Auliya Teladan Mandiri</h1>

                                <a href="<?= base_url(); ?>form_daftar/form_daftar" class="btn btn-primary btn-lg btn-learn">
                                    Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li style="background-image: url(<?= base_url('assets/images/murid.jpg'); ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Daftarkan Calon Siswa Disini</h1>
                                <p>
                                    <a href="<?= base_url(); ?>form_daftar/form_daftar" class="btn btn-primary btn-lg btn-learn">
                                        Daftar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>

<div id="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4 intro-wrap">
                <div class="intro-flex">
                    <div class="one-third color-1 animate-box">
                        <span class="icon"><i class="flaticon-market"></i></span>
                        <div class="desc">
                            <h3>Sebelum Daftar pastikan anda sudah membaca ketentuan pada panduan.</h3>

                            <p>
                                <a href="<?= base_url(); ?>form_daftar/form_daftar" class="view-more">
                                    Daftar</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="intro-flex">
                    <div class="one-third color-2 animate-box">
                        <span class="icon"><i class="flaticon-open-book"></i></span>
                        <div class="desc">
                            <h3>Download Panduan Lengkap</h3>
                            <?php foreach ($sekolah as $skl) : ?>
                                <p>
                                    <a href="<?= base_url('download/download_bantuan/') . $skl['id']; ?>" value="" class="view-more">Download</a>
                                </p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="one-third color-3 animate-box">
                        <div class="desc2">
                            <h3>The Leading Entrepreneurial School</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="about-desc animate-box">
                    <h2>Info PPDB Online</h2>
                    <p>PPDB (Penerimaan Peserta Didik Baru) Online merupakan sistem yang diciptakan untuk
                        otomasi PPDB yang biasanya dilaskanakan secara manual. Dengan adanya sistem ini maka
                        calon siswa yang akan mendaftar ke SMK Auliya Teladan Mandiri ini diberi kemudahan
                        untuk mendaftarkan diri. </p>
                    <div class="fancy-collapse-panel">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Periode
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p> <strong>Periode Pembukaan Pendaftaran</strong> </p>
                                        <?php foreach ($sekolah as $skl) : ?>
                                            <p><?= $skl['periode_daftar']; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Panduan
                                                Singkat
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p><br>1. Buka halaman Web...... pada browser anda (*pastikan
                                                anda
                                                sudah terkoneksi dengan internet)</br> 2. Klik "Daftar"
                                                untuk
                                                mendaftarkan calon siswa</br> 3. Isikan Form sesuai ketentuan</br> 4. Cek Status Kelulusan dari pihak sekolah melalui website ini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Tentang Sekolah</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(<?= base_url('assets/images/atuu.jpg'); ?>)">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Agribisnis Ternak Unggas</a></h3>
                                <p>Kompetensi yang dipelajari pada jurusan Agribisnis Ternak Unggas yaitu usaha peternakan unggas, pedaging, dan petelur, pakan ternak unggas dan pembibitan ternak unggas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(<?= base_url('assets/images/upw.jpg'); ?>)">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Usaha Perjalanan Wisata</a></h3>
                                <p>Jurusan ini mempelajari kegiatan komersial yang mengatur, menyediakan, dan menyelenggarakan pelayanan bagi bagi seseorang, sekelompok orang yang melakukan perjalanan dengan tujuan utama yaitu berwisata.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(<?= base_url('assets/images/pemasaran.jpg'); ?>)">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Pemasaran</a></h3>
                                <p>Pemasaran merupakan jurusan yang mempelajari perencanaan, pengelolaan, pelaksanaan, pengawasan, hingga evaluasi proses dan kegiatan pemasaran barang dan jasa, untuk memenuhi tujuan dari perusahaan atau organisasi tertentu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>