<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center colorlib-heading animate-box">
                <h2>Status Pendaftar</h2>
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
                                            <label>Lulus</label>
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