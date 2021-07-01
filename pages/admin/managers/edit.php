<title>Manager | Create</title>
<!-- header include -->
<?php include '../../../layouts/admin/header.php' ?>

<!-- include sidebar -->
<?php include '../../../layouts/admin/sidebar.php' ?>

<?php 
// <!-- include Manager class -->
    include './action.php'; 

    $man = new Manager();

    $manager = $man->index();
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Managers</h1>
        </div>
        <h2 class="text-center">Update Manager</h2>
        <div class="container">
            <div class="row">
                <form action="action.php" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 my-4">
                        <div class="form-group">
                            <label for="">Enter Name</label>
                            <input type="text" value="<?php echo $manager['name']; ?>" class="form-control" name="name" placeholder="Name...">
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email...">
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <div class="form-group">
                            <label for="">Enter Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="Phone...">
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <div class="form-group">
                            <label for="">Choose Image</label>
                            <input type="file" class="form-control" name="image" placeholder="Image...">
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <div class="form-group">
                            <label for="">Enter Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password...">
                        </div>
                    </div>
                    <div class="col-md-12 my-4 text-center">
                        <input type="submit" class="btn btn-primary px-5 mt-5" name="btn_save" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </main>
        