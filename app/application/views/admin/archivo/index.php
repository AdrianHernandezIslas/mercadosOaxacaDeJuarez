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
    <script>
        (() => {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    event.preventDefault()
                    if (!form.checkValidity()) {

                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })();
        const render = function(data) {
                        return data ? `<a href="#" class="d-block mb-1 h-100">
                                <img class="img-fluid img-thumbnail" src="https://api-files-cn1f.onrender.com/api/v1/file/${data.ruta}?width=400&height=300" alt="">
                            </a>` : '';
                    };
        $("#example").DataTable({
            ajax: {
                url: "/api/v1/archivo/by/locacion/1",
                dataSrc: function (json) {
                    let result = [];
                    for (let i = 0; i < json.length; i += 3) {
                        result.push(json.slice(i, i + 3));
                    }
                    return result;
                }
            },
            columns: [
                {
                    data: 0,
                    render
                },
                {
                    data: 1,
                    render
                },
                {
                    data: 2,
                    render
                }
            ],
            dom: 't<"bottom"ip><"clear">',
            paging: true,
            searching: false,
            info: false,
            pageLength: 2
        });
    </script>
</body>

</html>