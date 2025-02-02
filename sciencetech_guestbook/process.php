<?php require_once 'config.php';

if (isset($_POST['role'])) {
    $status = $_POST['role'];

    if ($status == "SISWA") {
        $username = htmlspecialchars(strtoupper($_POST['username-siswa']));
        $grade = $_POST['level'] . ' ' . $_POST['jurusan'] . ' ' . $_POST['nomor'];
        $message = $_POST['input-kp1'];
        $query = "INSERT INTO tb_student (username, grade, status, message, time) VALUES ('$username', '$grade', '$status', '$message', CURRENT_TIMESTAMP)";
    } elseif ($status == "GURU") {
        $username = htmlspecialchars(strtoupper($_POST['username-guru']));
        $jabatan = htmlspecialchars(strtoupper($_POST['jabatan']));
        $message = $_POST['input-kp2'];
        $query = "INSERT INTO tb_teacher (username, jabatan, status, message, time) VALUES ('$username', '$jabatan', '$status', '$message', CURRENT_TIMESTAMP)";
    } elseif ($status == "PENGUNJUNG") {
        $username = htmlspecialchars(strtoupper($_POST['username-pengunjung']));
        $institute = htmlspecialchars(strtoupper($_POST['asal-instansi']));
        $message = $_POST['input-kp3'];
        $query = "INSERT INTO tb_visitor (username, institute, status, message, time) VALUES ('$username', '$institute', '$status', '$message', CURRENT_TIMESTAMP)";
    } else {
        exit;
    }

    $hasil = mysqli_query($con, $query);
    if (!$hasil) {
        echo $log. " KESALAHAN dalam memproses data:\n" . mysqli_error($con);
        exit;
    } else {
        sleep(1);
        header('location: index.php');
    }
}
?>