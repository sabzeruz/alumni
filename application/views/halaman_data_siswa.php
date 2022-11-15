<textarea id="printing-css" style="display:none;">
    .no-print
        {
            display:none
        }
    @media print 
        {
            @page { 
                size: 210mm 297mm; 
                margin-left:120px; 
                margin-right:120px;
                margin-top:120px; 
                margin-bottom:10px;
            }
        }

        <?php
        include('assets/css/main/app-dark.css');
        include('assets/css/main/app.css');
        ?>
</textarea>

<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
    function printDiv(elementId) {
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>

<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container-fluid justify-content-between d-flex justify-content-between align-items-center mb-3">

        <div class="page-heading mt-4 align-items-center">
            <h3>Data Siswa</h3>


            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('pengaturan/beranda') ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendataan</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex align-items-center">
            <div class="avatar avatar-xl mb-3">
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

    <div id="content" class="mb-4">
        <?php
        if ($this->session->userdata('level') == 'admin') { ?>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i> Tambah Data
            </button>
            &nbsp;
            <a type="button" class="btn btn-primary" href="javascript:printDiv('id-elemen-yang-ingin-di-print');">
                <i class="fa-solid fa-print"></i>
                Cetak</a>
        <?php } ?>

        <!-- Modal Add Product-->
        <form method="post" action="<?= base_url('pengaturan/simpan') ?>" enctype="multipart/form-data">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah data siswa</h5>
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
                                <label>Nomer Induk Siswa</label>
                                <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS...">
                            </div>

                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukkan Nama Siswa...">
                            </div>
                            <div class="form-group">
                                <label>Kota Lahir</label>
                                <input type="text" class="form-control" name="kota_lahir" placeholder="Masukkan Kota Lahir...">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Kesan</label>
                                <textarea name="kesan" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan Kesan..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control rounded-0" name="jurusan">
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                    foreach ($jurusan as $jur) { ?>
                                        <option value="<?= $jur->kode_jurusan ?>"><?= $jur->nama_jurusan ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Upload Photo</label>
                                <input type="file" class="form-control rounded-0" name="foto">
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

        <?php if ($this->session->flashdata('gagalfoto')) { ?>
            <div class="alert alert-warning">
                <a href="#" class="close" data-bs-dismiss="alert">&times;</a>
                <strong>Gagal!</strong> <?= $this->session->flashdata('gagalfoto'); ?>
            </div>
        <?php } ?>

        <!-- PRINT START -->

        <div class="d-none">
            <div id="id-elemen-yang-ingin-di-print">

                <div class="text-center font-weight-bold text-black">
                    Data Alumni <br> SMK TELKOM BANJARBARU
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="">
                            <tr>
                                <th class="py-3 px-6 text-center">NO</th>
                                <!-- <th class="py-3 px-6 text-center">ID</th> -->
                                <th class="py-3 px-6 text-center">NIS</th>
                                <th class="py-3 px-6 text-center">Nama Siswa</th>
                                <th class="py-3 px-6 text-center">Kota Lahir</th>
                                <th class="py-3 px-6 text-center">Tanggal Lahir</th>
                                <th class="py-3 px-6 text-center">Kesan</th>
                                <th class="py-3 px-6 text-center">Jurusan</th>
                                <th class="py-3 px-6 text-center">Foto</th>
                                <th class="py-3 px-6 text-center">Tahun Lulus</th>
                                <th class="py-3 px-6 text-center">Instagram</th>
                                <th class="py-3 px-6 text-center">Facebook</th>
                                <th class="py-3 px-6 text-center">Twitter</th>
                                <th class="py-3 px-6 text-center">Line</th>
                                <th class="py-3 px-6 text-center">Aksi</th>

                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($siswa as $tampil) : // :(titik dua) = begin = endforeach;
                        ?>
                            <tbody>
                                <tr class="">
                                    <td class="py-4 px-4 text-center"><?= $no++ ?></td>
                                    <!-- <td class="py-4 px-4 text-center"> <?= $tampil->id ?></td> -->
                                    <td class="py-4 px-4 text-center"> <?= $tampil->nis ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->nama_siswa ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->kota_lahir ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->tanggal_lahir ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->kesan ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->jurusan ?></td>
                                    <td class="py-4 px-4 text-center">
                                        <?php if (($tampil->foto == '') or ($tampil->foto == '-')) { ?>
                                            <img src="<?= base_url('assets/images/default.jpg') ?>" class="card-img-top" style="height:221px;">
                                        <?php } else { ?>
                                            <img src="<?= base_url('assets/upload/photo/' . $tampil->foto) ?>" class="card-img-top" style="height:221px;">
                                        <?php } ?>


                                    </td>
                                    <td class="text-center"> <?= $tampil->tahun_lulus ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->instagram ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->facebook ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->twiter ?></td>
                                    <td class="py-4 px-4 text-center"> <?= $tampil->line ?></td>
                                    <!-- <td class="py-4 px-4 text-center text-center">
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#edit<?= $tampil->id ?>"><a>EDIT</a></button>
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#hapus_data<?= $tampil->id ?>"><a>HAPUS</a></button>
                            </td> -->

                                </tr>
                            <?php
                        endforeach;
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

                            <!-- PRINT END -->



        <div class="table-responsive scrollbar-x">
            <table class="table table-hover mb-0">
                <thead class="">
                    <tr>
                        <th class="py-3 px-6 text-center">NO</th>
                        <!-- <th class="py-3 px-6 text-center">ID</th> -->
                        <th class="py-3 px-6 text-center">NIS</th>
                        <th class="py-3 px-6 text-center">Nama Siswa</th>
                        <th class="py-3 px-6 text-center">Kota Lahir</th>
                        <th class="py-3 px-6 text-center">Tanggal Lahir</th>
                        <th class="py-3 px-6 text-center">Kesan</th>
                        <th class="py-3 px-6 text-center">Jurusan</th>
                        <th class="py-3 px-6 text-center">Foto</th>
                        <th class="py-3 px-6 text-center">Tahun Lulus</th>
                        <th class="py-3 px-6 text-center">Instagram</th>
                        <th class="py-3 px-6 text-center">Facebook</th>
                        <th class="py-3 px-6 text-center">Twitter</th>
                        <th class="py-3 px-6 text-center">Line</th>
                        <th class="py-3 px-6 text-center">Aksi</th>

                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($siswa as $tampil) : // :(titik dua) = begin = endforeach;
                ?>
                    <tbody>
                        <tr class="">
                            <td class="py-4 px-4 text-center"><?= $no++ ?></td>
                            <!-- <td class="py-4 px-4 text-center"> <?= $tampil->id ?></td> -->
                            <td class="py-4 px-4 text-center"> <?= $tampil->nis ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->nama_siswa ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->kota_lahir ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->tanggal_lahir ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->kesan ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->jurusan ?></td>
                            <td class="py-4 px-4 text-center">
                                <?php
                                if (($tampil->foto == '') or ($tampil->foto == '-')) {
                                ?>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="<?= base_url('assets/images/default.jpg') ?>" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" style="height:221px;">
                                </button>
                                <?php
                                } else { ?>
                                    <button data-toggle="modal" data-bs-target="#exampleModal" href="<?= base_url('assets/upload/photo/' . $tampil->foto) ?>">
                                        <img class="rounded d-blockimg-thumbnail" width="125px" height="150px" data-bs-toggle="modal" data-bs-target="#exampleModal" src="<?= base_url('assets/upload/photo/' . $tampil->foto) ?>">
                                    <?php } ?>
                            </td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->tahun_lulus ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->instagram ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->facebook ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->twitter ?></td>
                            <td class="py-4 px-4 text-center"> <?= $tampil->line ?></td>
                            <td class="py-4 px-4 text-center text-center">
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#edit<?= $tampil->id ?>"><a>EDIT</a></button>
                                <button class="btn text-center" data-bs-toggle="modal" data-bs-target="#hapus_data<?= $tampil->id ?>"><a>HAPUS</a></button>
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
    foreach ($siswa as $edit_data) : // :(titik dua) = begin = endforeach;
    ?>

        <div class="modal fade" id="edit<?= $edit_data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit data siswa</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="<?= base_url('pengaturan/update_data') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>id</label>
                                <input type="text" class="form-control" name="id" placeholder="Masukkan Kode Jurusan..." value="<?= $edit_data->id ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>nis</label>
                                <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS..." value="<?= $edit_data->nis ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukkan Nama Siswa..." value="<?= $edit_data->nama_siswa ?>">
                            </div>
                            <div class="form-group">
                                <label>kota lahir</label>
                                <input type="text" class="form-control" name="kota_lahir" placeholder="Masukkan Nama Siswa..." value="<?= $edit_data->kota_lahir ?>">
                            </div>
                            <div class="form-group">
                                <label>tanggal lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Nama Siswa..." value="<?= $edit_data->tanggal_lahir ?>">
                            </div>
                            <div class="form-group">
                                <label>kesan</label>
                                <input type="text" class="form-control" name="kesan" placeholder="Masukkan Nama Siswa..." value="<?= $edit_data->kesan ?>">
                            </div>
                            <div class="form-group">
                                <label>jurusan</label>
                                <select class="form-control rounded-0" name="jurusan">
                                    <option value=""> -- Pilih -- </option>
                                    <?php
                                    foreach ($jurusan as $jur) { ?>
                                        <option value="<?= $jur->kode_jurusan ?>"><?= $jur->kode_jurusan ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" class="form-control" placeholder="Uploaded Foto" name="foto" value="<?= $edit_data->foto ?>" name="foto">
                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    foreach ($siswa as $hapus_data) :



    ?>
        <div class="modal fade" id="hapus_data<?= $hapus_data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus siswa</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('pengaturan/delete_data_siswa') ?>" enctyp="multipart/form-data">
                            <p>
                                <label class="form-label">Apakah anda yakin ingin menghapus data?</label>
                                <input type="hidden" name="id" value="<?= $hapus_data->id ?>">

                            </p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-success">Hapus</button>
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

<?php
  $no = 1;
    foreach ($siswa as $view_foto) : // :(titik dua) = begin = endforeach;
    ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
                                if (($view_foto->foto == '') or ($view_foto->foto == '-')) {
                                ?>
                                    <img src="<?= base_url('assets/images/default.jpg') ?>"  style="height:221px;">
                            
                                <?php
                                } else { ?>
                                        <img class="rounded d-blockimg-thumbnail" width="125px" height="150px"   src="<?= base_url('assets/upload/photo/' . $view_foto->foto) ?>">
                                    <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
                endforeach;
                    ?>
