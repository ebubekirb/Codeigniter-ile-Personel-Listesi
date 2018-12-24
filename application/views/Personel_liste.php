<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personel Listesi</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<style>
		*{
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3 class="text-center" style="margin-top: 20px">Personel Listesi</h3>
		<hr>

		<?php 
			$alert = $this->session->userdata("alert"); 

			if ($alert) { ?>
				
				<div class="alert alert-<?php echo $alert["type"]; ?>">
					<p><strong><?php echo $alert["title"]." "; ?></strong><?php echo $alert["message"] ?></p>
				</div>

		<?php } ?>
		
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo base_url("Personel/insert_form") ?>" class="btn btn-outline-primary btn-sm">Yeni Ekle</a>
			</div>
			<div align="right" class="col-md-4 offset-1 text-center">
				<?php $user = $this->session->userdata("user");?>
				<span style="font-size: 17px" class="text-primary ">Hoşgeldiniz, <?php echo $user["kullanici_adi"]; ?></span>	
			</div>
			<div align="right" class="col-md-3 offset-1">
				<a href="<?php echo base_url("Kullanici/logout") ?>" class="btn btn-outline-danger btn-sm">Çıkış Yap</a>
			</div>
		</div>
		
		<br>
		<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>#id</th>
			<th>Resim</th>
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

			<th>İşlemler</th>

		</thead>
		<tbody>
			<?php foreach($list as $row){ ?>
			<tr>
				<td><?php echo $row->id; ?></td>
				<td>
					<?php if (!empty($row->img_id)) { ?>
						<img width="50px" src="<?php echo base_url("uploads/$row->img_id") ?>" alt="">	
					<?php }

					else { ?>
						<img width="50px" src="<?php echo base_url("assets/img/default.png") ?>" alt="">
					<?php } ?>
				</td>
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