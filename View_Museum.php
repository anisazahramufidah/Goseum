<html>
	<head>
	<h1>Menampilkan Tabel Museum</h1>
	</head>
	
	<body>
	    <h3>Daftar Museum</h3>
	    <table border="1" class="museum" >
		<a href="Add_Museum.php"tambah data</a>
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
					
			<table border="1">
            <tr>  		
	            <!--<th>Id Museum</th> -->
	            <th>Nama Museum</th>
	            <th>Deskripsi Museum</th>
	            <th>Lokasi Museum</th>
	            <th>Harga Tiket</th>
				<th>Aksi</th>
	        </tr>
	        <?php
			 include "Koneksi.php";
			 $query_mysql = mysqli_query($host, "SELECT * FROM museum")or die(mysqli_error());
			 while($data = mysqli_fetch_array($query_mysql)){
		 ?>
			 <tr>
					 <td><?php echo $data['nama_museum']; ?></td>
					 <td><?php echo $data['deskripsi_museum']; ?></td>
					 <td><?php echo $data['lokasi_museum']; ?></td>
					 <td><?php echo $data['harga_tiket']; ?></td>
					 <td>
						<a href="Update_Museum.php?update=<?php echo $data['id_museum'];?>">Update</a> |
					 	<a href="Delete_Museum.php?delete=<?php echo $data['id_museum'];?>">Delete</a>
			 		</td>
			 </tr> 
			<?php } ?>
			</tr>  
         </table>
     </body> 
 </html>
</body>
</html>