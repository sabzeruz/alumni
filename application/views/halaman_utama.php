<!-- MAIN -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="container justify-content-between d-flex justify-content-between align-items-center mb-3">
        <div class="page-heading mt-4 align-items-center">
            <h3>Alumni Database</h3>
            <h6>Hi, selamat datang <?= $this->session->userdata('nama'); ?> ! </h6>
        </div>


        <div class="d-flex align-items-center">
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


    <div class="row">

        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-18 d-flex justify-content-center ">
                            <div class="stats-icon purple mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20.2 5.9l.8-.8C19.6 3.7 17.8 3 16 3s-3.6.7-5 2.1l.8.8C13 4.8 14.5 4.2 16 4.2s3 .6 4.2 1.7zm-.9.8c-.9-.9-2.1-1.4-3.3-1.4s-2.4.5-3.3 1.4l.8.8c.7-.7 1.6-1 2.5-1 .9 0 1.8.3 2.5 1l.8-.8zM19 13h-2V9h-2v4H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM8 18H6v-2h2v2zm3.5 0h-2v-2h2v2zm3.5 0h-2v-2h2v2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12">
                            <h6 class="text-muted font-semibold text-center">TEKNIK JARINGAN AKSES</h6>
                            <h6 class="font-extrabold mb-0 text-center"><?= $tja ?> Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-18 d-flex justify-content-center ">
                            <div class="stats-icon purple mb-2">
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-server" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M4,1H20A1,1 0 0,1 21,2V6A1,1 0 0,1 20,7H4A1,1 0 0,1 3,6V2A1,1 0 0,1 4,1M4,9H20A1,1 0 0,1 21,10V14A1,1 0 0,1 20,15H4A1,1 0 0,1 3,14V10A1,1 0 0,1 4,9M4,17H20A1,1 0 0,1 21,18V22A1,1 0 0,1 20,23H4A1,1 0 0,1 3,22V18A1,1 0 0,1 4,17M9,5H10V3H9V5M9,13H10V11H9V13M9,21H10V19H9V21M5,3V5H7V3H5M5,11V13H7V11H5M5,19V21H7V19H5Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12">
                            <h6 class="text-muted font-semibold text-center">TEKNIK KOMPUTER & JARINGAN</h6>
                            <h6 class="font-extrabold mb-0 text-center"><?= $tkj ?> Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-4">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-18 d-flex justify-content-center ">
                            <div class="stats-icon purple mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="3.2" />
                                    <path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12">
                            <h6 class="text-muted font-semibold text-center">MULTIMEDIA</h6>
                            <h6 class="font-extrabold mb-0 text-center"><?= $mm ?> Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-18 d-flex justify-content-center ">
                            <div class="stats-icon purple mb-2">
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-microsoft-visual-studio-code" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M17,16.47V7.39L11,11.93M2.22,9.19C1.92,8.87 1.91,8.37 2.2,8.04L3.4,6.93C3.6,6.75 4.09,6.67 4.45,6.93L7.87,9.54L15.8,2.29C16.12,1.97 16.67,1.84 17.3,2.17L21.3,4.08C21.66,4.29 22,4.62 22,5.23V18.73C22,19.13 21.71,19.56 21.4,19.73L17,21.83C16.68,21.96 16.08,21.84 15.87,21.63L7.85,14.33L4.45,16.93C4.07,17.19 3.6,17.12 3.4,16.93L2.2,15.83C1.88,15.5 1.92,14.96 2.25,14.63L5.25,11.93" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12">
                            <h6 class="text-muted font-semibold text-center">REKAYASA PERANGKAT LUNAK</h6>
                            <h6 class="font-extrabold mb-0 text-center"><?= $rpl ?> Orang</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-sm">
                    <img src="<?= base_url('assets/images/samples/telkom.jpg') ?>" class="card-img" alt="...">
                </div>
                <div class="col-sm">
                    <div class="card-body">
                        <h5 class="card-title">SMK TELKOM BANJARBARU</h5>
                        <p class="card-text text-right"> Sekolah Menengah Kejuruan Telekomunikasi (SMK Telkom) Sandhy Putra Banjarbaru adalah lembaga pendidikan yang dikelola oleh Yayasan Sandhykara Putra Telkom dengan kantor Pusat di Bandung. Sekolah ini, telah beroperasi sejak tahun 1999, diresmikan oleh Direktur Utama PT Telkom (AA. Nasution) pada 13 Maret 2000. Surat Keputusan Ijin Pendirian No: Kep 52/15.a3/MN 99 dengan Nomor Statistik Sekolah (NSS) 324151011005 dan Nomor Data Sekolah (NDS) 4215220006. &nbsp; <br><br>
                            SMK Telkom Sandhy Putra Banjarbaru merupakan Sekolah Menengah Kejuruan pertama dan satu-satunya di Kalimantan yang menyelenggarakan Pendidikan Kejuruan dalam Bidang Telekomunikasi.Saat ini SMK Telkom Sandhy Putra Banjarbaru mempunyai 2 Program Teknik Jaringan Akses (TJA) dan Program Keahlian Informatika yaitu Teknik Komputer & Jaringan (TKJ), Program Multimedia (MM) dan Program Rekayasa Perangkat Lunak (RPL).
                        </p>

                    </div>
                </div>
            </div>



            <!-- <div class="card text-center mb-3" id="text-right">
        <div class="card-horizontal">
            <img src="<?= base_url('assets/images/samples/telkom.jpg') ?>" class="card-img-top img-fluid" alt="singleminded">
            <div class="card-body">
                <h5 class="card-title">SMK Telkom Banjarbaru</h5>
                <p class="card-text flaot-end">
                    Sekolah Menengah Kejuruan Telekomunikasi (SMK Telkom) Sandhy Putra Banjarbaru adalah lembaga pendidikan yang dikelola oleh Yayasan Sandhykara Putra Telkom dengan kantor Pusat di Bandung. Sekolah ini, telah beroperasi sejak tahun 1999, diresmikan oleh Direktur Utama PT Telkom (AA. Nasution) pada 13 Maret 2000. Surat Keputusan Ijin Pendirian No: Kep 52/15.a3/MN 99 dengan Nomor Statistik Sekolah (NSS) 324151011005 dan Nomor Data Sekolah (NDS) 4215220006. &nbsp; <br><br>
                    SMK Telkom Sandhy Putra Banjarbaru merupakan Sekolah Menengah Kejuruan pertama dan satu-satunya di Kalimantan yang menyelenggarakan Pendidikan Kejuruan dalam Bidang Telekomunikasi.Saat ini SMK Telkom Sandhy Putra Banjarbaru mempunyai 2 Program Teknik Jaringan Akses (TJA) dan Program Keahlian Informatika yaitu Teknik Komputer & Jaringan (TKJ), Program Multimedia (MM) dan Program Rekayasa Perangkat Lunak (RPL).
                    SMK Telkom Sandhy Putra Banjarbaru menghasilkan tenaga teknis yang profesional di bidang Teknologi Informasi dan telekomunikasi, unggul di dunia kerja, mempunyai etos kerja tinggi, berbudi pekerti luhur dan berakhlak mulia serta mampu berkompetisi dalam era global. <br><br> Kemudian di tahun 2015 Yayasan Pendidikan Telkom (YPT) dan Yayasan Sandhykara Putra Telkom (YSPT) digabung menjadi satu yayasan menjadi Telkom Foundation dengan Ketua Umum yaitu Bapak Jhoni Girsang, M.Sc. Dengan bentuk yayasan yang baru tersebut maka SMK Telkom Sandhy Putra Banjarbaru juga berganti nama menjadi Telkom School Banjarbaru atau SMK Telkom Banjarbaru.
                </p>
            </div>
        </div>
    </div>
