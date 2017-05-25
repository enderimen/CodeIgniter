<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kullanıcı Giriş</title>
</head>
<body>
	<form action="<?php echo base_url('anasayfa/giris'); ?>" method="POST"><!--base_url mize sub domain olarak anasayfa/giris kısmını gönderdik-->
		<input type="text" name="kadi" placeholder="Kullanıcı Adı" required><br>
		<input type="password" name="sifre" placeholder="Şifre" required><br>
		<input type="submit">
	</form>
</body>
</html>