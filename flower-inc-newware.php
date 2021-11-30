<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Nieuwe magazijn</title>
    </head>
    <body class="loggedin">
        <nav class="navtop">
			<div>
				<h1>Flower inc</h1>
                <a href="flower-inc.php"><i></i>Home</a>
                <a href="flower-inc-flowers.php"><i></i>Bloemen</a>
                <a href="flower-inc-warehouse.php"><i></i>Magazijn</a>
				<a href="flower-inc-account.php"><i></i>Account</a>
				<a href="flower-inc-logout.php"><i></i>Log uit</a>
			</div>
		</nav>
        <div class="content">
			<h1>Nieuw magazijn</h1>
            <div class="base">
                <a href="flower-inc-warehouse.php">Terug naar overzicht</a>

    `   <?php
            require 'connection.php';

            if (!isset($_SESSION['loggedin'])) {
                header('Location: flower-inc-login.php');
                exit;
            }
            if (isset($_POST["submit"])) {
                    $naam = $_POST['magazijn'];

                    $sql = "INSERT INTO magazijn SET magazijn=?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$naam]);
            } else {
            ?>
            <form action="flower-inc-newware.php" method="post">
                <label for="new-m-name">Magazijn naam:</label>
                <input type="text" id="new-m-name" name="magazijn">
                <input type="submit" name="submit" value="Voeg toe">
            </form>
            <?php
        }
        ?>
        </div>
        </div>

    </body>
</html>
