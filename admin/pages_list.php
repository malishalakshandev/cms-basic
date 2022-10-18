<?php 

include './common/sessionhandling.php';

?>

<html>
    <head>
        <title>Admin - Pages List</title>
        <link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/dist/js/bootstrap.bundle.min.js"/>
        
    </head>
    <body>
                    
        <div class='container-fluid'>
            <!-- header nav bar -->
            <div class='row'>
                <?php include './common/top_navbar.php'; ?>
            </div>
            <!-- end - header nav bar -->

            <!-- body -->
            <div class='row'>
                <h3>Admin - Pages List</h3>
                <div>
                    <a 
                    class="btn btn-primary"
                    href="./add_page.php">Add Page
                    </a>
                </div>
            </div>
            <!-- end - body -->
        </div>

        <script type="text/javascript" src="../assets/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/admin.js"></script>
    
    </body>
</html>