
<!-- header include -->
<?php include '../../../layouts/admin/header.php' ?>

<!-- include sidebar -->
<?php include '../../../layouts/admin/sidebar.php' ?>

<?php 
// <!-- include Manager class -->
    include './action.php'; 

    $man = new Manager();
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <h2>All Managers</h2>
        <!-- show alert message here -->
        <?php if(!empty($_GET['success']) || !empty($_GET['error'])) { ?>
            <div class="alert <?php echo !empty($_GET['success']) ? 'alert-info' : 'alert-danger' ?>">
                <?php
                    if(!empty($_GET['success'])){
                        echo $_GET['success'];
                    }
                    if(!empty($_GET['error'])){
                        echo $_GET['error'];
                    }
                ?>
            </div>
        <?php } ?>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $managers = $man->index();
                    foreach ($managers as $key => $manager) { ?>
                        <tr>
                        <td><?php echo $manager['id'] ?></td>
                        <td><?php echo $manager['name'] ?></td>
                        <td><?php echo $manager['email'] ?></td>
                        <td><?php echo $manager['phone'] ?></td>
                        <td>
                            <div class="d-flex">
                            <a href="./edit.php?update=1&id=<?php echo $manager['id']; ?>" class="btn btn-primary mx-1">Edit</a>
                            <a href="./action.php?delete=1&id=<?php echo $manager['id']; ?>" class="btn btn-danger mx-1">Delete</a>
                            </div>
                        </td>
                        </tr>
                    <?php } 
                ?>
            </tbody>
            </table>
        </div>
    </main>
        