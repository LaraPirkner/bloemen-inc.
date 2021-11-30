<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Nieuwe bloem</title>
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
			<h1>Nieuwe bloem</h1>
            <a href="flower-inc-flowers.php">Terug naar bloemen</a>
            <div class="base">

    <?php
        require 'connection.php';

        if (!isset($_SESSION['loggedin'])) {
            header('Location: flower-inc-login.php');
            exit;
        }
        
        if (isset($_POST["submit"])) {
                $name = $_POST['naam'];
                $img = $_POST['foto'];
                $info = $_POST['text'];
                $magazijn = $_POST['magazijn_id'];
                $aantal = $_POST['aantal'];


                $sql = "INSERT INTO bloemen SET naam=?, foto=?, text=?, aantal=?, magazijn_id=?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$name,$img,$info,$aantal,$magazijn]);
        } else {
            ?>
            <form action="flower-inc-newflower.php" method="post" id="f-bloem">
                <label for="naam">Naam</label>
                    <input type="text" name="naam">
                <label for="foto">Link naar img</label>
                    <input type="text" name="foto">
                <label for="magazijn">Magazijn</label>
                    <select name="magazijn_id" id="m-keuze">
                    <?php
                        $stmt = "SELECT * FROM magazijn";
                        $result = $pdo->query($stmt);

                        foreach ($result as $row) {
                        echo "<option>" . $row['id'] . "</option>";
                        };
                    ?>
                    </select>
                <label for="info">Informatie over bloem</label>
                    <textarea name="text" rows="10" cols="100"></textarea>
                <label for="aantal">Aantal</label>
                    <input type="text" name="aantal">
                <input id="b-submit" type="submit" name="submit" value="Voeg toe">
            </form>
            

            <?php
        }
        ?>

    </body>
</html>
