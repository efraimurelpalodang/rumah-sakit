<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>
		<span class="text">AdminHub</span>
	</a>
	<ul class="side-menu top">
		<li class="<?php echo isset($data['dash']) ? $data['dash'] : ''; ?>">
			<a href="<?= BASEURL ?>/dashboard/index">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="pendaftaran.php">
				<i class='bx bxs-user' ></i>
				<span class="text">Pendaftaran</span>
			</a>
		</li>
		<li class="<?php echo isset($data['pasien']) ? $data['pasien'] : ''; ?>">
			<a href="<?= BASEURL ?>/pasien/index">
				<i class='bx bx-food-menu' ></i>
				<span class="text">Data Pasien</span>
			</a>
		</li>
		<li>
			<a href="poli_spesialis.php">
				<i class='bx bx-plus-medical' ></i>
				<span class="text">Informasi Lainnya</span>
			</a>
		</li>
		<li>
			<a href="team.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Team</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu">
		<li>
			<a href="#">
				<i class='bx bxs-cog' ></i>
				<span class="text">Settings</span>
			</a>
		</li>
		<li>
			<a href="<?= BASEURL; ?>/login/index" class="logout">
				<i class='bx bxs-log-out-circle' ></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>
<!-- SIDEBAR -->

<!-- CONTENT -->
<section id="content">
	<!-- NAVBAR -->
	<nav>
		<i class='bx bx-menu bx-sm' ></i>
		<a href="#" class="nav-link">Categories</a>
		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
			</div>
		</form>
		<input type="checkbox" id="switch-mode" hidden>
		<label for="switch-mode" class="switch-mode"></label>
		<a href="#" class="notification">
			<i class='bx bxs-bell' ></i>
			<span class="num">8</span>
		</a>
		<a href="#" class="profile">
			<img src="<?= BASEURL; ?>/img/profile.jpg">
		</a>
	</nav>
	<!-- NAVBAR -->
	
	<!-- MAIN -->
	<main>
	<div class="head-title">
		<div class="left">
			<h1><?= $data['judul']; ?></h1>
			<ul class="breadcrumb">
				<li>
					<a href="#"><?= $data['judul']; ?></a>
				</li>
				<li><i class='bx bx-chevron-right' ></i></li>
				<li>
					<a class="active" href="#">Home</a>
				</li>
			</ul>
		</div>
		<a href="#" class="btn-download">
		<i class='bx bx-wink-smile bx-sm'></i>
			<span class="text">Have a good activity</span>
		</a>
	</div>