</div> -->




        </div>

        <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Video Profile</h4>
                        </div>
                        <div class="embed-responsive embed-responsive-item embed-responsive-16by9 w-100">
                            <iframe src="https://www.youtube.com/embed/mv-wMfBGf6Y" style="width:100%" height="500"
                                allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            Video profil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan lingkungan sekolah, fasilitas umum sekolah, fasilitas pembelajaran, ruang belajar, kegiatan siswa dan masih banyak lagi.

Biar kalian tidak penasaran apa saja yang ada di dalam SMK Telkom Banjarbaru, segera tonton video profilnya.
                            </p>
                            <!-- <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                </div>

        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">

                    <div class="card-body">
                        <h5 class="card-title">Keunggulan</h5>
                        <p class="card-text">
                            1. Sekolah Terbaik Se Kalimantan Selatan Tahun 2011 <br>
                            2.Menerapkan manajemen ISO 9001:2008<br>
                            3. Sertifikat Tempat Uji Kompetensi bidang Teknologi Informatika<br>
                            4. Terakreditasi “A” (Amat Baik) untuk semua program keahlian<br>
                            5. Tenaga Pengajar Profesional dan berprestasi<br>
                            6. Fasilitas Pembelajaran dan Praktikum yang lengkap<br>
                            7. Free Hot Spot dengan kecepatan tinggi<br>
                            8. Terjalin MoU dengan Dunia Usaha/Dunia Industri skala Nasional<br>
                            9. Sarana Pendukung<br>
                            10. Lulusan terserap di Perguruan Tinggi ternama baik Nasional dan Internasional<br>
                            11. Lulusan terserap di Dunia Kerja Nasional<br>
                            12. Prestasi Siswa di bdang akademik dan Non Akademik di tingkat Provinsi dan Nasional<br>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">

                    <div class="card-body">
                        <h5 class="card-title">Fasilitas</h5>
                        <p class="card-text">
                            Semua Kelas FULL AC<br>
                            Lab Komputer (FULL AC & dilengkapi LCD Projector)<br>
                            Lab Teknisi dan Jaringan Komputer<br>
                            Lab Pemrograman & Desain WEB<br>
                            Lab Multimedia<br>
                            Lab Perakitan Komputer<br>
                            Lab Jaringan Akses<br>
                            Lab Bahasa<br>
                            Lab Fisika,Kimia, Biologi<br>
                            Lab Elektronika<br>
                            Musholla<br>
                            UKS<br>
                            Koperasi Siswa<br>
                          
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="">
        <div class="card-header">
            <!-- <h4>With Captions</h4>
            <p>A carousel with captions over the top</p> -->
        </div>
        <div class="">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/images/samples/sertifikasi_iso.png') ?>" class="d-block w-100" alt="sertifikasi-iso">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/images/samples/akreditasi.png') ?>" class="d-block w-100" alt="akreditasi">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Second slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>