<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/templates/global/HeadTemplate.php'); ?>

    <!-- CSS de DataTables con Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <!-- CSS adicional -->
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <title>Local</title>
</head>

<body>
    <!-- Navigation -->
    <?php include(APPPATH . 'views/templates/dashboard/MainNavigationTemplate.php'); ?>

     <!-- Main Content -->
     <div class="main-content" id="mainContent">
        <?php include(APPPATH . 'views/admin/local/LocalTableView.php'); ?>
    </div>
 
    <?php include(APPPATH . 'views/admin/local/LocalFormView.php'); ?>
    <?php include(APPPATH . 'views/shared/AlertModal.php'); ?>
    <?php include(APPPATH . 'views/templates/global/ScriptTemplate.php'); ?>
    <script src="/assets/js/dashboard/main.js"></script>

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- JS de DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="/assets/js/shared/constant/http.constants.js"></script>
    <script src="/assets/js/shared/util/form.util.js"></script>
    <script src="/assets/js/feature/local/local.consts.js"></script>
    <script src="/assets/js/feature/local/local.service.js"></script>
    <script src="/assets/js/feature/local/local-form.sandbox.js"></script>
    <script src="/assets/js/feature/local/local-table.sandbox.js"></script>
    <script src="/assets/js/feature/giro/giro.consts.js"></script>
    <script src="/assets/js/feature/mercado/mercado.consts.js"></script>

    <?php  ?>
   
   

</body>

</html>