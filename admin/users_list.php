<?php 

include './common/sessionhandling.php';
include './functions.php';

$obj = new Administration();
$resUserList = $obj->getUserList();

?>

<html>
    <head>
        <title>Admin - Users List</title>
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
                <h3>Admin - Users List</h3>
                <div>
                    <a 
                    class="btn btn-primary"
                    href="./register_user.php">Register User
                    </a>
                </div>
            </div>

            <div class='row'>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Email address</th>
                        <th scope="col">Date registered</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php while ($row=$resUserList->fetch_array()){ ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['email_address']; ?></td>
                        <td><?php echo $row['date_registered']; ?></td>
                    </tr>
                <?php } ?>
                    
                </tbody> 
            </table>
            </div>
            <!-- end - body -->
        </div>

        <script type="text/javascript" src="../assets/dist/js/jquery.min.js"></script>
    
    </body>
</html>