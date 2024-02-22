<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #808080;
        }

        header {
            background-color: #000000;
            color: #fff;
            text-align: center;
            padding: 1em 0;
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

    <header>
        <h1> Amirs dåliga kunskaper  </h1>
    </header>

    <div>
        <h2> Enkel HTML-sida med PHP-funktiner </h2>

        <?php
        $farmAnimals = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $farmAnimals[] = $_POST['animal1'];
            $farmAnimals[] = $_POST['animal2'];
            $farmAnimals[] = $_POST['animal3'];

            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            $farmAnimals[2] = "Struts";

            $farmAnimals[] = "Alpacka";

            array_shift($farmAnimals);

            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            echo "Andra djuret är: " . $farmAnimals[1];
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="Djur 5">Djur 1:</label>
        <input type="text" name="animal1" required>

        <label for="Djur 6">Djur 2:</label>
        <input type="text" name="animal2" required>

        <label for="Djur 7">Djur 3:</label>
        <input type="text" name="animal3" required>

        <button type="submit"> Kör </button>
    </form>
</body>
</html>