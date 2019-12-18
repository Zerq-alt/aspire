<?php
$servername     = "localhost";
$username       = "root";
$password       = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=vuurwerk", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    "Connected successfully<br>";
}

catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

function Knalvuurwerk($conn) {
    $select = "SELECT * FROM vuurwerk WHERE categorie = 'knalvuurwerk';";
    $result = $conn -> query($select);
    $databs = $result -> fetchAll(PDO::FETCH_ASSOC);

    echo "<div class='container' align='center'>";
    foreach($databs as $row) {
        echo "<div id='product'>";
        echo "<h1>$row[naam]</h1>";
        echo "<img src='$row[url_afbeelding]' width='300' height='250'><br><br>";
        echo "Vooraad: $row[voorraad] </div>";
        echo "Prijs:€ $row[prijs]";
        echo "<p><button>Add to Cart</button></p>";
    }
    echo "</div>";
}

function Siervuurwerk($conn) {
    $select = "SELECT * FROM vuurwerk WHERE categorie = 'siervuurwerk';";
    $result = $conn -> query($select);
    $databs = $result -> fetchAll(PDO::FETCH_ASSOC);

    echo "<div class='container' align='center'>";
    foreach($databs as $row) {
        echo "<div id='product'>";
        echo "<h1>$row[naam]</h1>";
        echo "<img src='$row[url_afbeelding]' width='300' height='250'><br><br>";
        echo "Vooraad: $row[voorraad] </div>";
        echo "Prijs:€ $row[prijs]";
        echo "<p><button>Add to Cart</button></p>";
    }
    echo "</div>";
}
?>
