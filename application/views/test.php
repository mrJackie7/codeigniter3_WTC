<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ujian Web Programming - Ciputra</title>
	<link rel="icon" href="<?= base_url('assets/favicon.ico') ?>">
	<link href="<?= base_url('assets/bootstrap-3.4.1/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/bootstrap-3.4.1/css/bootstrap-theme.min.css') ?>" rel="stylesheet">
</head>

<body>
	<div class="container theme-showcase" role="main">
		<br>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Ciputra Programming Test</h1>
			<p class="text-justify">Pada ujian ini, hanya ada satu qualifikasi yang diperlukan yaitu diharapkan kandidat dapat mengerti basic dalam menggunakan framework PHP Codeigniter, Library jQuery, dan Library CSS Bootstrap. Oleh karena itu, diharapkan bahwa jawaban dikerjakan dalam CodeIgniter 3 / source code yang telah diberikan. <b>Pekerjaan tidak memerlukan koneksi ke database.</b></p>
		</div>

		<!--Requirement-->
		<div class="page-header">
			<h1>Requirement</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>PHP Development Environtment seperti <a href="https://www.apachefriends.org/index.html">XAMPP</a> (Recommended)</li>
					<li>PHP Framework <a href="https://codeigniter.com/download">CodeIgniter 3</a> (Sudah tersedia dalam Source Code Ujian)</li>
					<li>CSS Library <a href="https://getbootstrap.com/docs/3.4/getting-started/">Bootstrap 3.4.1</a> (Sudah tersedia dalam Source Code Ujian)</li>
					<li>JS Library <a href="https://jquery.com/download/">jQuery 3.6.0</a>  (Sudah tersedia dalam Source Code Ujian)</li>
				</ul>
			</div>
		</div>

		<!--Case Study-->
		<div class="page-header">
			<h1>Case Study</h1>
		</div>
		<div class="row">
			<div class="col-md-12 text-justify">
			PT Cptr merupakan franchise restoran yang memiliki ribuan cabang di Indonesia. Pada ulang tahun restoran Cptr yang ke 60, Cptr memberikan promo khusus bagi member yang telah terdaftar sebagai pelanggan setia restoran Cptr ketika makan di restoran Cptr semua cabang. Dikarenakan banyaknya pelanggan dalam setiap cabang restoran Cptr, diperlukan sebuah program untuk melakukan verifikasi member setia dari restoran Cptr. Dengan adanya program verifikasi, diharapkan bahwa hanya benar-benar member setia dari Cptr yang mendapatkan promo khusus restoran Cptr.
			</div>
		</div>

		<!--Direction-->
		<div class="page-header">
			<h1>Instruction</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li>
						Letakkan Source Code Ujian (<b>WebTestCiputra</b>) pada folder <b>htdocs</b> (apabila anda menggunakan XAMPP). lalu akses <a href="<?=base_url()?>">127.0.0.1/WebTestCiputra</a> 
					</li>
					<li>
						Pengerjaan harus dilakukan dengan memodifikasi Source Code Ujian yang diberikan, tidak perlu mendownload Framework maupun Library lagi.
					</li>
					<li>Buatlah controller CodeIgniter baru bernama <b>Jawaban</b></li>
					<li>Terdapat 2 buah fungsi pada controller <b>Jawaban</b> yaitu:
						<ol>
							<li>function <b>index</b>/<b>display</b> sebagai tampilan antarmuka.</li>
							<li>function <b>provideDataCustomer</b> sebagai penyedia data <i>customer</i>.</li>
						</ol>
					</li>
					<li>
						Pada function <b>display</b>, muncul sebuah halaman (view) yang berisi :
						<ul>
							<li>Satu buat text input untuk menginput satu buah data <b>ID Customer</b>. User menginput secara manual dalam format input yang diasumsikan selalu benar.</li>
							<li>Satu buat tombol bertuliskan "Validasi ID Customer".</li>
							<li>Ketika tombol diklik, maka akan ada pengecekan: 
								<ol>
									<li>Jika input text kosong, maka tampilkan alert "Tolong mengisi ID Customer".</li>
									<li>Jika input text tidak kosong, lakukan <b>AJAX Request</b> memanggil function <b>provideDataCustomer</b> yang ada pada controller <b>jawaban</b> lalu tampilkan pesan yang diberikan dalam bentuk alert.</li>
								</ol>
							</li>
						</ul>
					</li>
					<li>
						Pada function <b>provideDataCustomer</b>, digunakan sebagai penyedia data customer yang perlu memenuhi requirement sebagai berikut :
						<ul>
							<li>Memiliki Data Customer berupa array. Berikut merupakan contoh array (silahkan menambah data dummy sendiri jika diperlukan):<br>
								<div class="well">[['c10341', 'Darwin'], ['c20630', 'Ari'], ['c30413', 'Raka'], ['c30801', 'Okta']]</div>
								Format Data Customer: <b>[[idCustomer1, namaCustomer1], [idCustomer2, namaCustomer2], ..]</b>
							</li>
							<li>Function menerima string input berupa <b>idCustomer</b> dari tampilan antarmuka.</li>
							<li>Ketika function dipanggil, maka function melakukan beberapa prosedur :
								<ol>
									<li>Apabila <b>idCustomer</b> yang di-input tidak terdapat pada array Data Customer, maka berikan pesan "Data Customer Tidak Ditemukan." </li>
									<li>Apabila <b>idCustomer</b> yang di-input ada dalam array Data Customer, maka berikan pesan "Customer Terverifikasi. Selamat Datang, [Nama Customer]"</li>
								</ol> 
							</li>
						</ul>
					</li>
					<li>
						Pastikan juga controller jawaban dapat diakses melalui tombol di bawah (anda dapat merubah link pada tombol).
					</li>
				</ul>
			</div>
		</div>

		<div class="col-md-12 text-center">
			<a href="<?=base_url('index.php/Jawaban')?>" class="btn btn-primary">Menuju Halaman Jawaban</a>
		</div>

		<div class="col-md-12 text-center">
			<h3>Selamat Mengerjakan!</h3>
		</div>

		<footer>
			© <?=date('Y')?> Ciputra-SH1 Power By <a href="https://codeigniter.com/download">CodeIgniter</a>
		</footer>
		
	</div> <!-- /container -->

	
	<script src="<?= base_url('assets/jQuery-3.6.0/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap-3.4.1/js/bootstrap.min.js') ?>"></script>
</body>

</html>