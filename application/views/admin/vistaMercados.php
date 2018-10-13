<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<title>Mercados</title>
</head>
<body>
	<br><br><br>
<div class= "row mx-auto  style-centrado">
<div class="col-3"></div>
	<div class="col-9">
		<h1>Zona Centro Histórico</h1>
  		<div class="card-columns">
			<?php foreach ($CH as $key) { ?>
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?php echo base_url().$key['imagen'];?>" alt="Card image cap">
				  <div class="card-body">
				    <p class="card-text"><?php echo $key['nombre'];  ?></p>
				    <a href="<?php echo base_url().'Mercado/updateMercado/'.$key['idMercado'];?>" class="btn btn-success">Editar</a>
				    <a href="#" class="btn btn-warning">Eliminar</a>
				  </div>
				</div>
  			<?php } ?>
  		</div>
  	</div>
</div>
<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>