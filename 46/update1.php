<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div>
<form method="POST" action="update2.php" enctype="multipart/form-data">
<?php echo '<input name="name" value="' . $_POST['name'] . '">';
						?>
<?php echo '<input name="price" value="' . $_POST['price'] . '">';
						?>				
<?php echo '<input type="file" name="img" value="">';
						?>
<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">';
						?>


<button> Ok </button>
	 

</form>
									
	</div>
</body>
</html>
