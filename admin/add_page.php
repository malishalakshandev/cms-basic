<?php 

include './common/sessionhandling.php';

?>

<html>
    <head>
        <title>Admin - Add Page</title>
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
                <h3>Admin - Add Page</h3>
            </div>

            
            <div class="card">
                <div class="card-body">

                    <form action="" id="add-page-form">
                        <div class="mb-3">
                            <label class="form-label">Page Title</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="pagetitle"
                                name="pagetitle" 
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Page Description</label>
                            <textarea 
                                id="summernote" 
                                name="pagedescription">
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label><br>
                            <input 
                                type="checkbox"
                                id="status"
                                name="status"
                                class="form-check-input" >
                                <label class="form-label">Published</label>
                        </div>
                        
                        <div class="">
                            <button type="submit" class="btn btn-primary">Sign In</button>
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

            $('#summernote').summernote({
                tabsize: 2,
                height: 300
            });

            $('#add-page-form').submit( function(e){
            e.preventDefault();

                $.ajax({
                    url: 'controllers.php?action=add-page-form',
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    type: 'POST',
                    data:new FormData($(this)[0]),
                    success:function(res){
                        console.log(res);
                        if(res==1) {
                            $('#pagetitle').val('');
                            $('#summernote').summernote('code', '');
                            $("#status").prop("checked", false);
                        }else{
                            
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