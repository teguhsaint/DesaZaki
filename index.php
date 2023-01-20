<?php
$p = 'dashboard';
if (!empty($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/boots_bina.css">
    <link rel="stylesheet" href="assets/FA5PRO/css/all.min.css">
    <link rel="stylesheet" href="assets/css/side_bar.css">
    <title>Bina Admin - Template</title>
    <style>

    </style>
</head>

<body class="bg-light">

    <main class="d-flex">
        <div class="sidebar aktif d-flex flex-column flex-shrink-0 p-3 bg-dark text-white">
            <div class="row">
                <div class="col-9">
                    <div class="w-100">
                        <span class="fs-4">Bina Admin</span>
                        <small class="sub_sidebar">Profesional Admin Template</small>
                    </div>
                </div>
                <div class="col-3">
                    <button onclick="aktif_menu()" class="d-md-none float-end btn btn-dark fs-5 btn_darkside h-100 "><i id="icons" class="fas fa-times"></i></button>
                </div>
            </div>


            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

                <li>
                    <a href="index.php?p=dashboard" <?php if ($p == 'dashboard') echo "class=\"nav-link mb-2 active\"" ?> class="nav-link mb-2">
                        <i class="fad fa-tachometer-alt me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="my-3">
                    <span class="ms-3 text-muted">Penduduk</span>
                </li>
                <li>
                    <a href="index.php?p=add_penduduk" <?php if ($p == 'add_penduduk') echo "class=\"nav-link mb-2 active\"" ?> class="nav-link mb-2">
                        <i class="fad fa-user-plus me-2"></i>
                        Tambah Penduduk
                    </a>
                </li>
                <li>
                    <a href="index.php?p=view_penduduk" <?php if ($p == 'view_penduduk') echo "class=\"nav-link mb-2 active\"" ?> class="nav-link mb-2">
                        <i class="fad fa-users me-2"></i>
                        Penduduk
                    </a>
                </li>
                <li class="my-3">
                    <span class="ms-3 text-muted">Perangkat</span>
                </li>
                <li>
                    <a href="index.php?p=add_perangkat" class="nav-link mb-2">
                        <i class="fad fa-user-plus me-2"></i>
                        Tambah Perangkat
                    </a>
                </li>
                <li>
                    <a href="index.php?p=view_perangkat" class="nav-link mb-2">
                        <i class="fad fa-table me-2"></i>
                        Perangkat
                    </a>
                </li>
            </ul>

        </div>

        <div class="konten w-100 m-0 p-0 bg-light">

            <nav class="navbar w-100 navbar-light bg-white ">
                <div class="container">
                    <button class="btn btn-light bg-white border-0" onclick="aktif_menu()" type="button">
                        <i id="icons" class="fad fa-align-left fs-5"></i>
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-light bg-transparent border-0 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Admins
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container px-4 bg-light">
                <?php
                $pages_dir  =  'pages';
                if (!empty($_GET['p'])) {
                    $pages  =  scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p  =  $_GET['p'];
                    if (in_array($p . '.php', $pages)) {
                        include($pages_dir . '/' . $p . '.php');
                    } else {
                        include $pages_dir . '/ops.php';
                    }
                } else {
                    include($pages_dir . '/dashboard.php');
                } ?>
            </div>
        </div>
    </main>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        function aktif_menu() {
            $('.sidebar').toggleClass('aktif');

        }
    </script>

</body>

</html>