<div class="container">
  <div>
		<h3>Password Reset </h3>
		<br />
		Harap berikan alamat email valid yang Anda gunakan untuk mendaftar</div>
	<hr />
	<div class="row">
		<div class="col-md-8">
			<?php 
				$this :: display_page_errors(); 
			?>
			<form method="post" action="<?php print_link("passwordmanager/postresetlink?csrf_token=" . Csrf::$token); ?>">
				<div class="row">
					<div class="col-9">
						<input value="<?php echo get_form_field_value('email'); ?>" placeholder="Masukan Email Anda" required="required" class="form-control default" name="email" type="email" />
					</div>
					<div class="col-3">
						<button class="btn btn-success" type="submit"> Kirim <i class="fa fa-envelope"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br />
	<div class="text-info">
		Tautan akan dikirim ke email Anda yang berisi informasi yang Anda perlukan untuk kata sandi Anda
	</div>
</div>




