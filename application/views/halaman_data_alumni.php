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
                    <li class="breadcrumb-item active" aria-current="page">Alumni</li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $jurusanku ?></li>
                </ol>
            </nav>
        </div>

        <div class="d-flex align-items-center mb-3">
            <div class="avatar avatar-xl mb-3">
                <img src="<?= base_url('assets/images/faces/dendro.jpg') ?>" alt="Face 1">
            </div>
            <div class="ms-3 name">
                <h5 class="font-bold"> <?= $this->session->userdata('nama'); ?> </h5>
                <p class="font-weight-light"> <?= $this->session->userdata('level'); ?>
                    <a href="<?= base_url('logout') ?>" class="bi bi-box-arrow-right"></a>
                </p>

            </div>
        </div>
    </div>


    <!-- <div class="btn-group mb-1">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Primary
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <h6 class="m-0 font-weight-bold text-dark">Alumni Jurusan tahun : <br><br>
            <select name="tahun" id="tahun" type="button" class="btn btn-primary dropdown-toggle me-1" id="dropdownMenuButton" onchange="change_status()">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <option <?php if ($tahun == null) echo "selected='selected'";  ?> value="">All</option>
                    <option <?php if ($tahun == "2021") echo "selected='selected'"; ?> class="dropdown-item" value="2021">2021</option>
                    <option <?php if ($tahun == "2020") echo "selected='selected'"; ?> class="dropdown-item" value="2020">2020</option>
                    <option <?php if ($tahun == "2019") echo "selected='selected'"; ?> class="dropdown-item" value="2019">2019</option>
                    <option <?php if ($tahun == "2018") echo "selected='selected'"; ?> class="dropdown-item" value="2018">2018</option>
                </div>
            </select>
            <script>
                function change_status() {
                    var tahun = document.getElementById('tahun').value;
                    window.location.href = "<?php echo base_url('pengaturan/buka_' . $jurusanku . "/") ?>" + tahun;
                }
            </script>
            <div class="row">
                <?php foreach ($jurusan as $jur) :
                    if ($jur->jurusan == 'RPL') {
                        $warna = 'primary';
                    } elseif ($jur->jurusan == 'TKJ') {
                        $warna = 'danger';
                    } elseif ($jur->jurusan == 'TJA') {
                        $warna = 'warning';
                    } elseif ($jur->jurusan == 'MM') {
                        $warna = 'success';
                    } elseif ($jur->jurusan == 'ANM') {
                        $warna = 'info';
                    }
                ?>



                    <div class="col-3">
                        <?php
                        if (($jur->foto == '') or ($jur->foto == '-')) {
                        ?>
                            <a href="<?= base_url('assets/upload/photo/avatar.jpg') ?>">
                            <?php
                        } else { ?>
                                <a href="<?= base_url('assets/upload/photo/' . $jur->foto) ?>">
                                <?php } ?>
                                <div class="card <?= 'bg-' . $warna ?> m-3 p-3">
                                    <div class="p-3">
                                        <?php
                                        if (($jur->foto == '') or ($jur->foto == '-')) {
                                        ?>
                                            <img src="<?= base_url("assets/upload/photo/avatar.jpg") ?>" class="card-img-top" alt="...">
                                        <?php
                                        } else { ?>
                                            <img src="<?= base_url('assets/upload/photo/' . $jur->foto) ?>" class="card-img-top" height="310px" alt="...">
                                        <?php } ?>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-white text-center fs-4 p-4"><?= $jur->nama_siswa ?></h5>
                                    <div class="card-text text-center text-white fs-5">
                                        <br>
                                        <span><?= $jur->jurusan ?></span><br>
                                        <br>
                                        <span>Lulusan Tahun : <br><?= $jur->tahun_lulus ?></span>
                                    </div>
                                </div>
                    </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
<br>
<br>