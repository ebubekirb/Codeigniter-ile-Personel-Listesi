<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personel Listesi</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
	
	
	<div class="container">
		<h3 class="text-center" style="margin-top: 20px">Personel Listesi</h3>
		<hr>
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>#id</th>
			<th>Personel Adı <a href="#">[a-Z]</a><a href="#">[Z-a]</a></th>
			<th>E-mail <a href="#">[a-Z]</a><a href="#">[Z-a]</a></th>
			<th>Telefon <a href="#">[0-9]</a><a href="#">[9-0]</a></th>
			<th>Departman <a href="#">[a-Z]</a><a href="#">[Z-a]</a></th>
			<th>Adres <a href="#">[a-Z]</a><a href="#">[Z-a]</a></th>
			<td>İşlemler</td>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Emre İrem</td>
				<td>eirem@gmail.com</td>
				<td>0544 444 44 44</td>
				<td>Yazılım</td>
				<td>İstanbul</td>
				<td>
					<a class="btn btn-sm btn-warning" href="#">Düzenle</a>
					<a class="btn btn-sm btn-danger" href="#">Sil</a>
				</td>
			</tr>
		</tbody>
	</table>
	</div>

</body>
</html>