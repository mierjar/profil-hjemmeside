<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
 <!-- <?php include 'data.php';?> -->
    <header>
        <a href="#side1">
            <div class="menu">
                forside
            </div>
    </a>
    <a href="#side2">
            <div class="menu">
                Programmerings Projekter
            </div>
    </a>
    <a href="#side3">
        <div class="menu">
            Informatik Projekter
        </div>
</a>
<a href="#side4">
    <div class="menu">
        Om mig
    </div>
</a>
    </header>
    <main>
        <div class="page">
            <div class="page1">
                <h1 id='side1'>Forside</h1>
                    
                </div>
            </div>
        </div>
        <div class="page">
            <div class="page2"> 
                <h1 id='side2'>Programmerings Projekter</h1>
                <a href="https://github.com/mierjar">
                    <div class="page2">
                        Github Link
                    </div>
                </a>

            </div>
        </div>
        <div class="page">
            <div class="page3"> 
                <h1 id='side3'>Informatik Projekter</h1>
                <div class="rapporter">

                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "færdig";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Emne, Link, Beskrivelse FROM projekter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["ID"]. " - Name: " . $row["Emne"]. " " . $row["Link"]. " " . $row["Beskrivelse"]. "<br>";
    $link = $row["Link"];
    echo "<a href='$link'>Link til Rapporten</a>";
    echo " - Name: " . $row["Emne"]. "<br>". $row["Beskrivelse"]. "<br>". "<br>";
}
} else {
  echo "0 results";
}

$conn->close();
?>
                </div>
                    
                </div>
            </div>
        </div>
        <div class="page">
            <div class="page4"> 
                <h1 id='side4'>Om mig</h1>
                <img src="/assets/mie.jpg" alt="Mie's profil billede">
                <p>Hej, jeg er Mie, en 18-årig pige med interesse i programmering og informatik. Jeg er ved at afslutte programmering B og informatik B på Københavns Mediegymnasie, hvor jeg har arbejdet på at udvikle mine færdigheder gennem personlige projekter og undervisning på skolen.</p>
                <p>Det næste trin er at starte på universitetet inden for softwareudvikling og ser frem til at dykke dybere ned i emnet og udvikle mine færdigheder endnu mere. Jeg har også planer om at tage en kandidat i spiludvikling, da det er det område, jeg er særligt interesseret i.</p>
                <p>På denne hjemmeside kan du se nogle af mine tidligere projekter og finde ud af mere om mine færdigheder og erfaringer.</p>
                </h2>
            </div>
        </div>
    </main>
    <footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <a href="https://www.linkedin.com/in/mie-jarner-25857624b/">
            <div class="footer">
                Link til min Linkedin
            </div>
        </a>
    </footer>
    <script src="index.js"></script>
</body>
</html>