<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            #body {
	background: #eee;
	margin:0;
	font-family: 'Open Sans', sans-serif;
}
 #bg {
 	background: #1abf9f;
 }
#hr {
	border:5px;
	background:#dedede;
	height:1px;
}		
 
#header{
	text-align: center;
	color: white;
}
 
#header .judul{
	font-size: 25pt;
	font-family: bauhaus93;
}
 
#header .deskripsi{
	font-size: 11pt;
}
 
.wrap {
	width: 950px;
	margin:25px auto;
}
 .tamb {
 	overflow:hidden;
	color:black;
	list-style: none;
	float:left;
	padding:0;
	width: 650px;
	height: 30px;
	margin:0 0 0;
	background: white;}


nav.menu ul {
	overflow:hidden;
	color:#fff;
	list-style: none;
	float:left;
	padding:0;
	width: 650px;
	margin:0 0 0;
	background: #1abc9c;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.55);
}
 
nav.menu ul li {
	margin:0;
	float:left;
}
 
nav.menu ul a {
	padding:25px;
	display:block;
	font-weight:600;
	font-size: 16px;
	color:#fff;
	text-transform: uppercase;
	transition: all 0.5s ease;
	text-decoration: none;
}
 
nav.menu ul a:hover {
	text-decoration: underline;
	background:#16a085;
}
#content{
	width: 699px;
	height: 703px;
	margin-left: 300px;
	background: url(w2.jpg);
	font-family: britannic bold;
	font-size: 20;
	border: 1px solid black;
	}
 
.sidebar {
	top: 100;
	float:right;
	width:275px;
}
 
.sidebar .widget {
	padding:25px;
	margin:0 0 25px;
	background:#fff;
	border-bottom: 2px solid #fff;
	transition: all 0.5s ease;
}
 
.sidebar .widget:hover {
	border-bottom: 2px solid #3498db;
}
 
.sidebar .widget h2 {
	padding:0;
	margin:0 0 15px;
	color:#3498db;
	font-size: 18px;
	font-weight:800;
	text-transform: uppercase;
}
 
.sidebar .widget p {
	font-size: 14px;
}
 
.sidebar .widget p:last-child {
	margin:0;
}
 
.blog {
	float:left;
}
 
.conteudo {
	width:600px;
	padding:25px;
	margin:25px auto;
	background: #fff;
	border:1px solid #dedede;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
	box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
}
 
.conteudo img {
	min-width: 650px;
	margin:0 0 25px -25px;
	max-width: 650px;
}

.back {
	background: url(w4.jpg);
}

.conteudo h1 {
	padding:0;
	margin:0 0 15px;
	font-weight: normal;
	color: #666;
	font-family: Georgia;
}
 
.conteudo p:last-child {
	margin: 0;
}
 
.conteudo .continue-lendo {
	color:#000;
	transition: all 0.5s ease;
	text-decoration: none;
	font-weight: 700; 
}
 
.conteudo .continue-lendo:hover {
	margin-left:10px;
}
 
.post-info {
	float: right;
	font-size: 12px;
	margin: -10px 0 15px;
	text-transform: uppercase;
	background-color: white;
}
.zebra-table {
width: 100%;
border-collapse: collapse;
box-shadow: 0 2px 3px 1px #ddd;
overflow: hidden;
border:10px solid #fff;
}
.zebra-table th,.zebra-table td{
vertical-align: top;
padding:10px 7px;
text-align: left;
margin:0;
}
.zebra-table tbody tr:nth-child(odd) { 
background:#16a085;

}
        </style>
    <head>
	<title>info kampus</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body background="w4.jpg">
	
	
	<header id="header">
		<div id="bg">
		<h1 class="judul">Info Kampus</h1>
		<p class="deskripsi">Info-info penting tentang Perguruan Tinggi Negeri</p></div>
	</header>
	
	
	<div class="wrap">
		
		<nav class="menu">
			<ul>
				<li>
					<a href="coba.html">Home</a>
				</li>
				<li>
					<a href="rank.html">Ranking</a>
				</li>
				<li>
					<a href="jalur.html">Jalur Masuk</a>
				</li>
				<li>
					<a href="mot.html">Motivasi</a>
				</li>
			</ul>
		</nav>
		
 
		
		<aside class="sidebar">
			<div class="widget">
				<h2>HALLO!!</h2>
				<p>Selamat datang di Info Kampus, situs ini menyediakan info mengenai PTN yang ada di Indonesia.</p>
			</div>
			<div class="widget">
				<h2>Apasih PTN itu??</h2>
				<p>PTN merupakan kepanjangan dari Perguruan Tiggi Negeri(Universitas Negeri), Indonesia memiliki banyak PTN seperti UB,UI,ITB,IPB dan masih banyak lagi tentunya, jalur masuk ke PTN yaitu melalu SNMPTN, SBMPTN, dan sebagian PTN ada yang mengunakan jalur Mandiri.</p>
			</div>
		</aside>
		
 
		
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Ahmad Dani Alfaza</b>
				</div>
				<img src="universitas.png">
				<h1> Urutan Peringkat Universitas Terbaik di Indonesia </h1>
				<hr>
				<p>
					Kementerian Riset Teknologi dan Pendidikan Tinggi Negeri (Kemenristekdikti) mengeluarkan hasil klasterisasi perguruan tinggi non-vokasi di Indonesia tahun 2018.
					Perguruan tinggi tersebut terdiri dari universitas, institut, dan sekolah tinggi.

					Pengumuman ini dikeluarkan secara resmi oleh Kemenristekdikti
					Artikel ini telah tayang di tribun-medan.com dengan judul Inilah 100 Universitas Terbaik Indonesia versi Kemeristekdikti, Kampusmu Peringkat Berapa?
				</p>				
				<a href="rank.html" class="continue-lendo">Selengkapnya →</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Ahmad Dani Alfaza</b>
				</div>
				<img src="sm.jpg">
				<h1> Jalur Masuk PTN </h1>
				<hr>
				<p>
					Ketika kita duduk di bangku Sekolah Menengah Atas atau sederajat, kita akan mengalami fase kegalauan di mana bingung untuk menentukan universitas mana yang akan kita kejar. Belum lagi dengan jurusan kuliah yang ingin kita ambil. Masa depan kita bisa dimulai dari keputusan sederhana tapi berdampak besar, yaitu mengambil jurusan kuliah yang tepat. Tentunya kita enggak mau dong salah ambil jurusan atau salah masuk universitas.

					Sebagian dari kita saat ini mungkin sedang mengejar masuk Perguruan Tinggi Negeri (PTN).jalur masuk PTN, yang saat ini dikenal ada 3 jalur masuk, yaitu Seleksi Nasional Masuk Perguruan Tinggi Negeri (SNMPTN), Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN), dan Ujian Mandiri yang diselenggarakan langsung dari pihak PTN terkait.
				</p>				
				<a href="jalur.html" class="continue-lendo">Selengkapnya →</a>
			</div>
			
		
	</div>

</body>
</html>