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

		<a href="<?php echo base_url("Personel/insert_form") ?>" class="btn btn-primary btn-sm">Yeni Ekle</a>
		<br><br>
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>#id</th>
			<th>Personel Adı 
				<a href="<?php echo base_url("personel/order/personel_ad/ASC") ?>">[a-Z]</a>
				<a href="<?php echo base_url("personel/order/personel_ad/DESC") ?>">[Z-a]</a>
			</th>

			<th>
				E-mail <a href="<?php echo base_url("personel/order/email/ASC") ?>">[a-Z]</a>
				<a href="<?php echo base_url("personel/order/email/DESC") ?>">[Z-a]</a>
			</th>

			<th>
				Telefon 
				<a href="<?php echo base_url("personel/order/telefon/ASC") ?>">[0-9]</a>
				<a href="<?php echo base_url("personel/order/telefon/DESC") ?>">[9-0]</a>
			</th>

			<th>Departman
			 <a href="<?php echo base_url("personel/order/departman/ASC") ?>">[a-Z]</a>
			 <a href="<?php echo base_url("personel/order/departman/DESC") ?>">[Z-a]</a>
			</th>

			<th>
				Adres 
				<a href="<?php echo base_url("personel/order/adres/ASC") ?>">[a-Z]</a>
				<a href="<?php echo base_url("personel/order/adres/DESC") ?>">[Z-a]</a>
			</th>

			<td>İşlemler</td>
			
		</thead>
		<tbody>
			<?php foreach($list as $row){ ?>
			<tr>
				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->personel_ad; ?></td>
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->telefon ?></td>
				<td><?php echo $row->departman; ?></td>
				<td><?php echo $row->adres; ?></td>
				<td>
					<a class="btn btn-sm btn-warning" href="Personel/update_form/<?php echo $row->id ?>">Düzenle</a>
					<a class="btn btn-sm btn-danger" href="Personel/delete/<?php echo $row->id ?>">Sil</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>

</body>
</html>