<?php
    // include connection file here.
    require_once '../../../connection/connection.php';

    // this class used to perform crud operation in oop for manager.
    class Manager{

        // fetch all data for managers
        public function index($conn)
        {
            $query="select * from users";
            $run = mysqli_query($conn, $query);
            $result = mysqli_fetch_array($run);
            return $result;
        }


        public function create($formData, $conn)
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
            $run=mysqli_query($conn, $query);
            if ($run) {
                header('location: ./index.php?success="Your Data has been submitted"');
            }
            else {
                echo "Your Data has not been submitted";
            }
        }

    }

    $manager = new Manager();
    // get values from the form
    if(isset($_POST['btn_save'])){
        $manager->create($_POST, $conn);
    }
    ?>