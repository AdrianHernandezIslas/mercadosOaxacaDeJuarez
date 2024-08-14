<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>

    <!-- CSS de DataTables con Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <!-- CSS adicional -->
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Mercado</title>
</head>

<body>
    <!-- Navigation -->
    <?php include(APPPATH . 'views/templates/dashboard/MainNavigationTemplate.php'); ?>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div class="card p-4 shadow">
            <div class="card-body">
                <h3 class="card-title mb-2">Mercado</h3>
                <table id="example" class="table table-hover" style="width:100%">
                    <thead>
                        <tr class="active">
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Zona</th>
                            <th>Horario</th>
                            <th>Telefono</th>
                            <th>Coordenadas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <script src="/assets/js/dashboard/main.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- Archivo de traducción en español para DataTables -->
    <script src="/assets/js/mercado/load-file.js"></script>
</body>

</html>