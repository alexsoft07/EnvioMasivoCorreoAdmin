<?php 
    @session_start();
    if(!isset($_SESSION["usu_id"])){
        header("location: " . Conectar::ruta() . "../../index.php");
    }
?>

<!doctype html>
<html lang="es">
    <head>
        <?php include_once "../../includes/templates/header.php"; ?>
        <title>Inicio</title>
    </head>

    <body>
        <!-- Start Sidemenu Area -->
        <?php include_once "../../includes/menu_area.php"; ?>
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            <?php include_once "../../includes/navbar.php"; ?>
            <!-- End Top Navbar Area -->
            
            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Dashboard</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Dashboard</li>

                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <div class="flex-grow-1"></div>

            <!-- Start Footer End -->
            <?php include_once "../../includes/templates/footer.php"; ?>
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->
        
        <?php include_once "../../includes/scripts.php"; ?>
        <script src="home.js"></script>
    </body>
</html>