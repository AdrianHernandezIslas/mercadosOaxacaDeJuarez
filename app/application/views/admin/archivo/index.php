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
        <div class="card p-4 shadow m-4">
            <div class="card-body">
                <div class="container mt-4">

                    <div class="d-flex justify-content-between align-items-center ">
                        <h3 class="card-title mb-2">Archivos</h3>
                        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#formLocalModal">
                            <i class="bi bi-plus-lg"></i> Nuevo
                        </button>
                    </div>

                    <hr class="">

                    <table id="example" class="table table-borderless">
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    <?php include(APPPATH . 'views/admin/archivo/FormArchivoView.php'); ?>

    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/feature/file/file-table.sandbox.js"></script>
</body>

</html>