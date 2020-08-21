<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?= base_url('assets/images/atm.jpg'); ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Info PPDB</h1>
                                <h2><span><a href="<?= base_url(); ?>home/index">Home</a> | Info</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div class="colorlib-event">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Info Pendaftaran</h2>
            </div>
        </div>
        <?php foreach ($sekolah as $skl) : ?>
            <img class="img-responsive" src="<?= base_url('sekolah/Info/') . $skl['Info']; ?>" style="display: block; margin: auto;">

        <?php endforeach; ?>
    </div>
</div>
<div class="colorlib-trainers">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2>Mengapa Harus Memilih SMK ATM</h2>
                <p>Dapat dilihat dari Visi Misinya yaitu menjadi SMK terapan dalam menghasilkan pelaku usaha
                    yang kreatif mandiri dan tangguh berbasis bidang keahlian. </br>
                    Lulusan <strong>dijamin</strong> mendapatkan kerja setelah lulus sekolah, bahkan mendapatkan uang sendiri saat sekolah.
                    Ditambah lagi setiap lulusan akan mendapatkan 9 sertifikat pelatihan dan pasti ijazah yang didapatkan legal.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 animate-box">
                <div class="trainers-entry">
                    <div class="trainer-img" style="background-image: url(<?= base_url('assets/images/plus.png'); ?>)"></div>
                    <div class="desc text-center">
                        <h3>Proram Unggulan</h3>
                        <span>Tahfidz, Bahasa Inggris, Kewirausahaan</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 animate-box">
                <div class="trainers-entry ">
                    <div class="trainer-img" style="background-image: url(<?= base_url('assets/images/college-icon.png'); ?>)"></div>
                    <div class="desc text-center">
                        <h3>Beasiswa Kuliah</h3>
                        <span>Siapapun mendapatkan kesempatan berkuliah</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 animate-box">
                <div class="trainers-entry">
                    <div class="trainer-img" style="background-image: url(<?= base_url('assets/images/rumah.png'); ?>)"></div>
                    <div class="desc text-center">
                        <h3>Tempat Tinggal</h3>
                        <span>Disediakan Asrama dan Pesantren apalagi bagi yang rumahnya jauh.</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 animate-box">
                <div class="trainers-entry">
                    <div class="trainer-img" style="background-image: url(<?= base_url('assets/images/icon-legal.png'); ?>)"></div>
                    <div class="desc text-center">
                        <h3>Legal</h3>
                        <span>Ijazah yang didapatkan sudah dipastikan legal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>