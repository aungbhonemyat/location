<?php 


@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Township and categories from admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>


                <div class="card mt-5">
                    <div class="card-header">
                         
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="">Township</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary">add Township</button>
                            </div>


                             <div class="from-group mb-3">
                                <label for="">Categories</label>
                                <input type="text" name="cate" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="cate_select" class="btn btn-primary">Add Categories</button>
                            </div>


                            <div class="from-group mb-3">
                                <label for="">City</label>
                                <input type="text" name="city" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="city_select" class="btn btn-primary">Add City</button>
                            </div>

                            
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>