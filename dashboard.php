<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIc6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100 ">
            <?php include './component/header.php' ?>
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar border border-2" id="sidebar-wrapper">
                        <div class="list-group list-group-flush" >
                            <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
                            <a href="#" class="list-group-item list-group-item-action">Students</a>
                            <a href="#" class="list-group-item list-group-item-action">Settings</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="container-fluid mt-4">
                        <h2 class="text-center">Dashboard</h2>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <div class="card-body border border-3 border-rounded border-success">
                                        <h5 class="card-title">Total Students</h5>
                                        <h1 class="fw-bold text-success">100</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <div class="card-body border border-3 border-rounded border-primary">
                                        <h5 class="card-title">Students are in List</h5>
                                        <h1 class="fw-bold text-primary">50</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <div class="card-body border border-3 border-rounded border-danger">
                                        <h5 class="card-title">Priority 1 Students</h5>
                                        <h1 class="fw-bold text-danger">10</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card shadow">
                                    <div class="card-body border border-3 border-rounded border-warning">
                                        <h5 class="card-title">Priority 2 Students</h5>
                                        <h1 class="fw-bold text-warning">20</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './component/footer.php' ?>
        </div>
    </div>

    <!-- Link to Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
