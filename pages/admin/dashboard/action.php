<?php
    // include connection file here.
    include '../../../connection/connection.php';

    // this class used to perform crud operation in oop for dashboard.
    class Dashboard extends Database{

        // fetch all data for managers
        public function index()
        {
            $query="select * from users where role=2";
            $run = mysqli_query($this->conn, $query);
            $managers =  mysqli_num_rows($run);
            $result = [];
            
            $result['managers'] = $managers;
            
            return $result;
        }
    }
?>