<?php 
    require_once 'inc/functions.php';
    $info = '';
    $task = $_GET['task'] ?? 'report';
    if('seed' == $_GET['task']){
        seed();
        $info = "Seeding is done";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        #main-content {
            min-height: 80vh;
        }
        footer p{
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Start Header Section -->
    <header>
        <div class="container-fluid text-center bg-secondary text-white p-2">
            <div class="row">
                <h2>CRUD Project</h2>
                <h4>This project has been developed by Raw PHP</h4>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
    
    <!-- Start Main-Content Section -->
    <section id="main-content" class="container">
        <section id="nav">
            <?php include_once ('inc/templates/nav.php') ?>
            <hr>
            <?php 
                if($info != ''){
                    echo "<p><?php echo $info; ?></p>";
                }
            ?>
        </section>
        <?php if('report' == $task):?>
        <section id="report">
            <?php generateReport(); ?>
        </section>
        <?php endif; ?>
    </section>

    
    <!-- End Main-Content Section -->


    <!-- Start Footer Section -->
    <footer>
        <div class="container-fluid text-center bg-secondary text-white p-1">
            <div class="row">
                <p class="mt-2">Copyright &copy; ALl Rights Reserved Nayem Hossain Ishan.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>