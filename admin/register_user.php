<?php 

include './common/sessionhandling.php';

?>
<html>
    <head>
        <title>Admin - Register User</title>
        <link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/dist/js/bootstrap.bundle.min.js"/>
        <link rel="stylesheet" type="text/css" href="../assets/plugins/summernote/dist/summernote-lite.css"/>
        
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
                <h3>Admin - Register User</h3>
            </div>

            
            <div class="card">
                <div class="card-body">

                    <form action="" id="register-user-form">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="firstname"
                                name="firstname" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="lastname"
                                name="lastname" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label><br>
                            <input 
                                type="email" 
                                class="form-control" 
                                id="email"
                                name="email" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Username</label><br>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="username"
                                name="username" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label><br>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="password"
                                name="password" 
                                required>
                        </div>
                        
                        <div class="">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- end - body -->
        </div>

        <script type="text/javascript" src="../assets/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/summernote/dist/summernote-lite.js"></script>
        
        <script>

        $(document).ready( function(){

            $('#register-user-form').submit( function(e){
                e.preventDefault();

                var data = {
                    firstname: $('#firstname').val(),
                    lastname: $('#lastname').val(),
                    email: $('#email').val(),
                    username: $('#username').val(),
                    password: $('#password').val(),
                }
                
                $.ajax({
                    url: 'controllers.php?action=register_user',
                    method:'POST',
                    data:data,
                    success:function(res){
                        if(res==1) {
                            $('#firstname').val('');
                            $('#lastname').val('');
                            $('#email').val('');
                            $('#username').val('');
                            $('#password').val('');

                        }else {
                            alert("ERROR!");
                        }
                    },
                    error:function (err){
                    console.log(err);
                    }
                });
            });

        });

        </script>

    
    </body>
</html>