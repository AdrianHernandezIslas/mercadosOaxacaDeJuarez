<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>

    <!-- CSS de DataTables con Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <!-- CSS adicional -->
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Archivos a detalle</title>

</head>

<body>

    <!-- Navigation -->
    <?php include(APPPATH . 'views/templates/dashboard/MainNavigationTemplate.php'); ?>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <?php include(APPPATH . 'views/admin/archivo/ArchivoTableView.php'); ?>
    </div>


    <?php include(APPPATH . 'views/admin/archivo/FormArchivoView.php'); ?>

    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/js/shared/util/url.util.js"></script>
    <script src="/assets/js/feature/file/file.consts.js"></script>
    <script src="/assets/js/feature/file/file.service.js"></script>
    <script src="/assets/js/feature/file/file-form.sandbox.js"></script>
    <script src="/assets/js/feature/file/file-table.sandbox.js"></script>
</body>

</html>