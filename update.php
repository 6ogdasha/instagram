<?php 

$connect = mysqli_connect("127.0.0.1","root","","instagram");
$zapros1 = "UPDATE posts 
SET text = '{$_GET['text']}' WHERE id = '{$_GET['id']}'";
$zapros2 = "UPDATE posts 
SET img = '{$_GET['img']}' WHERE id = '{$_GET['id']}'";
if($_GET['text']!= ''){
	$query = mysqli_query($connect,$zapros1);
} else if ($_GET['img']!= ''){
	$query = mysqli_query($connect,$zapros2);
}

header("Location: index.php");
 ?>