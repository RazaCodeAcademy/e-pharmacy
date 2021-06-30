
<!-- header include -->
<?php include '../../../layouts/admin/header.php' ?>

<!-- include sidebar -->
<?php include '../../../layouts/admin/sidebar.php' ?>

<!-- include connection file and Manager class -->
<?php 
    require_once '../../../connection/connection.php';
    include './action.php'; 
    $man = new Manager();
    
    $managers = $man->index($conn);
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <h2>All Managers</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($managers as $manager) { ?>
                <?php var_dump($manager->id) ?>
                    <tr>
                    <td><?php echo $manager['id'] ?></td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </main>
        