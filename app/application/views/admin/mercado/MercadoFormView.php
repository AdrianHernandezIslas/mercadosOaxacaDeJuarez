<div class="modal fade" id="mercadoFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mercadoFormModalLabel" aria-hidden="true">
    <form id="formMercado">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <div class="row mb-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre" maxlength="45" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" maxlength="105" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Historia</label>
                                <textarea class="form-control" id="historia" name="historia" rows="3" maxlength="1060"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" maxlength="50"></input>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Numero</label>
                                <input type="text" class="form-control" id="numero" name="numero" maxlength="50"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" maxlength="50"></input>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>C.P.</label>
                                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" maxlength="5"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" maxlength="50"></input>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" maxlength="50"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="9511002240" maxlength="10" pattern="[0-9]*" onkeypress="return Validar.tipoNumero(event);" required>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                            <label for="inputState">Zona</label>
                            <select id="zona" name="zona" class="form-select">
                                <option selected disabled>Selecciona Zona...</option>
                                <option value="C">Centro</option>
                                <option value="S">Sur</option>
                                <option value="CH">Centro Historico</option>
                                <option value="N">Norte</option>
                                <option value="P">Poniente</option>
                                <option value="O">Oriente</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>latitud</label>
                                <input type="text" class="form-control" id="latitud" name="latitud" placeholder="12.3444" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Longitud</label>
                                <input type="text" class="form-control" id="longitud" name="longitud" placeholder="2332.12" minlength="3" maxlength="10" onkeypress="return Validar.filterFloat(event,this);" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Hora Apertura</label>
                                <input type="time" class="form-control" id="hora_apertura" name="hora_apertura" placeholder="Horario" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Hora Cierre</label>
                                <input type="time" class="form-control" id="hora_cierre" name="hora_cierre" placeholder="10:10" required>
                            </div>
                        </div>
                    </div>
                    <input name="id_locacion" id="id_locacion" type="text" hidden><input id="id_direccion" name="id_direccion" type="text" hidden>
                </div>
                <div class="modal-footer">
                    <button id="saveBtn" type="submit" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                </div>
            </div>

        </div>
    </form>
</div>
<script src="/assets/js/feature/file/file-form.sandbox.js"></script>