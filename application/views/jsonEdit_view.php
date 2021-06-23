<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php include "menu.php"; ?>
	<form method="post" action="jsonEdit/do_edit">
		<div class="container">
			<?php $stt = 0; ?>
			<?php foreach ($mangdl as $key): ?>
				<?php $stt++; ?>
				<h2>contact số: <?= $stt ?></h2>
				<label for="name">Tên</label>
				<input type="text" value="<?= $key['ten'] ?>" name="ten[]" id="name">
				<label for="sdt">Số điện thoại</label>
				<input type="text" value="<?= $key['sdt'] ?>" name="sdt[]" id="sdt">
				
			<br>
			<?php endforeach ?>		
			<input type="submit" class="btn btn-success" value="Lưu">
		</div>
	</form>

</body>
</html>