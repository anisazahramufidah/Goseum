<html>
	<head>
	<h1>Menampilkan Tabel Pengunjung</h1>
	</head>

	<body>
	    <h3>Daftar Pengunjung</h3>
	    <table border="1" class="pengunjung">
		<a href="Add_Pengunjung.php"tambah data</a>
	        <tr>
	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Document</title>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				</head>
				<body>

	        <table border="1" class="Pengunjung">
	            <tr>
	                <th>Nama Pengunjung</th>
	                <th>Tanggal Kunjungan</th>
	                <th>Alamat Pengunjung</th>
	                <th>No Hp</th>
					<th>Kunjungan Museum</th>
	            </tr>
			<?php 
	        include "Koneksi.php";
	        $query_mysql = mysqli_query($host, "SELECT * FROM pengunjung")or die(mysqli_error());
	        while($data = mysqli_fetch_array($query_mysql)){
	    ?>
	            <tr>
	                <td><?php echo $data['nama_pengunjung']; ?></td>
	                <td><?php echo $data['tanggal_kunjungan']; ?></td>
	                <td><?php echo $data['alamat_pengunjung']; ?></td>
	                <td><?php echo $data['no_hp']; ?></td>
					<td><?php echo $data['kunjungan_museum']; ?></td>
				</tr>
				<?php } ?>
         </tr>  
         </table>
     </body> 
 </html>
</body>
</html>