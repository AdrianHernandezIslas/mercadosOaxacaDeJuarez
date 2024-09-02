<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos a detalle</title>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>

<body>

 <!-- Navigation -->
 <?php include(APPPATH . 'views/templates/dashboard/MainNavigationTemplate.php'); ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
<div class="container mt-4">
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-10">
                    <div class="mb-3">
                        <input type="file" class="form-control" aria-label="file example" name="archivo" id="archivo" required>
                        <div class="invalid-feedback">El archivo es requerido</div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Subir</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- Gallery -->
        <div class="container">

            <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Imagenes</h1>

            <hr class="mt-2 mb-5">

            <table id="example" class="table table-borderless">
                <tbody>
                </tbody>
            </table>

        </div>
        <!-- Gallery -->
    </div>
</div>




    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/feature/file/file-table.sandbox.js"></script>
</body>

</html>