<?php
    include('connect.php');
    $cusid = $_GET['cusid'];
    $delete = "DELETE FROM customer 
                WHERE CustomerID = '$cusid'";
    $query = mysqli_query($connect,$delete);
    if ($query) {
        echo "<script> alert('Customer is deleted!');
                window.location.href='index.php';</script>";
    } else {
        echo "<script>alert ('Error is occured!');</script>";
    };

?>