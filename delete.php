
<?php



include 'conn.php';

$id= $_GET['sno'];
$q="delete from `images` where sno = $id";

mysqli_query($conn,$q);

header('location:deleteimage.php');


?>