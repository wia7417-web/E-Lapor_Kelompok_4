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
				<div class="card shadow-sm">
					<div class="card-body p-4">

						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {

							$nama    = $_POST['nama'];
							$laporan = $_POST['laporan'];
							$tmpName = $_FILES['foto']['tmp_name'];

							$data = base64_encode(file_get_contents($tmpName));
							$tipe = mime_content_type($tmpName);
							echo "
							<div class='text-center mb-4'>
								<i class='bi bi-check-circle-fill text-success' style='font-size: 70px;'></i>

								<h2 class='text-primary fw-bold mt-3'>
									Hasil Laporan
								</h2>

								<p class='text-muted'>
									Laporan berhasil dikirim
								</p>
							</div>

							<div class='card border-0 bg-light mb-3'>
								<div class='card-body'>

									<p class='fw-bold text-primary mb-1'>
										<i class='bi bi-person-fill'></i>
										Nama Pelapor
									</p>

									<p class='mb-0'>$nama</p>

								</div>
							</div>

							<div class='card border-0 bg-light mb-4'>
								<div class='card-body'>

									<p class='fw-bold text-primary mb-1'>
										<i class='bi bi-chat-left-text-fill'></i>
										Isi Laporan
									</p>

									<p class='mb-0'>$laporan</p>

								</div>
							</div>

							<div class='mb-4'>
								<p class='fw-bold text-primary'>
									<i class='bi bi-image-fill'></i>
									Foto Bukti
								</p>

								<div class='text-center'>
									<img src='data:$tipe;base64,$data'
									class='img-fluid rounded shadow'
									style='max-height: 400px;'>
								</div>
							</div>

							<a href='index.php' class='btn btn-primary w-100 py-2 fw-semibold'>
								<i class='bi bi-arrow-left-circle'></i>
								Kembali
							</a>

							";
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-dark text-white text-center p-3">
		© 2026 E-Lapor | Kelompok 4
	</footer>

</body>
</html>