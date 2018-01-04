<?php
include 'conn.php';
$id=$_GET['id'];
$sql='delete from mes where id='.$id;
mysqli_query($db,$sql);
header('location:list.php');
?>
