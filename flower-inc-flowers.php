<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Bloemen</title>
    </head>
    <body class="loggedin">

    <?php
        require 'connection.php';

        if (!isset($_SESSION['loggedin'])) {
            header('Location: flower-inc-login.php');
            exit;
        }
    
    ?>
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
            <h1>Alle bloemen</h1>
            <h2><a href="flower-inc-newflower.php">nieuwe bloem</a></h2>
            <div class="base">
                
                    <?php 
                        
                        $stmt = "SELECT magazijn.id, magazijn.magazijn, bloemen.magazijn_id, bloemen.naam, bloemen.id, bloemen.aantal 
                        FROM magazijn
                        INNER JOIN bloemen ON magazijn.id = bloemen.magazijn_id";
                        $result = $pdo->query($stmt);

                        foreach ($result as $row) {

                    ?>

                <div id="b-overzicht">
                        <p>Naam: <?php echo $row['naam']; ?></p>
                        <p>Aantal bloemen: <?php echo $row['aantal'];?></p>
                        <p> Opgeslagen in magazijn: <?php echo $row['magazijn']; ?></p>
                        <a href="flower-inc-f-info.php?id=<?php echo $row['id'] ?>">Meer info</a>
                </div>
                
                <?php
                    };                              
                ?>
            </div>
            </div>
        </div>
    </body>
</html>
