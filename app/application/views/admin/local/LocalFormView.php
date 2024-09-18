<div class="modal fade" id="localFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="localFormModalLabel" aria-hidden="true">
    <form id="formLocal"> 
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
                                <label>Clave</label>
                                <input type="text" class="form-control" id="clave" name="clave" placeholder="Generado automáticamente" maxlength="60" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Eslogan</label>
                                <input type="text" class="form-control" id="eslogan" name="eslogan" placeholder="Eslogan" maxlength="60" required>
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
                        <div class="col-12">
                            <div class="form-group">
                                <label>Giro</label>
                                <select class="form-select" id="giroSelect"  name="giro" aria-label="Default select example">
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" maxlength="50"></input>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Mercado</label>
                                <select class="form-select" id="mercadoSelect"  name="mercado" aria-label="Default select example">
                                </select>
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