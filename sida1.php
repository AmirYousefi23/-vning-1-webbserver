<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #4682b4;
            }

        header {
            background-color: #000000;
            color: #fff;
            text-align: center;
            padding: 2em 0;
            }

        footer {
            background-color: #000000;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            }
    </style>
</head>
<body>
    
</body>
</html></head>
<body>

    <header>
       <h1> Amirs dåliga kunskaper </h1>
    </header>

    <h2> Den här sidan innehåller ett enkelt HTML-dokument med PHP-funktioner </h2>

    <?php
        echo "<p>Denna text är genererad med utskriftskommandot i PHP</p>";

        if(isset($_POST['submit'])){
            $strName = !empty($_POST['name']) ? $_POST['name'] : "Dittnamn";

            echo "<p>Hej $strName</p>";
            echo "<p> Ditt namn baklänges: " . strrev($strName) . "</p>"; // skriver ut namn baklänges
            echo "<p> Ditt namn med småa bokstäver: " . strtolower($strName) . "</p>"; // skriver namn med småa bokstäver
            echo "<p> Ditt namn med stora bokstäver: " . strtoupper($strName) . "</p>"; // skriver namn med stora bokstäver
            echo "<p> Antal tecken ditt namn har: " . strlen($strName) . "</p>"; // den säger hur många tecken ditt namn har
        }
    ?>

    <form method="post" action="">
        <label for="name">Skriv ditt namn här:</label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Skicka">
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>