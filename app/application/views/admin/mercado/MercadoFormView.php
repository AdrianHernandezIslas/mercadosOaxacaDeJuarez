<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>
    <title>Mercado</title>
</head>

<body>
    <?php include(APPPATH . 'views/templates/global/MainNavigationTemplate.php'); ?>
    <main style="margin-top: 58px;">
        <div class="container pt-4 d-flex justify-content-center">
            <div class="card text-center">
                <div class="card-header">Mercado</div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/Mercado/insertMercado" onSubmit="return Main.ejecutar();">
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" maxlength="45" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" maxlength="50"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-5">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="9511002240" maxlength="10" pattern="[0-9]*" onkeypress="return Validar.tipoNumero(event);" required>
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <label for="inputState">Zona</label>
                                <select id="zona" name="zona" class="form-control">
                                    <option selected>Selecciona Zona...</option>
                                    <option value="C">Centro</option>
                                    <option value="S">Sur</option>
                                    <option value="CH">Centro Historico</option>
                                    <option value="N">Norte</option>
                                    <option value="P">Poniente</option>
                                    <option value="O">Oriente</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" maxlength="105" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-8">
                                <div class="form-group">
                                    <label>Historia</label>
                                    <textarea class="form-control" id="historia" name="historia" rows="10" maxlength="1060"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label>latitud</label>
                                    <input type="text" class="form-control" id="latitud" name="latitud" placeholder="12.3444" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Longitud</label>
                                    <input type="text" class="form-control" id="longitud" name="longitud" placeholder="2332.12" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required></input>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Hora Apertura</label>
                                    <input type="time" class="form-control" id="horaA" name="horaA" placeholder="Horario" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Hora Cierre</label>
                                    <input type="time" class="form-control" id="horaC" name="horaC" placeholder="10:10" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto" required>
                                        <label class="custom-file-label" for="inputGroupFile04">Elija el Archivo</label>
                                    </div>
                                    <div class="input-group-append">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
</body>

</html>