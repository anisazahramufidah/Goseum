<html>
    <head>
    <h1>Halaman Admin Data Museum</h1>
    </head>

    <body>

        <form action="" method="post" name="form1">
            <table width="25%" border="0">
                 <tr>
                      <td>nama_museum</td>
                      <td><input type="text" name="Nama Museum"></td>
                 </tr>
                 <tr>
                      <td>deskripsi_museum</td>
                      <td><input type="text" name="Deskripsi Museum"></td>
                 </tr>
                 <tr>
                     <td>lokasi_museum</td>
                     <td><input type="text" name="Lokasi Museum"></td>
                 </tr>
                 <tr>
                     <td>harga_tiket</td>
                     <td><input type="text" name="Harga Tiket"></td>
                     </tr>
                     <tr>
                     <td></td>
                     <td><input type="submit" value="kirim" name="submit"></td>
                 </tr>
            </table>
        </form>
         <!-- <a type="submit" name="submit" class="btn btn-primary">Kirim</a><br/><br/></button> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </script>
<td></td>
                  
                
 
        <?php
         // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $nama_museums= $_POST['Nama Museum'];
        $deskripsi_museums= $_POST['Deskripsi Museum'];
        $lokasi_museums= $_POST['Lokasi Museum'];
        $harga_tikets= $_POST['Harga Tiket'];
        echo "data baru telah tersimpan";
        // include database connection file
        include ("Koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO museum(Id Museum,Nama Museum,Deskripsi Museum,Lokasi Museum,Harga Tiket) 
        VALUES('$id_museums','$nama_museums','$deskripsi_museums','$lokasi_museums','$harga_tikets')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Museum</a>";
        header("location:View_Museum.php");
    }
    ?>
        </table>
        </form>
    </body>
</html>

      

            
      
