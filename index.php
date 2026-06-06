<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Lapor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-megaphone-fill"></i>
                E-Lapor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-primary bg-gradient text-white py-5">
        <div class="container text-center">
            <h1 class="fw-bold">
                Selamat Datang di Sistem E-Lapor
            </h1>
            <p class="lead mt-3 fw-semibold">
                Bersama membangun lingkungan yang lebih baik
            </p>
            <a href="form_lapor.php" class="btn btn-light mt-3">
                <i class="bi bi-pencil-square"></i>
                Buat Laporan
            </a>
        </div>
    </section>

    <section class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">
                <i class="bi bi-clipboard-data"></i>
                Data Laporan Masyarakat
            </h2>
        </div>
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="bi bi-table"></i>
                    Laporan Terbaru
                </h5>
            </div>
			
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="10%" class="text-center">No</th>
								<th width="20%">Nama Pelapor</th>
								<th width="40%">Isi Laporan</th>
								<th width="20%" class="text-center">Status</th>
								<th width="20%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM laporan ORDER BY id DESC");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
									<td>
										<strong><?= $d['nama_pelapor']; ?></strong>
									</td>
									<td>
										<?= $d['isi_laporan']; ?>
									</td>
									<td class="text-center">
										<?php
										if ($d['status'] == "Menunggu") {
											echo "<span class='badge bg-primary'>Menunggu</span>";
										} elseif ($d['status'] == "Diproses") {
											echo "<span class='badge bg-warning text-dark'>Diproses</span>";
										} else {
											echo "<span class='badge bg-success'>Selesai</span>";
										}
										?>
									</td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white text-center p-3">
        © 2026 E-Lapor | Kelompok 4
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>