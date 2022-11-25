<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container-fluid justify-content-between d-flex justify-content-between align-items-center mb-3">
    <div class="page-heading mt-4 align-items-center">
            <h3>Data Jurusan</h3>
        
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('pengaturan/beranda') ?>">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pendataan</li>
                        <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
                    </ol>
                </nav>
        </div>
    
    <div class="d-flex align-items-center">
            <div class="avatar avatar-xl  mb-3">
                <img src="<?= base_url('assets/images/faces/dendro.jpg') ?>" alt="rukkhadevata">
            </div>
            <div class="ms-3 name  p-3">
                <h5 class="font-bold"> <?= $this->session->userdata('nama'); ?> </h5>
                <p class="font-weight-light"> <?= $this->session->userdata('level'); ?>
                    <a href="<?= base_url('logout') ?>" class="bi bi-box-arrow-right"></a>
                </p>

            </div>
        </div>
       
    </div>

    <div id="content">
    <?php
        if ($this->session->userdata('level') == 'admin') { ?>
            <button type="button" class="btn btn-success"
             data-bs-toggle="modal" data-bs-target="#addModal">
             <i class="fas fa-plus"></i> Tambah Data
        </button>
            &nbsp;
            <a type="button" class="btn btn-primary" href="javascript:printDiv('id-elemen-yang-ingin-di-print');">
            <i class="fa-solid fa-print"></i>    
            Print</a>
        <?php } ?>


        <!-- Modal Add Product-->
        <form method="post" action="<?= base_url('pengaturan/simpan_jurusan') ?>" enctype="multipart/form-data">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah data jurusan</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Kode Jurusan</label>
                                <input type="text" class="form-control" name="kode_jurusan" placeholder="Masukkan Kode Jurusan...">
                            </div>

                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan" placeholder="Masukkan Nama Jurusan...">
                            </div>

                            <div class="form-group">
                                <label>Ketua Jurusan</label>
                                <input type="text" class="form-control" name="ketua_jurusan" placeholder="Masukkan Ketua Jurusan...">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- modal add product -->
        <?php
        if ($this->session->userdata('level') == 'admin') { ?>
        
        <?php } ?>
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('Edit')) { ?>
            <div class="alert alert-warning">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong>Berhasil!</strong> <?= $this->session->flashdata('Edit'); ?>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('Hapus')) { ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong>Berhasil!</strong> <?= $this->session->flashdata('Hapus'); ?>
            </div>
        <?php } ?>

        <?php if ($this->session->flashdata('duplicate')) { ?>
            <div class="alert alert-warning">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong>Duplicate Detected!</strong> <?= $this->session->flashdata('duplicate'); ?>
            </div>
        <?php } ?>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="">
                    <tr class="">
                        <th scope="" class="py-3 px-6 text-center">NO</th>
                        <th scope="" class="py-3 px-6 text-center">Kode Jurusan</th>
                        <th scope="" class="py-3 px-6 text-center">Nama Jurusan</th>
                        <th scope="" class="py-3 px-6 text-center">Ketua Jurusan</th>
                        <th scope="" class="py-3 px-6 text-center">Aksi</th>

                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($jurusan as $tampil) : // :(titik dua) = begin = endforeach;
                ?>
                    <tbody>
                        <tr class="">
                            <td class="py-4 px-4 text-center"><?= $no++ ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->kode_jurusan ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->nama_jurusan ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->ketua_jurusan ?></td>
                            <td class="py-4 px-4 text-center text-center">
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#edit<?= $tampil->kode_jurusan ?>"><a>EDIT</a></button>
                                <a class="btn text-center" data-bs-toggle="modal" data-bs-target="#hapus<?= $tampil->kode_jurusan ?>">HAPUS</a>
                            </td>

                        </tr>
                    <?php
                endforeach;
                    ?>
                    </tbody>
            </table>
        </div>

    </div>

    <!-- modal edit product -->


    <?php
    foreach ($jurusan as $edit_data) : // :(titik dua) = begin = endforeach;
    ?>

        <div class="modal fade" id="edit<?= $edit_data->kode_jurusan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit data jurusan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="<?= base_url('pengaturan/update_jurusan') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Kode Jurusan</label>
                                <input type="text" class="form-control" name="kode_jurusan" placeholder="Masukkan Kode Jurusan..." value="<?= $edit_data->kode_jurusan ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan" placeholder="Masukkan Nama Jurusan..." value="<?= $edit_data->nama_jurusan ?>">
                            </div>

                            <div class="form-group">
                                <label>Ketua Jurusan</label>
                                <input type="text" class="form-control" name="ketua_jurusan" placeholder="Masukkan Nama Ketua Jurusan..." value="<?= $edit_data->ketua_jurusan ?>">
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    <?php
    endforeach;
    ?>


<!-- modal edit product -->


<!-- modal delete product -->
<?php
foreach ($jurusan as $hapus) :

?>
    <div class="modal fade" id="hapus<?= $hapus->kode_jurusan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus data jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('pengaturan/delete_data_jurusan') ?>" enctype="multipart/form-data">
                        <p>
                            <label class="form-label">Apakah anda yakin ingin menghapus data?</label>
                            <input type="hidden" name="kode_jurusan" value="<?= $hapus->kode_jurusan ?>">

                        </p>
                        <div class="modal-footer">
                            <<button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
            <?php
            endforeach
            ?>

<!-- modal delete product -->