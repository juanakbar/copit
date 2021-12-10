<?php include 'config.php'; 
require_once 'corona.php'?>
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
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

    <title>Data Covid-19</title>
  </head>
  <body>
    <?php require_once 'layout/navbar.php'; ?>
    <div id="main-container">
        <div class="container container-body">

            <div class="bg-corona">
                <img data-svg="bg-main" src="img/gambar-corona.png" alt="">
            </div>
                <section class="data-covid">
                    <h1 class="title">Data Pendaftar Vaksinasi</h1>
                    <div class="row">
                        <h3 class="title">Global</h3>
                        <div class="col-lg">
                            <div class="card">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $jumlah_positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $Total_Sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $jumlah_meninggal;?></H1>
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
                                <H1><?= $positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg">
                            <div class="card">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg">
                            <div class="card">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <h1 class="title display-6 text-truncate tebel-sedang mt-5 text-abu">SELAMAT DATANG <?php echo  $_SESSION['username']; ?></h1>
                    <br>
                    <div class="row">
                        <br>
                        <div class="col-lg">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nomor Hp</th>
                                        <th scope="col">NIK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM vaksin ORDER BY id DESC") or die(mysqli_error($koneksi));
                                    if(mysqli_num_rows($sql) > 0){
                                        $no = 1;
                                        while($data = mysqli_fetch_assoc($sql)){
                                            echo '
                                            <tr>
                                                <td>'.$no.'</td>
                                                <td>'.$data['email'].'</td>
                                                <td>'.$data['nama'].'</td>
                                                <td>'.$data['nohp'].'</td>
                                                <td>'.$data['nik'].'</td>
                                            </tr>
                                            ';
                                            $no++;
                                        }
                                    }else{
                                        echo'
                                        <tr>
                                            <td colspan="6">Tidak ada data.</td>
                                        </tr>
                                        ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    <br>
    <br>
    <?php require_once 'layout/footer.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>