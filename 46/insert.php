<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
mysqli_query($connect, "INSERT INTO shops (name, price, img) VALUES ('". $_POST['name'] ."', '" . $_POST['price'] ."', 'images/" . $_FILES['img']['name'] . "')");

move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
header('Location: http://kirillbur/46/index.php');

?>