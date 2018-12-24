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
				<h3>Personel Ekle</h3>
				<form action="<?php echo base_url("Personel/insert"); ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for=""><strong>Personelin Adı</strong></label>
						<input type="text" class="form-control" name="personel_ad">
					</div>
					<div class="form-group">
						<label for=""><strong>E-mail</strong></label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for=""><strong>Telefon</strong></label>
						<input type="text" class="form-control" name="telefon">
					</div>
					<div class="form-group">
						<label for=""><strong>Departman</strong></label>
						<input type="text" class="form-control" name="departman">
					</div>
					<div class="form-group">
						<label for=""><strong>Adresi</strong></label>
						<input type="text" class="form-control" name="adres">
					</div>
					<div class="form-group">
						<label for=""><strong>Personeli Resmi</strong></label><br>
						<input type="file" class="" name="img_id">
					</div>

					<button type="submit" class="btn btn-outline-success">Kaydet</button>
					<a href="<?php echo base_url(); ?>" class="btn btn-outline-danger">İptal</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>