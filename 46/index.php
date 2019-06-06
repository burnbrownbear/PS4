<!DOCTYPE html>
<html>
<head>
	<title>
		admins
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class=" font-weight-bold col-12 bg-warning pl-5 pt-2 border-bottom" style="height: 50px">
		Главная


	</div>

	<div class="container ">
		<form class="pt-1 pb-2" method="POST" action="insert.php" enctype="multipart/form-data">
						<input class=" border border-warning border-bottom" type="" name="name" placeholder="Название игры">
						<input class=" border border-warning border-bottom" type="" name="price" placeholder="Цена">
						<input type="file" name="img" placeholder="ссылка на картинку">
						<button class="font-italic bg-white border border border-warning">add</button>
		</form>

	<div class="row">

	<?php $connect = mysqli_connect('127.0.0.1','root','', 'kirill_ch_17');
	$query = mysqli_query($connect, 'SELECT * FROM shops'); 
	for($i=0; $i < $query->num_rows; $i++) {
	$brot = $query->fetch_assoc(); 
		?>

		 <div class="col">
			<a href="#"><?php echo '<img style = "width:200px; height:300px" src ="' . $brot['img'] . '">'; ?></a>
			<h2 class="font-italic"> <?php echo $brot['name']; ?></h2>
			<p class="font-italic"><?php echo $brot['price'] .' ' . '$'; ?></p>
			<form method="POST" action="delete.php">
				<?php echo '<input name="id" type="hidden" value="' . $brot['id'] . '">';?>
				<button class="font-italic bg-white border border border-dark ">delete</button>
			</form>
			<form method="POST" action="update1.php">
				<?php echo '<input 	type="hidden" name="name" value="' . $brot['name'] . '">';
						?>
				<?php echo '<input 	type="hidden" name="price" value="' . $brot['price'] . '">';
						?>
				<?php echo '<input 	type="hidden" name="img" value="' . $brot['img'] . '">';
						?>		
				<?php echo '<input 	type="hidden" name="id" value="' . $brot['id'] . '">';
						?>
			
				<button class="font-italic bg-white border border border-dark"> Редактировать </button>


			</form>
		</div>
	
	<?php } ?>
</div>
</div>
</body>
</html>