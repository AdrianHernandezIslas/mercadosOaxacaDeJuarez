<div class="modal fade" id="formLocalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="mercadoFormModalLabel" aria-hidden="true">
    <form class="needs-validation" novalidate>
        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">
                <div class="modal-body p-5">

                    <div class="row">
                        <div class="col-12">

                            <input type="file" class="form-control" aria-label="file example" name="archivo" id="archivo" required>
                            <div class="invalid-feedback">El archivo es requerido</div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="saveBtn" type="submit" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Subir</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                </div>
            </div>

        </div>
    </form>
</div>