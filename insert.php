<?php 

$connect = mysqli_connect("127.0.0.1","root","","instagram");
$text_zaprosa_vstavit = "INSERT INTO posts(user, text, img)
		VALUES ('{$_GET['user']}', '{$_GET['text']}', '{$_GET['img']}')";

		$zapros_vvoda = mysqli_query($connect,$text_zaprosa_vstavit);
                                            
                                            
        header("Location: index.php");

 ?>