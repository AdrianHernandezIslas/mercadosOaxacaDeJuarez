<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	  
	<title>Nuevo Local</title>
</head>
<body>
		<br>
		
		<hr>
<div class="container">
	<form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Local/registrar">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-6 col-md-7 col-sm-12">
             <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" required>
             </div>
        </div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-md-3 col-sm-12">
            <label>Giro</label>
                <div class="input-group">
                     <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Tipo: </label>
                     </div>
                        <select class="custom-select" id="giro" name="giro">
	                          <option value="0" selected>Seleccione...</option>
	                          <?php 
	                          		foreach($giros as $key){
	                          			echo "<option value='".$key['idGiro']."'>".$key['nombreGiro']."</option>
	                                ";
	                          		}
	                           ?>
                        </select>
                </div>  
        </div> 
        <div class="col-md-3 col-sm-12">
            <label>Mercado</label>
                <div class="input-group">
                     <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Seleccione: </label>
                     </div>
                        <select class="custom-select" id="idMercado" name="idMercado">
		                     <?php
	                            foreach($mercados as $key){
	                                echo "<option value='".$key['idMercado']."'>".$key['nombre']."</option>
	                                ";
	                            }
	                         ?>
                        </select>
                </div>  
        </div> 
	</div>
	<br>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-6 col-md-7 col-sm-12">
			 <div class="form-group">
                  <label>Eslogan</label>
                  <input type="text" class="form-control" id="eslogan" name="eslogan" placeholder="Escribe nombre" required>
             </div>
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-6 col-md-7 col-sm-12">
			<div class="form-group">
  				<label for="comment">Historia o Descripción:</label>
  				<textarea class="form-control" rows="5" id="hitoria" name="historia" required="Es requerido"></textarea>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-6 col-md-7 col-sm-12">
             <div class="form-group">
                  <label>Palabras Clave (Nieve, Helado, Freza)</label>
                  <input type="text" class="form-control" id="tags" name="tags" placeholder="Escribe nombre" required>
             </div>
        </div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-6 col-md-7 col-sm-12">
			<label>Subir Logotipo o Fotografia</label>
        	<input class="btn btn-warning" type="file" name="userfile" size="25">
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
            <div class="col-lg-6 col-md-7 col-sm-12">
            	<label><br></label>
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </div>
	</div>
</form>
</div>

	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>	
</body>
</html>