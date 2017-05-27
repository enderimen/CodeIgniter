<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Veritabanı İşlemleri</title>
</head>
<body>
	<h3>Personel Tablosu</h3>
	
	<ul style="list-style: circle;">	
		<?php foreach ($rows as $key) {?>
			<li><?php echo "[".$key->personel_ID."] ".$key->personel_adi." ".$key->personel_soyadi; ?></li>
		<?php } ?>
	</ul>
</body>
</html>