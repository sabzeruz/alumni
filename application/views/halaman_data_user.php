<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container-fluid justify-content-between d-flex justify-content-between align-items-center mb-3">
        <div class="page-heading mt-4 align-items-center">
            <h3>Data User</h3>

            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('pengaturan/beranda') ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendataan</li>
                    <li class="breadcrumb-item active" aria-current="page">Data User</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex align-items-center">
            <div class="avatar avatar-xl  mb-3">
                <img src="<?= base_url('assets/images/faces/dendro.jpg') ?>" alt="rukkhadevata">
            </div>
            <div class="ms-3 name  p-3">
                <h5 class="font-bold">
                    <?= $this->session->userdata('nama'); ?>
                </h5>
                <p class="font-weight-light">
                    <?= $this->session->userdata('level'); ?>
                        <a href="<?= base_url('logout') ?>" class="bi bi-box-arrow-right"></a>
                </p>

            </div>
        </div>

    </div>


    <div id="content">
        <?php
        if ($this->session->userdata('level') == 'admin') { ?>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModalUser">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
        &nbsp;
        <a type="button" class="btn btn-primary" href="javascript:printDiv('id-elemen-yang-ingin-di-print');">
            <i class="fa-solid fa-print"></i>
            Print</a>
        <?php } ?>

    </div>

    <?php
    if ($this->session->userdata('level') == 'admin') { ?>

    <?php } ?>
    <?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
        <strong>Success!</strong>
        <?= $this->session->flashdata('success'); ?>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('Edit')) { ?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
        <strong>Berhasil!</strong>
        <?= $this->session->flashdata('Edit'); ?>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('Hapus')) { ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
        <strong>Berhasil!</strong>
        <?= $this->session->flashdata('Hapus'); ?>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('duplicate')) { ?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
        <strong>Duplicate Detected!</strong>
        <?= $this->session->flashdata('duplicate'); ?>
    </div>
    <?php } ?>
    <br>
    <br>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Data User
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped display responsive nowrap" id="table1" style="width:100%">
                        <thead>
                            <tr>

                                <th class="py-4 px-4 text-center text-center">Nama</th>
                                <th class="py-4 px-4 text-center text-center">Username</th>
                                <th class="py-4 px-4 text-center text-center">Password</th>
                                <th class="py-4 px-4 text-center text-center">Level</th>
                                <th class="py-4 px-4 text-center text-center">Status</th>
                                <th class="py-4 px-4 text-center text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $no = 1;
                        foreach ($user as $tampil): // :(titik dua) = begin = endforeach;
                        ?>
                            <tr>
                                <td class="py-4 px-4 text-center text-center">
                                    <?= $tampil->nama ?>
                                </td>
                                <td class="py-4 px-4 text-center text-center">
                                    <?= $tampil->username ?>
                                </td>
                                <td class="py-4 px-4 text-center text-center">
                                    <?= $tampil->password ?>
                                </td>
                                <td class="py-4 px-4 text-center text-center">
                                    <?= $tampil->level ?>
                                </td>
                                <td class="py-4 px-4 text-center text-center">
                                    <?php if (($tampil->status == '0')) { ?>

                                    <span class="badge bg-danger">Tidak Aktif</span>

                                    <?php } else { ?>

                                    <span class="badge bg-success">Aktif</span>

                                    <?php } ?>

                                </td>
                                <td class="py-4 px-4 text-center text-center">
                                    <button class="btn text-center" data-bs-toggle="modal"
                                        data-bs-target="#edit<?= $tampil->id_user ?>"><a>EDIT</a></button>
                                    <button class="btn text-center" data-bs-toggle="modal"
                                        data-bs-target="#hapus_data<?= $tampil->id_user ?>"><a>HAPUS</a></button>
                                </td>

                            </tr>
                            <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

</div>


<!-- Modal Add Product-->
<form method="post" action="<?= base_url('pengaturan/simpan_user') ?>" enctype="multipart/form-data">
    <div class="modal fade" id="addModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" name="id" placeholder="Masukkan ID...">
                    </div> -->

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username...">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukkan Password...">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control rounded-0" name="level">
                            <option value=""> -- Pilih Level User -- </option>
                            <option value="admin"> Admin </option>
                            <option value="alumni"> Alumni </option>
                            <option value="guru"> Guru </option>
                            <option value="perusahaan"> Perusahaan </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control rounded-0" name="status">
                            <option value=""> -- Pilih Status -- </option>
                            <option value="1"> Aktif </option>
                            <option value="0">Tidak Aktif </option>
                        </select>
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

<!-- modal edit -->

<?php
foreach ($user as $edit_data): // :(titik dua) = begin = endforeach;
?>

<div class="modal fade" id="edit<?= $edit_data->id_user ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelEdit">Edit data User</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" action="<?= base_url('pengaturan/update_data_user') ?>"
                    enctype="mutipart/form-data">
                    <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" name="id_user" placeholder="Masukkan Nama..."
                            value="<?= $edit_data->id_user ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Username..."
                            value="<?= $edit_data->nama ?>">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Password..."
                            value="<?= $edit_data->username ?>">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukkan Password..."
                            value="<?= $edit_data->password ?>">
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control rounded-0" name="level" required>
                            <option value=""> --Pilih-- </option>
                            <option value="admin" <?= $edit_data->level=='admin' ? 'selected' : '' ?>> Administrator
                            </option>
                            <option value="alumni" <?= $edit_data->level=='alumni' ? 'selected' : '' ?>> Alumni
                            </option>
                            <option value="guru" <?= $edit_data->level=='guru' ? 'selected' : '' ?>> Guru/Staff
                            </option>
                            <option value="perusahaan" <?= $edit_data->level=='perusahaan' ? 'selected' : '' ?>>
                                Perusahaan </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control rounded-0" name="status" required>
                            <option value=""> --Pilih-- </option>
                            <option value="0" <?= $edit_data->status=='0' ? 'selected' : '' ?>> Tidak Aktif</option>
                            <option value="1" <?= $edit_data->status=='1' ? 'selected' : '' ?>> Aktif </option>
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
endforeach;
?>
<!-- modal edit product -->



<!-- modal delete product -->
<?php
foreach ($user as $hapus_data):
?>
<div class="modal fade" id="hapus_data<?= $hapus_data->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pengaturan/delete_data_user') ?>"
                    enctyp="multipart/form-data">
                    <p>
                        <label class="form-label">Apakah anda yakin ingin menghapus data?</label>
                        <input type="hidden" name="id_user" value="<?= $hapus_data->id_user ?>">

                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
endforeach
        ?>