<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="boostrap/css/bootstrap.min.css" />
    <script src="boostrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
    <title>Menampilkan data dari database</title>
	<style>
        table,tr,td {
            border: 1px solid black;
			padding: 10px 15px;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
<div id="container">
        <header>
            <h1 align="center">Sistem Informasi Klinik</h1>
        </header>
		<nav>
 <a href="indeks2.php">Home</a>
 <a href="about.php"class="active">Data</a>
 <a href="">Artikel</a>
 <a href="">Kontak</a>
</nav>
<section id="hero"></section>
<section id="wrapper">
 <section id="main"></section>
 <aside id="sidebar"></aside>
</section>

<style css >
/* navigasi */
nav {
 display: block;
 background-color: #A52A2A;
}
nav a {
 padding: 15px 30px;
 display: inline-block;
 color: #ffffff;
 font-size: 14px;
 text-decoration: none;
 font-weight: bold;
}
nav a.active,
nav a:hover {
 background-color: #A52A2A;
}
</style>
		<section id="hero">
		<h1>Selamat Datang Di Sistem informasi Klinik</h1>
		<p>Website ini berisi data - data klinik Nurokhim. website dinamis ini dibuat untuk memenuhi tugas matakuliah Sistem Basis Data pada pertemua 12.</p>
		<a href="home.html" class="btn btn-large">Learn more &raquo;</a>
		</section>
		<div background="green">
		<hr class="divider" />
			<article class="entry">
				<h2>Pelayanan Rawat Inap</h2>
				<img src="klinik2.jpg" alt="klinik" width="189px" class="left-img">
				<p>Kami melayani pasien rawat inap menggunakan BPJS maupun asuransi swasta dengan proses yang mudah</p>
			</article
		<hr class="divider" />
			<article class="entry">
				<h2>Pelayanan Rawat Jalan</h2>
				<img src="kinik1.png" alt="klinik" width="189px" class="left-img">
				<p>Kami melayani pasien rawat jalan menggunakan BPJS maupun asuransi swasta dengan proses yang mudah</p>
			</article>
		</div>
	<footer>
		<p>&copy; 2021 - Universitas Pelita Bangsa</p>
	</footer>
</div>
</body>
</html>