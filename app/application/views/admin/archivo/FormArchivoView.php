<form id="archivoForm" class="needs-validation" novalidate>
    <div class="modal fade" id="formLocalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLocalModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <label for="archivo">Archivo:</label>
                            <input type="file" class="form-control" aria-label="file image" name="archivo" id="archivo" accept="image/jpg, image/jpeg" required>
                            <div class="invalid-feedback">El archivo es requerido</div>
                        </div>
                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <label for="tipo">Tipo:</label>
                            <select id="tipo" name="tipo" class="form-select" required>
                                <option selected disabled value="">Seleccione ...</option>
                                <option value="1">General</option>
                                <option value="2">Principal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="saveBtn" type="submit" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Subir</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                </div>
            </div>
        </div>

    </div>
</form>