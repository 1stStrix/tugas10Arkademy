<!DOCTYPE html>
<html lang="en">
<head>
  <title>Belajar CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>

<div class="container">
	<div class="well">
		<div id="legend">
			<legend class="">CRUD TABLE</legend>
		</div> 
		<form id="tab" action="index_p.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Produk :</label>
				<input type="text" id="nama" name="nama" class="form-control" style="width:40%;"  required>
			</div>
			
			<div class="form-group">
				<label for="nama">Keterangan :</label>
				<input type="text" id="ket" name="ket" class="form-control" style="width:40%;" required>
			</div>

			<div class="form-group">
				<label>Harga Produk :</label>
				<input type="text" id="harga" name="harga" class="form-control" style="width:40%;"  required>
			</div>
			
			<div class="form-group">
				<label for="nama">Jumlah</label>
				<input type="text" id="jumlah" name="jumlah" class="form-control" style="width:40%;" required>
			</div>
			

			   <button class="btn btn-success">Kirim</button>
		</form>
	</div>
</div>

</body>
</html>