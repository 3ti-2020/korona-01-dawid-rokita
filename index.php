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
                <form action="insert.php" method="POST">
                    <ul class="inslist">
                        <li><p>wielkosc</p><input type="text" name="wielkosc"></li>
                        <li><p>nazwa</p><input type="text" name="nazwa"></li>
                        <li><p>wersja</p><input type="text" name="wersja"></li>
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
            
                    $result= $conn->query("SELECT * FROM kostki;");
                   
                    echo("<h1>TABELKA KOSTKI</h1>");
                    echo("<table class='tabelasql'>");
                    echo("<tr class='head'>
                        <td>wielkosc</td>
                        <td>Nazwa kostki</td>
                        <td>Wersja kostki</td> 
                    </tr>");
            
                    while($wiersz = $result->fetch_assoc()){
            
                        echo("<tr class='son'>");
                        echo("<td>" .$wiersz['wielkosc']. "</td><td>" .$wiersz['nazwa']. "</td><td>" .$wiersz['wersja']. "</td>");
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