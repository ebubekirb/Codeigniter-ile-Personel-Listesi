<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personel Ekle</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
	<div class="container">
		<br><br>
		<div class="row">
			<div class="col-md-6">
				<h3>Personel Düzenle</h3>
				<form action="<?php echo base_url("Personel/update/$personel->id"); ?>" method="post">
					<div class="form-group">
						<label for=""><strong>Personelin Adı</strong></label>
						<input type="text" class="form-control" name="personel_ad" value="<?php echo $personel->personel_ad; ?>">
					</div>
					<div class="form-group">
						<label for=""><strong>E-mail</strong></label>
						<input type="text" class="form-control" name="email" value="<?php echo $personel->email; ?>">
					</div>
					<div class="form-group">
						<label for=""><strong>Telefon</strong></label>
						<input type="text" class="form-control" name="telefon" value="<?php echo $personel->telefon; ?>">
					</div>
					<div class="form-group">
						<label for=""><strong>Departman</strong></label>
						<input type="text" class="form-control" name="departman" value="<?php echo $personel->departman; ?>">
					</div>
					<div class="form-group">
						<label for=""><strong>Adresi</strong></label>
						<input type="text" class="form-control" name="adres" value="<?php echo $personel->adres; ?>">
					</div>

					<button type="submit" class="btn btn-outline-success">Kaydet</button>
					<a href="<?php echo base_url(); ?>" class="btn btn-outline-danger">İptal</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>