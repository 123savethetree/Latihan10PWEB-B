<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>Prosus Inten</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Pendaftaran Tahun Ajaran 2023/2024</a></li>
			<li><a href="list-siswa.php">Daftar siswa</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
