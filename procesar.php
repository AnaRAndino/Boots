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

		echo "<h2> Hola ". $nombre . "</h2><br/>";
		echo $apellido."</br>";
	 ?>
  <input  type="text" placeholder= "Encuentrelo" class="form-control" name="txt-nombre" id="txt-nombre" value="<?php $nombre ?>">


 
</body>
</html>

