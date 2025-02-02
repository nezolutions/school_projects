<?php require_once '../config.php';

try {
    // Mengambil data dari tabel tb_student
    $studentQuery = $con->query("SELECT * FROM tb_student");
    $students = $studentQuery->fetch_all(MYSQLI_ASSOC);

    // Mengambil data dari tabel tb_teacher
    $teacherQuery = $con->query("SELECT * FROM tb_teacher");
    $teachers = $teacherQuery->fetch_all(MYSQLI_ASSOC);

    // Mengambil data dari tabel tb_visitor
    $visitorQuery = $con->query("SELECT * FROM tb_visitor");
    $visitors = $visitorQuery->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saintek Presma 2024 - PPLG</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

body {
    font-family: 'poppins', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}
.container {
    width: 90%;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}
.tabs {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.tab {
    padding: 10px 20px;
    cursor: pointer;
    background-color: #f1f1f1;
    margin-right: 5px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.tab.active {
    background-color: #007bff;
    color: #fff;
}
.tab:hover {
    background-color: #007bff;
    color: #fff;
}
.tab-content {
    display: none;
}
.tab-content.active {
    display: block;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}
th {
    background-color: #007bff;
    color: #fff;
    text-transform: uppercase;
}
tr:nth-child(even) {
    background-color: #f6f6f6;
}
tr:hover {
    background-color: #e6e6e6;
}
footer {
    text-align: center;
    padding: 20px;
    background-color: #007bff;
    color: #fff;
    position: fixed;
    width: 100%;
    bottom: 0;
}
</style>
<body>
    <div class="container">
        <div class="tabs">
            <div class="tab active" data-tab="students" onclick="showTab('students')">Siswa</div>
            <div class="tab" data-tab="teachers" onclick="showTab('teachers')">Guru</div>
            <div class="tab" data-tab="visitors" onclick="showTab('visitors')">Pengunjung</div>
        </div>

        <div class="tab-content active" id="students">
            <h1>Data Siswa</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['username']; ?></td>
                    <td><?php echo $student['grade']; ?></td>
                    <td><?php echo $student['status']; ?></td>
                    <td><?php echo $student['message']; ?></td>
                    <td><?php echo $student['time']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="tab-content" id="teachers">
            <h1>Data Guru</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
                <?php foreach ($teachers as $teacher): ?>
                <tr>
                    <td><?php echo $teacher['id']; ?></td>
                    <td><?php echo $teacher['username']; ?></td>
                    <td><?php echo $teacher['jabatan']; ?></td>
                    <td><?php echo $teacher['status']; ?></td>
                    <td><?php echo $teacher['message']; ?></td>
                    <td><?php echo $teacher['time']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="tab-content" id="visitors">
            <h1>Data Pengunjung</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Institute</th>
                    <th>Status</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
                <?php foreach ($visitors as $visitor): ?>
                <tr>
                    <td><?php echo $visitor['id']; ?></td>
                    <td><?php echo $visitor['username']; ?></td>
                    <td><?php echo $visitor['institute']; ?></td>
                    <td><?php echo $visitor['status']; ?></td>
                    <td><?php echo $visitor['message']; ?></td>
                    <td><?php echo $visitor['time']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
<script>
function showTab(tabId) {
    const contents = document.querySelectorAll('.tab-content');
    const tabs = document.querySelectorAll('.tab');

    contents.forEach(content => content.classList.remove('active'));
    tabs.forEach(tab => tab.classList.remove('active'));

    document.getElementById(tabId).classList.add('active');
    document.querySelector(`[data-tab="${tabId}"]`).classList.add('active');

    // Save the current tab in localStorage
    localStorage.setItem('activeTab', tabId);
}

// Mengatur tab aktif berdasarkan URL atau localStorage
document.addEventListener('DOMContentLoaded', function() {
    const url = window.location.href;
    const tabIdFromUrl = url.split('#')[1];
    const tabIdFromStorage = localStorage.getItem('activeTab');

    if (tabIdFromUrl) {
        showTab(tabIdFromUrl);
    } else if (tabIdFromStorage) {
        showTab(tabIdFromStorage);
    } else {
        // Default tab if no tab is specified
        showTab('Siswa');
    }
});

    </script>
</html>
