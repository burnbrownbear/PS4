<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
	mysqli_query($connect, "DELETE FROM shops WHERE id = '". $_POST['id'] ."'");
	header('Location: http://kirillbur/46/index.php');
?>