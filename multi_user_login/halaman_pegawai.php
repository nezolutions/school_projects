<!DOCTYPE html>

<html>
    <head>
        <title>Halaman Pegawai</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="halaman_pegawai">
        <?php
        session_start();

        if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h1 class="card-title">Halaman Pegawai</h1>
                            <p class="card-text">Halo <b><?php echo $_SESSION['username'];?>!</b> Anda telah login sebagai <b><?php echo $_SESSION['level'];?></b>.</p>
                            <a href="logout.php" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>