<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "";

    //Create connection
    $conn = new mysqli_connect($servername, $username, $password);

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        

        $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving') "

        mysqli_query($connection, $request);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }

?>