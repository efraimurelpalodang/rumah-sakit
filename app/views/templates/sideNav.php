<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>
		<span class="text">AdminHub</span>
	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="#">
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
		<li>
			<a href="data_pasien.php">
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