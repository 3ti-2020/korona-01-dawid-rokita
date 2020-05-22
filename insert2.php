<?php
    $servername="localhost";
    $username="Dawid";
    $password="dawid";
    $dbname="dawid_rokita";

    $conn= new mysqli($servername, $username, $password, $dbname);

    $konkurencja=$_POST['konkurencja'];
    $imie=$_POST['imie'];
    $czas=$_POST['czas'];
    $kraj=$_POST['kraj'];

    $sql="INSERT INTO rekordy (id, konkurencja, imie, czas, kraj) VALUES (NULL, '$konkurencja', '$imie', '$czas', '$kraj')";

    mysqli_query($conn, $sql);
    $conn->close();

    header('Location: http://localhost/kostkiphp/index1.php');

?>