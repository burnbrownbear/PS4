<?php $connect = mysqli_connect('127.0.0.1','root','', 'kirill_ch_17');
if ($_FILES['img']['name']) {
	$query = mysqli_query($connect, "UPDATE shops SET name ='" . $_POST['name'] . "', price ='" . $_POST['price'] . "', img ='images/" . $_FILES['img']['name'] . "' WHERE id = '". $_POST['id'] ."'  ");
	
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
	header('Location: http://kirillbur/46/index.php');
}
else {
	$query = mysqli_query($connect, "UPDATE shops SET name ='" . $_POST['name'] . "', price ='" . $_POST['price'] . "' WHERE id = '". $_POST['id'] ."'  ");
	header('Location: http://kirillbur/46/index.php');
}

?>