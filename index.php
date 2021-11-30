<?php require_once 'corona.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">

    <title>Cegah Covid-19</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-28X911PMPZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-28X911PMPZ');
    </script>
  </head>
  <body>
    <?php require_once 'layout/navbar2.php'; ?>
    <div id="main-container">
        <div class="container container-body">
            <div class="bg-corona">
                <img data-svg="bg-main" src="img/gambar-corona.png" alt="">
            </div>

            <section>
                <header>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/c3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/c2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/c1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                        <br>
                        <br>
                        <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <h6>Sudah Diverifikasi
Cakupan vaksinasi COVID-19 di Indonesia berhasil melampaui target WHO, yang mana vaksinasi lengkap telah mencapai 40% populasi penduduk pada akhir tahun 2021.

Hingga Minggu, total 215,6 juta dosis vaksin telah diberikan kepada masyarakat. Jumlah penerima dosis pertama 130,3 juta orang (62,5%), lebih dari 84,1 juta orang (40,4%) sudah menerima dosis lengkap dan 1,19 juta (81%) nakes sudah menerima vaksinasi ketiga/booster.</h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <h6>Dengan banyaknya jenis dan merk vaksin yang tersedia, masyarakat diimbau tidak perlu ragu dengan vaksin yang ada. Tidak perlu memilih merk vaksin, gunakan vaksin yang tersedia terlebih dulu saat ini. Pemerintah menjamin vaksin yang diberikan kepada masyarakat aman, bermutu, dan berkhasiat.</h6>
                            </div>
                        </div>
                    </div>
                </header>
            </section>
            <br>
            <br>
            <section class="data-covid">
                <h1 class="title">Coronavirus Global & Indonesia Live Data</h1>
                <br>
                <br>
                <div class="row">
                    <h3 class="title">Global</h3>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL POSITIF</h5>
                            <h1><?= $jumlah_positif;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL SEMBUH</h5>
                            <h1><?= $Total_Sembuh;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL MENINGGAL</h5>
                            <h1><?= $jumlah_meninggal;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <div class="row">
                    <h3 class="title">Indonesia</h3>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL POSITIF</h5>
                            <h1><?= $positif;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL SEMBUH</h5>
                            <h1><?= $sembuh;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-title">TOTAL MENINGGAL</h5>
                            <h1><?= $meninggal;?></h1>
                            <p class="card-text">ORANG</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg">
                        <div class="card " style="width: fit-content; margin-left: auto; margin-right: auto;">
                            <a href="data-covid.php">Lihat Data Global</a>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <section>
                <div class="pengertian">
                    <h3 class="title">
                        Yang harus kita ketahui....
                    </h3>
                    <img src="img/apa-itu-covid.png" alt="">
                    <br>
                    <br>
                    <div class="desc">
                        <h4>Apa itu Covid-19?</h4>
                        <p>COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.</p>
                        <p>COVID-19 (coronavirus disease 2019) adalah jenis penyakit baru yang disebabkan oleh virus dari golongan coronavirus, yaitu SARS-CoV-2 yang juga sering disebut virus Corona.</p>
                        <br>
                        <h4>Apa Penyebab Covid-19?</h4>
                        <p>COVID-19 disebabkan oleh SARS-CoV-2, yaitu virus jenis baru dari coronavirus (kelompok virus yang menginfeksi sistem pernapasan). Infeksi virus Corona bisa menyebabkan infeksi pernapasan ringan sampai sedang, seperti flu, atau infeksi sistem pernapasan dan paru-paru, seperti pneumonia.</p>
                        <p>Pada penghujung tahun 2020, beberapa laporan kasus menyebutkan bahwa virus Corona telah bermutasi menjadi beberapa jenis atau varian baru, misalnya varian delta.</p>
                    </div>
                </div>
                <p class="refrensi" style="font-size: x-small;"><i>Refrensi : <a href="https://www.alodokter.com/covid-19">https://www.alodokter.com/covid-19</a></i></p>
            </section>
            <br>
            <br>
            <section>
                <div class="berita">
                    <h1 class="title">Berita Terbaru</h1>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/b1.webp" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/b1_2.webp" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">VAKSINASI KEDUA POLITEKNIK TEDC</h5>
                                <p>Selasa, 12 Oktober 2021</p>
                                <h6>Hallo, Warga TEDC!!

Teruntuk warga TEDC yang telah melakukan vaksinasi dosis pertama, kami dari BEM Politeknik TEDC mengajak seluruh warga Politeknik TEDC untuk melakukan vaksinasi dosis kedua untuk mencegah dan menghentikan penyebaran Covid-19.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/b2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/b2_1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/b2_3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/b2_4.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">DOKUMENTASI VAKSINASI PERTAMA POLITEKNIK TEDC.</h5>
                                <p>Selasa, 14 September 2021.</p>
                                <h6>Assalamu'alaikum Warahmatullahi Wabarakatuh.<br>
Alhamdulillah telah terlaksana kegiatan Vaksinasi dosis pertama Politeknik TEDC Bandung. Bersama ini kami ucapkan terima kasih yang sebesar-besarnya kepada seluruh rekan-rekan yang sudah hadir menyukseskan kegiatan ini, yang diselenggarakan secara offline di Politeknik TEDC Bandung pada Selasa, 14 September 2021.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="img/b3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="img/b3_1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h5 class="card-title">Vaksinasi Pertama Politeknik TEDC.</h5>
                                <p>Selasa dan Kamis, 14 & 16 September 2021</p>
                                <h6>Hallo, Warga TEDC!!<br>
Pandemi Covid-19 telah mebatasi seluruh aspek, termasuk di dalamnya Kegiatan Belajar Mengajar. Hingga saat ini pun kegiatan pembelajaran masih sebatas temu daring. Maka dari itu untuk mencegah dan menghentikan penyebaran Covid-19.</h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card " style="width: fit-content; margin-left: auto; margin-right: auto;">
                                <a href="#">Berita Lainnya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
    

    <?php require_once 'layout/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>