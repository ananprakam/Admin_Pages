<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title>
        <style>
            /* Add your custom styles here */
        </style>
    </head>

    <body>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CW Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables_users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables - Users</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tables_vocabulary.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables - Vocabulary</span></a>
            </li>

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-sign-out-alt "></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Profile Page Content -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Profile Sidebar -->
                        <div class="card">
                            <img src="profile-image.jpg" alt="Profile Image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">Email: johndoe@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- Profile Details -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Profile Details</h5>
                                <!-- Add more profile information here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional code and scripts here -->
    </body>

    </html>

</body>

</html>