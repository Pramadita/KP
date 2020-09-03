<body>
    <h3 class="center">Daftar Siswa Lulus <?php echo $judul; ?></h3>
    <table class="table table-striped table-bordered centered">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>Prodi</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa as $ssw) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $ssw["Nama_Siswa"] ?></td>
                <td><?= $ssw["NISN"] ?></td>
                <td><?= $ssw["Prodi"] ?></td>
                <td><?= $ssw["Asal_Sekolah"] ?></td>
                <td><?php if ($ssw['status'] == 1) : ?>
                        <p>BELUM DI VERIFIKASI</p>
                    <?php elseif ($ssw['status'] == 2) : ?>
                        <p class="text-primary">LULUS</p>
                    <?php elseif ($ssw['status'] == 3) : ?>
                        <p class="text-danger">TIDAK LULUS</p>
                    <?php endif ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>