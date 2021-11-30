<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Account</title>
    </head>
    <body class="loggedin">
        <?php
            require 'connection.php';

            if (!isset($_SESSION['loggedin'])) {
                header('Location: flower-inc-login.html');
                exit;
            }

            $stmt = $con->prepare('SELECT password, email FROM users WHERE id = ?');
            $stmt->bind_param('i', $_SESSION['id']);
            $stmt->execute();
            $stmt->bind_result($password, $email);
            $stmt->fetch();
            $stmt->close();
            
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
			<h1>Account</h1>
			<div>
				<p>Dit is al jouw informatie:</p>
				<table>
					<tr>
						<td>Gebruikersnaam:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Wachtwoord:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>