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
        <h2 class="text-center fw-bold mb-5">
            Laporan Terbaru
        </h2>
        <div class="row">
		
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Jalan Rusak
                        </h5>
                        <p class="card-text">
                            Jalan berlubang di daerah pusat kota yang membahayakan pengendara.
                        </p>
                        <a href="#" class="btn btn-primary btn-sm">
                            Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Lampu Jalan Mati
                        </h5>
                        <p class="card-text">
                            Lampu penerangan jalan tidak berfungsi sejak beberapa hari terakhir.
                        </p>
                        <a href="#" class="btn btn-primary btn-sm">
                            Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Sampah Menumpuk
                        </h5>
                        <p class="card-text">
                            Tumpukan sampah di lingkungan warga menyebabkan bau tidak sedap.
                        </p>
                        <a href="#" class="btn btn-primary btn-sm">
                            Detail
                        </a>
                    </div>
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