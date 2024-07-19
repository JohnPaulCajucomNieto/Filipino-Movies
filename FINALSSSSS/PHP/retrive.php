<?php 

    require_once 'connect.php';

    function display(){
        global $con;
        $query = "SELECT * FROM diary_entrytbl";
        $result = mysqli_query($con,$query);
        return $result;
    }
?>