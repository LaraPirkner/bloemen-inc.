<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Flower inc</title>
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
			<h1>Welkom</h1>
			<p>Hallo, <?=$_SESSION['name']?>!</p>
        </div>
            <?php
                $stmt = "SELECT magazijn.id, magazijn.magazijn, bloemen.magazijn_id, bloemen.naam, bloemen.aantal 
                FROM magazijn
                INNER JOIN bloemen ON magazijn.id = bloemen.magazijn_id";
                $result = $pdo->query($stmt);

                foreach ($result as $row) {
                    $qty=$row['aantal'];
                        if($qty <= 30){
            ?>
                <div class="notificatie">
                    <h1>Let op weinig <?php echo $row['naam'];?></h1>
                    <h2>In magazijn <?php echo $row['magazijn']?></h2>
                    <h2>Er zijn nog <?php echo $row['aantal']?></h2>
                </div>
            <?php
                    }
                }
            ?>


    </div>
    </body>
</html>
