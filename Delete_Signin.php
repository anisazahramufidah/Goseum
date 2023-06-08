<?php
include 'View_Signin.php';

// Get data to delete
$no_hp = $_GET['No Hp'];
$gmail = $_GET['Gmail'];
$signin = $_GET['Sign In'];

// Perform delete operation
$sql = "DELETE FROM signin WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($host);
}

mysqli_close($conn);
?>
