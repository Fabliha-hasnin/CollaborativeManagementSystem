<?php

@include '../../Model/client/db.php';


if (isset($_POST['feedback'])) {
    $name= $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $opinion = $_POST['opinion'];

    $insert_query = mysqli_query($conn, "INSERT INTO `feedbacks`(name, email, country, opinion ) VALUES('$name', '$email', '$country', '$opinion')") or die('query failed');

    if ($insert_query) {

         header("location: ../../View/client/client.php");

    } else {
        echo"error";
    }
};



if (isset($_POST['pay'])) {
    $account= $_POST['account'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];
    $pid = $_POST['pid'];

    $insert_query = mysqli_query($conn, "INSERT INTO `payments`(account, amount, method, pid ) VALUES('$account', '$amount', '$method', '$pid')") or die('query failed');

    if ($insert_query) {

         header("location: ../../View/client/client.php");

    } else {
        echo"error";
    }
};

?>
