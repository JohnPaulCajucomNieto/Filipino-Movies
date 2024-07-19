<?php 

session_start();
$connection = mysqli_connect("localhost","root","","dbdiary_entry");

if (isset($_POST['submit'])) {
    $category = $_POST['category']; // This will contain the selected category value
    $content = $_POST['content'];
    $date = $_POST['date'];
    
    $insert_query = "INSERT INTO diary_entrytbl(category, content, date) VALUES('$category','$content','$date')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run){
        $_SESSION['status'] = "Data Added!";
        header('location: \FINALSSSSS\HTML\data_entry.html');
    }else{
        $_SESSION['status'] = "Data not added!";
        header('location: \FINALSSSSS\HTML\data_entry.html');
    }

}

?>