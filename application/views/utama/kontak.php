<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?= base_url('assets/images/atm.jpg'); ?>)">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Kontak Kami</h1>
                                <h2><span><a href="<?= base_url(); ?> home/index.php">Home</a> | Contact</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2 class="text-center">Informasi Kontak</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-info-wrap-flex">
                            <div class="con-info">
                                <p><span><i class="icon-location-2"></i></span> Jl.Babakan Randu, RT 05, RW 02, Desa Lemah Sugih, <br> Kecamatan Lemah Sugih, Kabupaten Majalengka</p>
                            </div>
                            <?php foreach ($sekolah as $skl) : ?>
                                <div class="con-info">
                                    <p><span><i class="icon-phone3 text-center"></i></span> <?= $skl['kontak1']; ?></p>
                                    <p><span><i class="icon-phone3 text-center"></i></span> <?= $skl['kontak2']; ?></p>
                                </div>
                            <?php endforeach; ?>
                            <div class="con-info">
                                <a href="https://www.facebook.com/pg/smkauliyateladanmandiri/posts/" target="_blank">
                                    <p><i class="icon-facebook"></i> SMK Auliya Teladan Mandiri</p>
                                </a>
                                <a href="https://www.youtube.com/channel/UCNtM1e7QIm9WuzIkdtBRxwA" target="_blank">
                                    <p><i class="icon-youtube"></i> SMK Auliya Teladan Mandiri</p>
                                </a>
                            </div>
                            <div class="con-info">
                                <a href="https://www.instagram.com/smkatm/" target="_blank">
                                    <p><i class="icon-instagram"></i> smkatm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>