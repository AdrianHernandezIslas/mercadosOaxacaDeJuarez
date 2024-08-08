<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/css/prueba.css">
	<title>Nuevo Local</title>
</head>
<body>
		<br>
		

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-white">Administrador SU</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Mercados Oaxaca</p>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mercado</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>

                            <a href="<?php echo '/'.'Mercado/nuevo'; ?>">Registrar</a>
                        </li>
                        <li>
                            <a href="<?php echo '/'.'Mercado/admin'; ?>">Listar</a>
                        </li>
                        <li>
                            <a href="#">Otro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Local</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="<?php echo '/'.'Local/nuevo'; ?>">Registrar</a>
                        </li>
                        <li>
                            <a href="#">Listar</a>
                        </li>
                        <li>
                            <a href="#">Otro</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Imagenes</a>
                </li>
                <li>
                    <a href="#">Usuarios</a>
                </li>
                <li>
                    <a href="#">Extras</a>
                </li>
            </ul>

            
        </nav>
</div>
<div class="content">
	<div class="container">
	<form method="POST" enctype="multipart/form-data" action="/Local/registrar">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-8 col-md-9 col-sm-12">
             <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" maxlength="87" required>
             </div>
        </div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-md-4 col-sm-12">
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
        <div class="col-md-4 col-sm-12">
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
		<div class="col-lg-8 col-md-9 col-sm-12">
			 <div class="form-group">
                  <label>Eslogan</label>
                  <input type="text" class="form-control" id="eslogan" name="eslogan" placeholder="Escribe nombre" maxlength="88" required>
             </div>
		</div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-8 col-md-9 col-sm-12">
			<div class="form-group">
  				<label for="comment">Historia o Descripción:</label>
  				<textarea class="form-control" rows="5" id="hitoria" name="historia" maxlength="430" required="Es requerido"></textarea>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-8 col-md-9 col-sm-12">
             <div class="form-group">
                  <label>Palabras Clave (Nieve, Helado, Freza)</label>
                  <input type="text" class="form-control" id="tags" name="tags" placeholder="Escribe nombre" maxlength="85" required>
             </div>
        </div>
	</div>
	<div class="row">
		<div class="col-4"></div>
		<div class="col-lg-8 col-md-9 col-sm-12">
			<label>Subir Logotipo o Fotografia</label>
        	<input class="btn btn-warning" type="file" name="userfile" size="25" required>
		</div>
	</div>
	<div class="row">
		<div class="col-4"></div>
            <div class="col-lg-6 col-md-7 col-sm-12">
            	<label><br></label>
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </div>
	</div>
</form>
</div>
</div>


	<script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>	
</body>
</html>