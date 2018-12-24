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

				<form action="<?php echo base_url("kullanici/login") ?>" method="post">
					<div class="form-group">
					<label for="">E-posta Adresi</label>
					<input type="text" class="form-control" name="email">
					</div>

					<div class="form-group">
						<label for="">Şifre</label>
						<input type="password" class="form-control" name="pass">
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Doğrulama Kodu</label>
								<input type="password" class="form-control" name="captcha">
							</div>
						</div>
						<div class="col-md-3">
							Dogrulama Kodu
						</div>
					</div>
					
					<button type="submit" class="btn btn-outline-primary">Giriş Yap</button>

				</form>
			</div>
		</div>
	</div>
</body>
</html>