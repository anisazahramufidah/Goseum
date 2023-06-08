<html>
    <head>
    <h1>Form Data Pengunjung</h1>
    </head>

    <body>
        <h3>Museum</h3>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">
                 <tr>
                      <td>nama_pengunjung</td>
                      <td><input type="text" name="nama_pengunjung"></td>
                 </tr>
                 <tr>
                      <td>tanggal_kunjungan</td>
                      <td><input type="text" name="tanggal_kunjungan"></td>
                 </tr>
                 <tr>
                     <td>alamat_pengunjung</td>
                     <td><input type="text" name="alamat_pengunjung"></td>
                 </tr>
                 <tr>
                     <td>no_hp</td>
                     <td><input type="text" name="no_hp"></td>
                 </tr>
                 <tr>
                     <td>kunjungan_museum</td>
                     <td><input type="text" name="kunjungan_museum"></td>
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
        $nama_pengunjungs= $_POST['nama_pengunjung'];
        $tanggal_kunjungans= $_POST['tanggal_kunjungan'];
        $alamat_pengunjungs= $_POST['alamat_pengunjung'];
        $no_hps= $_POST['no_hp'];
        $kunjungan_museums= $_POST['kunjungan_museum'];

        echo "data baru telah tersimpan";
        // include database connection file
        include ("Koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO pengunjung(nama_pengunjung,tanggal_kunjungan,alamat_pengunjung,no_hp) 
        VALUES('$nama_pengunjungs','$tanggal_kunjungans','$alamat_pengunjungs','$no_hps','$kunjungan_museums')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Pengunjung</a>";
        header("location:View_Pengunjung.php");
    }
    ?>
        </table>
        </form>
    </body>
</html>

      

            