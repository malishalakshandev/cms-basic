<?php
session_start();

if(isset($_SESSION['userData'])){
    print_r($_SESSION['userData']);
    unset($_SESSION["userData"]);
}

?>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="../assets/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/dist/js/bootstrap.bundle.min.js"/>
        
    </head>
    <body>
                    

        <div class='container-fluid'>
            <div class='row'>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        ADMIN LOGIN
                    </div>
                    <div class="card-body">
                        <form action="" id="login-form">
                            <div class="input-group mb-3">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="username"
                                    name="username" 
                                    placeholder="Username" 
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="password"
                                    name="password" 
                                    placeholder="Password" 
                                    required>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Content Management System
                    </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>




        <script type="text/javascript" src="../assets/dist/js/jquery.min.js"></script>

        <script>
        $(document).ready( function(){

            $('#login-form').submit( function(e){
                e.preventDefault();

                var data = {
                    username: $('#username').val(),
                    password: $('#password').val(),
                }
                
                $.ajax({
                    url: 'controllers.php?action=admin_login',
                    method:'POST',
                    data:data,
                    success:function(res){
                        if(res==1) {
                            location.href = 'home.php';
                        }else if(res==2){
                            alert("Invalid Username or Password!");
                            $('#username').val('');
                            $('#password').val('');
                            $('#username').focus();
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