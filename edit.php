<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM laporan WHERE id='$id'");
$d = mysqli_fetch_array($data);
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

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-megaphone-fill"></i>
                E-Lapor
            </a>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <i class="bi bi-pencil-square text-primary" style="font-size: 60px;"></i>
                            <h2 class="text-primary fw-bold mt-3">
                                Form Edit
                            </h2>
                        </div>

                        <form action="proses_update.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-person-fill text-primary"></i>
                                    Nama Pelapor
                                </label>
                                <input type="text" class="form-control" value="<?php echo $d['nama_pelapor']; ?>" readonly>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-chat-left-text-fill text-primary"></i>
                                    Isi Laporan
                                </label>
                                <textarea class="form-control" rows="5" readonly><?php echo $d['isi_laporan']; ?></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-flag-fill text-primary"></i>
                                    Status Laporan
                                </label>
                                <select name="status" class="form-select" required>
                                    <option value="Menunggu"
                                        <?php if($d['status'] == 'Menunggu') echo 'selected'; ?>>
                                        Menunggu
                                    </option>

                                    <option value="Diproses"
                                        <?php if($d['status'] == 'Diproses') echo 'selected'; ?>>
                                        Diproses
                                    </option>

                                    <option value="Selesai"
                                        <?php if($d['status'] == 'Selesai') echo 'selected'; ?>>
                                        Selesai
                                    </option>
                                </select>
                            </div>

                            <div class="d-flex gap-2">
                                <a href="index.php" class="btn btn-danger py-2 flex-fill fw-semibold">
                                    <i class="bi bi-arrow-left-circle-fill"></i>
                                    Kembali
                                </a>
                                <button type="submit" class="btn btn-primary py-2 flex-fill fw-semibold">
                                    <i class="bi bi-check-circle-fill"></i>
									Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <footer class="bg-dark text-white text-center p-3">
        © 2026 E-Lapor | Kelompok 4
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>