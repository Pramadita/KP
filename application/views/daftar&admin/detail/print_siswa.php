<body>
    <h3 class="center">Daftar Siswa Lulus <?php echo $judul; ?></h3>
    <table class="table table-striped table-bordered centered">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>Prodi</th>
            <th>Asal Sekolah</th>
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
            </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>