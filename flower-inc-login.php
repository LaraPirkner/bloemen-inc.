<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="flower-inc.css">
        <title>Login</title>
    </head>
    <body>
        <?php 
        require 'connection.php';
        ?>

        <div class="login">
            <h2>Login</h2>
            <form action="authenticatie.php" method="post">
                <label for="username">
                    <i></i>
                </label>
                <input type="text" name="username" placeholder="Gebruikersnaam" id="username" required="" 
                oninvalid="this.setCustomValidity('Het veld mag niet leeg zijn')" oninput="setCustomValidity('')">
				<label for="password">
					<i class="log-pass"></i>
				</label>
				<input type="password" name="password" placeholder="Wachtwoord" id="password" required="" 
                oninvalid="this.setCustomValidity('Het veld mag niet leeg zijn')" oninput="setCustomValidity('')">
				<input type="submit" value="Login">
            </form>
        </div>

    </body>
</html> 