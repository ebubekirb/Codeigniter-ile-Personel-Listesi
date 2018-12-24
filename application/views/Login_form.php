<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kullanıcı Girişi</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<h3 class="text-center">Kullanıcı Girişi</h3>
				<hr>

				<?php 
					$alert = $this->session->userdata("alert"); 

					if ($alert) { ?>
						
						<div class="alert alert-<?php echo $alert["type"]; ?>">
							<p><strong><?php echo $alert["title"]." "; ?></strong><?php echo $alert["message"] ?></p>
						</div>
				<?php } ?>

				<form action="<?php echo base_url("kullanici/login") ?>" method="post">
					<div class="form-group">
					<label for=""><strong>E-posta Adresi</strong></label>
					<input type="text" class="form-control" name="email">
					</div>

					<div class="form-group">
						<label for=""><strong>Şifre</strong></label>
						<input type="password" class="form-control" name="sifre">
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for=""><strong>Doğrulama Kodu</strong></label>
								<input type="text" class="form-control" name="captcha">
							</div>
						</div>
						<div class="col-md-3">
							<br>
							<?php echo $captcha; ?>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-primary btn-block">Giriş Yap</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>