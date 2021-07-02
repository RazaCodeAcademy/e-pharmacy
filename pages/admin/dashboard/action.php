<?php
    // include connection file here.
    include '../../../connection/connection.php';

    // this class used to perform crud operation in oop for manager.
    class Manager extends Database{

        // fetch all data for managers
        public function index()
        {
            $query="select COUNT(*) as managers from users where role=2";
            $run = mysqli_query($this->conn, $query);
            $result = [];
            $row = mysqli_fetch_array($run);
            $managers = $row['managers'];
                // $result[] = $row['managers'];

                array_push($result, $managers);
                array_push($result, $managers);
            
            return $result;
        }

        // create new manager
        public function create($formData)
        {
            $name =  $formData['name'];
            $email =  $formData['email'];
            $phone =  $formData['phone'];
            $password =  $formData['password'];
            $role =  2;

            // upload images
            $image = $_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $path = "../../../assets/images/uploads/".$image;
            move_uploaded_file($tmp_name, $path);
            
            $query="Insert into users(name,email,phone,password,role,image)
                    values('$name','$email','$phone','$password','$role','$image')";
            $run=mysqli_query($this->conn, $query);
            if ($run) {
                header('location: ./index.php?success=Your data has been deleted');
            }
            else {
                header('location: ./index.php?error=Your data has not been deleted');
            }
        }

        // edit manager
        public function edit($id)
        {
            $query="select * from users where id = $id";
            $run = mysqli_query($this->conn, $query);

            if ($run) {
                return $result = mysqli_fetch_array($run);
            }
            else {
                return 'nothing';
            }
        }

        // update manager
        public function update($formData)
        {
            $id =  $formData['id'];
            $name =  $formData['name'];
            $email =  $formData['email'];
            $phone =  $formData['phone'];
            $password =  $formData['password'];
            // upload images
            if($_FILES['image']['name']){
                $image = $_FILES['image']['name'];
                $tmp_name=$_FILES['image']['tmp_name'];
                $path = "../../../assets/images/uploads/".$image;
                move_uploaded_file($tmp_name, $path);
            }else{
                $image =  $formData['prev_image'];
            }

            $query="update users set name='$name', email='$email', phone='$phone', password='$password', image='$image' where id = $id";
            $run = mysqli_query($this->conn, $query);

            if ($run) {
                header('location: ./index.php?success=Your data has been updated');
            }
            else {
                header('location: ./index.php?error=Your data has not been updated');
            }
        }

        // remove manager
        public function delete($id)
        {
            $query="delete from users where id = $id";
            $run = mysqli_query($this->conn, $query);

            if ($run) {
                header('location: ./index.php?success=Your Data has been deleted');
            }
            else {
                header('location: ./index.php?error=Your data has not been deleted');
            }
        }

    }

    $manager = new Manager();
    // get values from the form
    if(isset($_POST['btn_save'])){
        $manager->create($_POST);
    }

    // get id from the index page for deletion
    if(isset($_GET['delete'])){
        $manager->delete($_GET['id']);
    }

    // get id from the index page for updation
    if(isset($_POST['btn_update'])){
        $manager->update($_POST);
    }
    ?>