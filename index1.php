<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="grid">
        <div class="item1">
            <div class="cube">
                <img src="zdjecia/cube.png">
            </div>
            <div class="tytul">
                <h1>Dawid Rokita</h1>
                <p class="parag">Strona stworzona z myślą o tych, którzy są ciekawi</p>
            </div> 
        </div>
        <div class="item2">
            <div class="menu">
                <div class="li1"><a href="index.php">KOSTKI</a></div>
                <div class="li2"><a href="index1.php">REKORDY</a></div>
                <div class="li3"><a href="index2.html">ZAWODY</a></div>
            </div>
        </div>
        <div class="item3">
            <div class="kontener">
                <div class="insert">
                    <button class="dodaj">➕</button>
                <form action="insert2.php" method="POST">
                    <ul class="inslist">
                        <li><p>konkurencja</p><input type="text" name="konkurencja"></li>
                        <li><p>imie</p><input type="text" name="imie"></li>
                        <li><p>czas</p><input type="text" name="czas"></li>
                        <li><p>kraj</p><input type="text" name="kraj"></li>
                        <li><input type="submit" name="POST"></li>
                    </ul>                 
                </form>
                </div>
                <?php
                    $servername="localhost";
                    $username="Dawid";
                    $password="dawid";
                    $dbname="dawid_rokita";
                
                    $conn= new mysqli($servername, $username, $password, $dbname);
            
                    $result2= $conn->query("SELECT * FROM rekordy;");
                    echo("<h1>TABELKA REKORDY</h1>");
                    echo("<table class='tabelasql'>");
                    echo("<tr class='head'>
                        <td>konkurencja</td>
                        <td>Rekordzista</td>
                        <td>czas(s)</td> 
                        <td>Narodowosc</td> 
                    </tr>");

                    while($wiersz2 = $result2->fetch_assoc()){

                        echo("<tr class='son'>");
                        echo("<td>" .$wiersz2['konkurencja']. "</td><td>" .$wiersz2['imie']. "</td><td>" .$wiersz2['czas']. "</td><td>" .$wiersz2['kraj']. "</td>");
                        echo("</tr>");
                
                    }
                    echo("</table>");
                    
                    $conn->close();
                ?>
                
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>