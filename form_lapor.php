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
			<div class="col-md-7">
				<div class="card shadow-sm border-0">
					<div class="card-body p-5">
						<div class="text-center mb-4">
							<i class="bi bi-pencil-square text-primary" style="font-size: 60px;"></i>
							<h2 class="text-primary fw-bold mt-3">
								Form Laporan
							</h2>
						</div>
						<form action="proses_lapor.php" method="POST" enctype="multipart/form-data" novalidate>
							<div class="mb-4">
								<label class="form-label fw-semibold">
									<i class="bi bi-person-fill text-primary"></i>
									Nama
								</label>
								<input type="text" name="nama" class="form-control" rows="5" placeholder="Masukkan Nama" required>
							</div>

							<div class="mb-4">
								<label class="form-label fw-semibold">
									<i class="bi bi-chat-left-text-fill text-primary"></i>
									Isi Laporan
								</label>
								<textarea name="laporan" class="form-control" rows="5" placeholder="Masukkan Laporan..." required></textarea>
							</div>

							<div class="mb-4">
								<label class="form-label fw-semibold">
									<i class="bi bi-image-fill text-primary"></i>
									Upload Bukti
								</label>
								<input type="file" name="foto" class="form-control" required>
							</div>

							<div class="d-flex gap-2">
								<a href="index.php" class="btn btn-danger w-50 py-2 fw-semibold">
									<i class="bi bi-x-circle-fill"></i>
									Batal
								</a>
								<button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
									<i class="bi bi-send-fill"></i>
									Kirim
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
	<script src="script.js"></script>

</body>
</html>