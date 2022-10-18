<?php
// session_start();

// if(isset($_SESSION['userData'])){
//     print_r($_SESSION['userData']);
//     unset($_SESSION["userData"]);
// }

?>
<html>
    <head>
        <title>Register User</title>
        <link rel="stylesheet" type="text/css" href="./assets/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./assets/dist/js/bootstrap.bundle.min.js"/>
        <style>
            .msg{
                color:red;
            }
        </style>
        
    </head>
    <body>
                    

        <div class='container-fluid'>
            <div class='row'>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        USER REGISTER
                    </div>
                    <div class="card-body">
                        <form action="" id="register-form">
                            <div class="mb-3">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="firstname"
                                    name="firstname" 
                                    placeholder="First Name" 
                                    >
                                    <div><small class="msg" id='msgFirstName' for='firstname'></small></div>
                            </div>

                            <div class="mb-3">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="lastname"
                                    name="lastname" 
                                    placeholder="Last Name" 
                                    >
                                    <div><small class="msg" id='msgLastName' for='lastname'></small></div>
                            </div>

                            <div class="mb-3">
                                <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email"
                                    name="email" 
                                    placeholder="Email Address" 
                                    >
                                    <div><small class="msg" id='msgEmail' for='email'></small></div>
                            </div>

                            <div class="mb-3">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="username"
                                    name="username" 
                                    placeholder="Username" 
                                    >
                                    <div><small class="msg" id='msgUsername' for='username'></small></div>
                            </div>

                            <div class="mb-3">
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="password"
                                    name="password" 
                                    placeholder="Password" 
                                    >
                                    <div><small class="msg" id='msgPassword' for='password'></small></div>
                            </div>

                            <div class="mb-3">
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="cpassword"
                                    name="cpassword" 
                                    placeholder="Confirm Password" 
                                    >
                                    <div><small class="msg" id='msgCPassword' for='cpassword'></small></div>
                            </div>

                            <div class="">
                                <button type="submit" id="register" class="btn btn-primary">Register</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        CMS - WEBSITE
                    </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>




        <script type="text/javascript" src="./assets/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="./assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>

        <script>
        $(document).ready( function(){
            
            jQuery.validator.addMethod("mypassword", function(value, element) {
            
            return this.optional( element ) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test( value );
            }, 'Must have at least 1 uppercase letter, 1 number, lowercase letters and specialcharacters.');

            $( "#register-form" ).validate({
                rules: {
                    firstname: {
                        required: true,
                        lettersonly: true,
                    },
                    lastname: {
                        required: true,
                        lettersonly: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    username: {
                        required: true,
                        minlength: 6,
                        alphanumeric: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        mypassword: true,
                    },
                    cpassword: {
                        required: true,
                        equalTo: "#password"
                    },
                }
            });

            $('#register-form').submit( function(e){
                e.preventDefault();
                
                var data = {
                    firstname: $('#firstname').val(),
                    lastname: $('#lastname').val(),
                    email: $('#email').val(),
                    username: $('#username').val(),
                    password: $('#password').val(),
                }
                console.log('ffffff');
                $.ajax({
                    url: './controllers.php?action=check_user_exist',
                    method:'POST',
                    data:data,
                    success:function(res){
                        if(res==1) {
                            alert('Username already Exist!');
                        }else if(res==2){
                            registerUser();
                        }
                    },
                    error:function (err){
                    console.log(err);
                    }
                });

                function registerUser(){
                    $.ajax({
                    url: './controllers.php?action=register_user',
                    method:'POST',
                    data:data,
                    success:function(res){
                        if(res==1){
                            alert('User Registered Successfully!!');
                            window.location.href = "./login.php";
                        }
                    },
                    error:function (err){
                    console.log(err);
                    }
                    });
                }

            });

            

        });
        </script>
    
    </body>
</html>