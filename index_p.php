<div class="container text-center">
<div class="well well-lg">
<?php
		include "koneksi/koneksi.php";
		$nama = $_POST['nama'];
		$keterangan = $_POST['ket']; 
		$harga = $_POST['harga'];  
		$jumlah = $_POST['jumlah']; 



$sql = "insert into produk (nama_produk, keterangan, harga, jumlah) values ('$nama', '$keterangan','$harga', '$jumlah')";


if (mysql_query($sql)){ #jika proses query $sql di atas berhasil maka munculkan pesan berhasil
echo "Data Berhasil Ditambahkan <p> <a href='javascript:history.back()'>Kembali</a>";
}
else{ #kebalikanya (jika proses query $sql gagal maka munculkan pesan gagal
echo "Data Gagal Ditambahkan <a href='javascript:history.back()'>BACK</a>";
}

?>		
</div>
</div>			