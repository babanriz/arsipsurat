<style>
	.info-404 h1 {
		font-size: 172px;
		font-weight: bold;
		color: red;
	}
</style>
<div class="container">
	<div class="info-404 text-center">
		<h1 class="my-3">404</h1>
		<h2 class="text-muted">Halaman Tidak Ditemukan </h2>
		<?php
		if (DEVELOPMENT_MODE) {
		?>
			<div class="text-muted my-3"><small><?php echo $this->view_data; ?></small></div>
		<?php
		}
		?>
		<div class="text-center">
			<a href="<?php print_link(HOME_PAGE); ?>" class="btn btn-primary">Kembali</a>
		</div>
	</div>
</div>