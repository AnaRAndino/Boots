<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>

</head>
<body>
	<?php 
		$nombre = $_GET['txt-nombre'];
		$apellido = $_GET['txt-apellido'];
		$direccion = $_GET['txta-direccion'];

		echo "<h1> Welcome ". $nombre . "</h1><br/>";
		echo $apellido."</br>";
	 ?>
  <input  type="text" style="width: 700px" placeholder= "Encuentrelo" class="form-control" name="txt-nombre" id="txt-nombre" value="<?php $nombre[0] ?>">
  <label >Esta es tu direccion: + <?php $nombre ?></label>

 
</body>
</html>

