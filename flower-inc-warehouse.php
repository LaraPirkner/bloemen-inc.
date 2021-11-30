<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Magazijn</title>
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
			<h1>Overzicht van de magazijnen</h1>
            <a href="flower-inc-newware.php">Nieuwe magazijn</a>
            <div class="base">
                <div class="magazijn">

                </div>
                    <?php 
            
                        $stmt = "SELECT magazijn.id, magazijn.magazijn, bloemen.magazijn_id, bloemen.naam, bloemen.aantal 
                        FROM magazijn
                        INNER JOIN bloemen ON magazijn.id = bloemen.magazijn_id";
                        $result = $pdo->query($stmt);

                        foreach ($result as $row) {

                        ?>
 
                    <div id="m-overzicht">
                            <p>Magazijn <?php echo $row['magazijn']; ?></p>
                            <p>Welke Bloem: <?php echo $row['naam']; ?></p>
                            <p>Hoeveelheid bloemen: <?php echo $row['aantal'];?></p>
                            <a href="">Verander aantal</a>
                    </div>
                    
                    <?php
                    };                              
                    ?>
			    
            </div>
		</div>
    
    </body>
</html>