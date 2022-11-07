<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container justify-content-between d-flex justify-content-between align-items-center mb-3">
        <div class="page-heading mt-4 align-items-center">
            <h3>Data Jurusan</h3>
        </div>


        <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
                <img src="<?= base_url('assets/images/faces/dendro.jpg') ?>" alt="Face 1">
            </div>
            <div class="ms-3 name">
            <h5 class="font-bold">  <?= $this->session->userdata('nama');?>    </h5>
            <p class="font-weight-light" >  <?= $this->session->userdata('level');?>
                <a href="<?= base_url('logout') ?>" class="bi bi-box-arrow-right"></a>
                </p>

            </div>
        </div>
    </div>

    
    
    
    <div class="container">
    <h6 class="m-0 font-weight-bold text-dark">Alumni Rekayasa Perangkat Lunak tahun :
    <select name="tahun" id="tahun" style="height:30px; padding:0px 10px; margin-top:-3px;" onchange="change_status()">
    <option <?php if ($tahun == null) echo "selected='selected'"; ?> value="">All</option>
    <option <?php if ($tahun == "2021") echo "selected='selected'"; ?> value="2021">2021</option>
    <option <?php if ($tahun == "2020") echo "selected='selected'"; ?> value="2020">2020</option>
    <option <?php if ($tahun == "2019") echo "selected='selected'"; ?> value="2019">2019</option>
    <option <?php if ($tahun == "2018") echo "selected='selected'"; ?> value="2018">2018</option>
</select>

<script>
    function change_status() {
        var tahun = document.getElementById('tahun').value;
        window.location.href = "<?php echo base_url('pengaturan/buka_' . $jurusanku . "/") ?>" + tahun;
    }
</script>
    <div class="row">
        <?php foreach ($jurusan as $jur):
            if($jur->jurusan == 'RPL'){
                $warna = 'primary';
            }
            elseif ($jur->jurusan == 'TKJ'){
                $warna = 'danger';
            }
            elseif ($jur->jurusan == 'TJA'){
                $warna = 'warning';
            }
            elseif ($jur->jurusan == 'MM'){
                $warna = 'success';
            }
            elseif ($jur->jurusan == 'ANM'){
                $warna = 'info';
            }
            ?>

            
        
        <div class="col-3">
            <a href="<?= base_url('assets/upload/photo/' . $jur->foto) ?>">
                <div class="card <?= 'bg-' . $warna ?> mt-4 p-3" style="width: 18rem;">
                    <div class="p-3">
                        <img src="<?= base_url("assets/upload/photo/$jur->foto") ?>" class="card-img-top"  height="310px" alt="...">
                    </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-white text-center fs-4"><?= $jur->nis ?></h5>
                        <div class="card-text text-center text-white fs-5">
                            <span><?= $jur->nama_siswa ?></span><br>
                            <span><?= $jur->jurusan ?></span><br>
                            <span><?= $jur->tanggal_lahir ?></span>
                        </div>
                    </div>
                </div>
          
        </div>
        <?php endforeach; ?>
    </div>
</div>