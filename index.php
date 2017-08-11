<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK Coding</h1>
		<h2><a href="logout.php">LOGOUT</a></h2>
	</header>

	<?php
		// mengaktifkan session
		session_start();
 
		// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
		if($_SESSION['status'] !="login"){
			header("location:login.php");
		}
 
		// menampilkan pesan selamat datang
		echo "Hai, selamat datang ". $_SESSION['username'];

	?>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
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