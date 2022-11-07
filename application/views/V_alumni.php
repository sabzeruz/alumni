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
                        <img src="<?= base_url("assets/upload/photo/$jur->foto") ?>" class="card-img-top img-fluid" alt="...">
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