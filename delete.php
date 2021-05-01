<?php
    
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "base1";
    
        
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    
    if (isset($_GET['delete']))
    {
        header('location: eventslist.php') ;
        
        $location = $_POST['location'];
        $id= $_GET['delete'];
        $query = "DELETE FROM events WHERE idv='$id'";
        $result = mysqli_query($connect,$query);
        $_SESSION['message'] = "record has been deleted";
        $_SESSION['msg_type'] = "danger";
        
     
    }
    

  
?>