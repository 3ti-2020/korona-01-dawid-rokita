<?php

    $servername="localhost";
    $username="Dawid";
    $password="dawid";
    $dbname="dawid_rokita";

    $conn= new mysqli($servername, $username, $password, $dbname);

    $wielkosc=$_POST['wielkosc'];
    $nazwa=$_POST['nazwa'];
    $wersja=$_POST['wersja'];

    $sql="INSERT INTO kostki (id, wielkosc, nazwa, wersja) VALUES (NULL, '$wielkosc', '$nazwa', '$wersja')";

    mysqli_query($conn, $sql);
    $conn->close();

    header('Location: http://localhost/kostkiphp/index.php');

?>