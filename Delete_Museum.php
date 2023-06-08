<?php
// include database connection file
include_once("Koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id_museum'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM museum WHERE id_museum=$id_museum");
 
// After delete redirect to Home, so that latest user list will be displayed.

header("location:View_Museum.php");
?>
