<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />


<section role="main" class="content-body">
    <header class="page-header">
        <h2>Data Pendaftar</h2>
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
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Data Pendaftar</h2>
        </header>
        <!--<?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="alert alert-succes alert-dismissible fade show" role="alert">
                            Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
        <?php endif; ?>-->
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="mb-md">
                        <p><a href="<?= base_url(); ?>admin_dash/tambah_daftar" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></p>
                    </div>
                </div>
                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="col-sm-9 alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Data Berhasil </strong><?= $this->session->flashdata('flash'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="table-responsive col-sm-12">
                <table id="pendaftar" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th onclick="sortTable(0)">Nama Siswa</th>
                            <th onclick="sortTable(1)">NISN</th>
                            <th>Prodi</th>
                            <th>Asal Sekolah</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($siswa as $ssw) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ssw['Nama_Siswa'] ?></td>
                                <td><?= $ssw['NISN'] ?></td>
                                <td><?= $ssw['Prodi'] ?></td>
                                <td><?= $ssw['Asal_Sekolah'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>admin_dash/detail/<?= $ssw['id']; ?>"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url(); ?>admin_dash/edit/<?= $ssw['id']; ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>admin_dash/hapus/<?= $ssw['id']; ?>" onclick="return confirm('Yakin untuk menghapus ?');"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td>
                                    <?php if ($ssw['status'] == 1) : ?>
                                        <p>BELUM DI VERIFIKASI</p>
                                    <?php elseif ($ssw['status'] == 2) : ?>
                                        <p class="text-primary">LULUS</p>
                                    <?php elseif ($ssw['status'] == 3) : ?>
                                        <p class="text-danger">TIDAK LULUS</p>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- end: page -->
</section>