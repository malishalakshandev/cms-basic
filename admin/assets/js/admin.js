// $(document).ready( function(){

//     $('#login-form').submit( function(e){
//         e.preventDefault();

//         var data = {
//             username: $('#username').val(),
//             password: $('#password').val(),
//         }
        
//         $.ajax({
//             url: 'controllers.php?action=admin_login',
//             method:'POST',
//             data:data,
//             success:function(res){
//                 if(res==1) {
//                     location.href = 'home.php';
//                 }else if(res==2){
//                     alert("Invalid Username or Password!");
//                     $('#username').val('');
//                     $('#password').val('');
//                     $('#username').focus();
//                 }
//             },
//             error:function (err){
//               console.log(err);
//             }
//         });
//     });

// });