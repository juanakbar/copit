<?php require_once 'corona.php'; 
include_once('config.php')
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

    <title>Cegah Covid-19 | Daftar Vaksin</title>
  </head>
  <body>
    <?php require_once 'layout/navbar2.php'; ?>
    <div class="container" id="vaksin">
        <section>
            <div class="daftar-vaksin" id="daftar-vaksin">
                <img src="img/pakai-masker.png" alt="">
                <h3 class="title">Ayo Daftar Vaksin Sekarang</h3>
                <?php
    if(isset($_POST['submit'])){
        $email            = $_POST['email'];
        $nama             = $_POST['nama'];
        $nohp             = $_POST['nohp'];
        $nik              = $_POST['nik'];

        $cek = mysqli_query($conn, "SELECT * FROM vaksin WHERE nik='$nik'") or
        die(mysqli_error($conn));

        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($conn, "INSERT INTO vaksin(email, nama, nohp, nik) VALUES('$email', '$nama', '$nohp', '$nik')") or die(mysqli_error($conn));

            if($sql){
                echo '<script>alert("Berhasil menambahkan data.");
                document.location="index.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-waning">Gagal, nik sudah terdaftar.</div>';
        }
    }
?>
                <br>
                <br>
                <form class="daftar" action="?page=index.php" method="post">
                    <h3>Email Anda</h3>
                    <input type="email" name="email" placeholder="Masukkan Email Anda Disini...." required>
                    <hr>
                    <br>
                    <br>
                    <h3>Nama Lengkap Anda</h3>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda Disini...." required>
                    <hr>
                    <br>
                    <br>
                    <h3>Nomor Telepon Anda</h3>
                    <input type="text" name="nohp" placeholder="Masukkan Nomor Telepon Anda Disini...." required>
                    <hr>
                    <br>
                    <br>
                    <h3>NIK</h3>
                    <input type="text" name="nik" placeholder="Masukkan NIK Anda Disini...." required>
                    <hr>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary" name="submit">Daftar Sekarang</button>
                    <br>
                    <br>
                </form>
            </div>
        </section>

    </div>

    <?php require_once 'layout/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>