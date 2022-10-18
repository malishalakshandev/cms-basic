<?php 

include './common/sessionhandling.php';

include './functions.php';

$obj = new UserManage();
$resPagesList = $obj->getPages();


?>

<html>
    <head>
        <title>Admin - Home</title>
        <link rel="stylesheet" type="text/css" href="./assets/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./assets/dist/js/bootstrap.bundle.min.js"/>
        
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
                <h3>Home</h3>
            </div>

            <div class='row'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Page Title</th>
                        <th scope="col">Page Path</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php while ($row=$resPagesList->fetch_array()){ ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['page_title']; ?></td>
                        <td><a href=<?php echo './admin/'.$row['page_path']; ?> target="_blank"><?php echo $row['page_path']; ?></a></td>
                        <td>
                            <?php if($row['page_status']=='1') {
                                echo 'Published';
                            }else{
                                echo 'Not Published';
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                    
                </tbody> 
            </table>
            </div>
            <!-- end - body -->
        </div>

        <script type="text/javascript" src="./assets/dist/js/jquery.min.js"></script>
    
    </body>
</html>

<script>
    $(document).ready( function(){
        
    });
</script>