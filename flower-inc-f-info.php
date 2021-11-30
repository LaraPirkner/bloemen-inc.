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

        <?php 

                        if (isset($_GET['id'])) {
                            $id = htmlspecialchars($_GET['id']);
                        };
                        
                        $stmt = ("SELECT * FROM bloemen WHERE ID = :id");
                        $result = $pdo->prepare($stmt);
                        $result->execute(array(':id' => $id));

                        foreach ($result as $row) {

                    ?>
        <div class="content">
            <div>
                <h1><?php echo $row['naam']; ?></h1>
            </div>
            <div class="b-base">
                

                <div id="b-bloem">
                        <?php echo "<img id='b-foto' src=" . $row['foto'] . ">";?>
                        <p>Naam: <?php echo $row['naam']; ?></p>
                        <p>Aantal bloemen: <?php echo $row['aantal'];?></p>
                        <p>Informatie over de bloem: <?php echo $row['text']; ?></p>
                        <a href="flower-inc-flowers.php">Terug naar overzicht</a>
                </div>
                
                <?php
                    };                              
                ?>
            </div>
        </div>
    </body>
</html>