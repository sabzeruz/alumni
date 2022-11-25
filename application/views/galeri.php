<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container justify-content-between d-flex justify-content-between align-items-center mb-3">
        <div class="page-heading mt-4 align-items-center">
            <h3>Galeri</h3>
        </div>


        <div class="d-flex align-items-center">
            <div class="avatar avatar-xl mb-3">
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

    <div class="page-heading">
    <div class="page-title">    
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                
                    <div class="card-body">
                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="<?= base_url ('assets/images/samples/prestasi_skatel.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_1.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_2.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_3.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                </a>
                            </div>
                        </div>

                        <div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="<?= base_url ('assets/images/samples/prestasi_skatel_thisweek.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_4.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="1">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_5.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="2">
                                </a>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_6.jpg') ?>" data-bs-target="#Gallerycarousel" data-bs-slide-to="3">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog"
aria-labelledby="galleryModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered"
role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalTitle">Galeri Kami</h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">

                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#Gallerycarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_1.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_2.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_3.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_thisweek.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_4.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_5.jpg') ?>">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url ('assets/images/samples/prestasi_skatel_6.jpg') ?>">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Gallerycarousel" role="button" type="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#Gallerycarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

</div>

