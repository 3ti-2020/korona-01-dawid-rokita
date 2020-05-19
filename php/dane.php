<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylephp.css"/>
</head>
<body>

<div class="insert1">
    INSERT DO TABELI KOSTKI:
    <form action="insert.php" method="POST">
        wielkosc
        <input type="text" name="wielkosc">
        nazwa
        <input type="text" name="nazwa">
        wersja
        <input type="text" name="wersja">

        <input type="submit" name="POST">
    </form>
</div>

<div class="insert2">
INSERT DO TABELI REKORDY:
    <form action="insert2.php" method="POST">
        konkurencja
        <input type="text" name="konkurencja">
        imie
        <input type="text" name="imie">
        czas
        <input type="text" name="czas">
        kraj
        <input type="text" name="kraj">

        <input type="submit" name="POST">
    </form>
</div>

<div class="tabelediv">
<?php
       $servername="localhost";
       $username="Dawid";
       $password="dawid";
       $dbname="dawid_rokita";
   
       $conn= new mysqli($servername, $username, $password, $dbname);

       $result= $conn->query("SELECT * FROM kostki;");
        echo("<h1>TABELKA KOSTKI</h1>");
        echo("<div class='tabelka'>");
        echo("<table>");
        echo("<tr class='headtab'>
            <td>wielkosc</td>
            <td>Nazwa kostki</td>
            <td>Wersja kostki</td> 
        </tr>");

        while($wiersz = $result->fetch_assoc()){

            echo("<tr>");
            echo("<td>" .$wiersz['wielkosc']. "</td><td>" .$wiersz['nazwa']. "</td><td>" .$wiersz['wersja']. "</td>");
            echo("</tr>");
    
        }
        echo("</table>");
        echo("</div>");


        $result2= $conn->query("SELECT * FROM rekordy;");
        echo("<h1>TABELKA REKORDY</h1>");
        echo("<div class='tabelka'>");
        echo("<table>");
        echo("<tr class='headtab'>
            <td>konkurencja</td>
            <td>Rekordzista</td>
            <td>czas(s)</td> 
            <td>Narodowosc</td> 
        </tr>");

        while($wiersz2 = $result2->fetch_assoc()){

            echo("<tr>");
            echo("<td>" .$wiersz2['konkurencja']. "</td><td>" .$wiersz2['imie']. "</td><td>" .$wiersz2['czas']. "</td><td>" .$wiersz2['kraj']. "</td>");
            echo("</tr>");
    
        }
        echo("</table>");
        echo("</div>");
    $conn->close();

?>
</div>
</body>
</html>
  
