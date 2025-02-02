<?php

include_once("koneksi.php");
$query = "SELECT * FROM tb_buku";
$hasil = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Koleksi Buku Perpustakaan</title>
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
        .table {
            margin-bottom: 0;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-tambah {
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header text-center">
                <h2 class="mb-0"><i class="fas fa-book mr-2"></i>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
            </div>
            <div class="card-body">
                <a href="tambah_buku.php" class="btn btn-primary btn-tambah mb-4">
                    <i class="fas fa-plus-circle mr-2"></i>Tambah Buku
                </a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $nomor; ?></th>
                                <td><?php echo $data['judul_buku']; ?></td>
                                <td><?php echo $data['pengarang']; ?></td>
                                <td><?php echo $data['tahun_terbit']; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td>
                                    <a href="ubah_buku.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Ubah
                                    </a>
                                    <a href="hapus_buku.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus buku ini?')">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php $nomor++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
