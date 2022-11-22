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
             data-bs-toggle="modal" data-bs-target="#addModalUser">
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
        <br>
        <br>

        <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
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
                    <?php
                        $no = 1;
                        foreach ($user as $tampil) : // :(titik dua) = begin = endforeach;
                        ?>
                    <tbody>
                        <tr>
                        <td class="py-4 px-4 text-center text-center"> <?= $tampil->nama ?></td>
                            <td class="py-4 px-4 text-center text-center"><?= $tampil->username ?></td>
                            <td class="py-4 px-4 text-center text-center"><?= $tampil->password ?></td>
                            <td class="py-4 px-4 text-center text-center"><?= $tampil->level ?></td>
                            <td class="py-4 px-4 text-center text-center">
                            <?php if (($tampil->status == '0')) { ?>
                             
                                <span class="badge bg-danger">Inactive</span>
                            
                  <?php  } else { ?>
                
                                <span class="badge bg-success">Active</span>
                        
                  <?php  } ?>
                    
                            </td>
                            <td class="py-4 px-4 text-center text-center">
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#edit<?= $tampil->id_user ?>"><a>EDIT</a></button>
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#hapus_data<?= $tampil->id_user ?>"><a>HAPUS</a></button>
                            </td>

                        </tr>
                        <?php
                        endforeach;
                            ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    </div>


            <!-- Modal Add Product-->
            <form method="post" action="<?= base_url('pengaturan/simpan') ?>" enctype="multipart/form-data">
            <div class="modal fade" id="addModalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Siswa...">
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
                                <select class="form-control rounded-0" name="jurusan">
                                    <option value=""> -- Pilih Level User -- </option>
                                    <option value="Administrator"> Admin </option>
                                    <option value=""> -- Pilih -- </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control rounded-0" name="jurusan">
                                    <option value=""> -- Pilih Status -- </option>
                                    <option value="Administrator"> Aktif </option>
                                    <option value=""> -- Pilih -- </option>
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
    <!-- modal edit product -->



<!-- modal delete product -->