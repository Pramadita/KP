<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center colorlib-heading animate-box">
                <h2>Status Pendaftar</h2>
                <p>Silahkan cek status kelulusan jika sudah mendaftar. Ketikkan nama calon siswa di kolom pencarian.</br>Jika terdapat keluhan dan pertanyaan, anda dapat menghubungi kontak kami yang tersedia.</p>
                <div class="table-responsive">
                    <table id="cek_status" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)">Nama Siswa</th>
                                <th onclick="sortTable(1)">NISN</th>
                                <th>Prodi</th>
                                <th>Asal Sekolah</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($siswa as $ssw) : ?>
                                <tr>
                                    <td><?= $ssw['Nama_Siswa'] ?></td>
                                    <td><?= $ssw['NISN'] ?></td>
                                    <td><?= $ssw['Prodi'] ?></td>
                                    <td><?= $ssw['Asal_Sekolah'] ?></td>
                                    <td><?php if ($ssw['status'] == 1) : ?>
                                            <label>Belum Diverifikasi</label>
                                        <?php elseif ($ssw['status'] == 2) : ?>
                                            <label class="text-primary">Lulus</label>
                                        <?php elseif ($ssw['status'] == 3) : ?>
                                            <label class="text-danger">Tidak Lulus</label>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>