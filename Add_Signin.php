<html>
    <head>
    <h1>Form Sign In</h1>
    </head>

    <body>
        <form action="" method="post" name="form1">
            <table width="25%" border="0">
                 <tr>
                      <td>no_hp</td>
                      <td><input type="text" name="no_hp"></td>
                 </tr>
                 <tr>
                      <td>gmail</td>
                      <td><input type="text" name="gmail"></td>
                 </tr>
                 <tr>
                     <td>password</td>
                     <td><input type="text" name="password"></td>
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
        $no_hp= $_POST['no_hp'];
        $gmail= $_POST['gmail'];
        $password= $_POST['password'];
        echo "data telah tersimpan";
        // include database connection file
        include ("Koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, 
        "INSERT INTO signin(no_hp,gmail,password) 
        VALUES(' $no_hp',' $gmail','$password')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Sign In</a>";
        header("location:View_Signin.php");
    }
    ?>
        </table>
        </form>
    </body>
</html>

      

            