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
	<div class="container">
		<?php foreach ($arrketqua as $key => $value): ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-tittle">
						Tên: <?= $value->ten ?>
					</h4>
					<p>sdt: <?= $value->sdt?></p>
					<a href="json/xoa_json/<?= $value->sdt ?>">Xóa</a>
				</div>
			</div>


		<?php endforeach ?>		
	</div>

	<div class="container">
		<form method="post" action="json/do_add">
			<label for="name">Tên</label>
			<input type="text" name="ten" id="name">
			<label for="sdt">Số điện thoại</label>
			<input type="text" name="sdt" id="sdt">
			<input type="submit" class="btn btn-success" value="Tạo mới">
		</form>
	</div>

</body>
</html>