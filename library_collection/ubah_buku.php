<?php
include_once("koneksi.php");

// Periksa apakah 'id' ada dalam $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Jika 'id' tidak ditemukan, tampilkan pesan error dan hentikan eksekusi
    die("Error: ID buku tidak ditemukan.");
}

$query = "SELECT * FROM tb_buku WHERE id_buku=" . $id;
$hasil = mysqli_query($con, $query);

// Periksa apakah query berhasil dan ada data yang ditemukan
if ($hasil && mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_array($hasil);
} else {
    die("Error: Buku dengan ID tersebut tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Ubah Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }
        .btn {
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header text-center">
                <h2 class="mb-0"><i class="fas fa-edit mr-2"></i>UBAH KOLEKSI BUKU PERPUSTAKAAN</h2>
            </div>
            <div class="card-body">
                <form method="post" action="proses_ubah_buku.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                        <div class="col-sm-10">
                            <input type="text" name="judul" id="judul" class="form-control" value="<?php echo $data['judul_buku']; ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-10">
                            <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="kategori" id="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Simpan</button>
                            <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
