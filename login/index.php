<!DOCTYPE html>
<html>
<head>
	<title>Lokes Hörna - Inloggning</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Lokes Hörna <br> Inloggning</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Användarnamn</label>
     	<input type="text" name="uname" placeholder="Ange användarnamn"><br>

     	<label>Lösenord</label>
     	<input type="password" name="password" placeholder="Ange lösenord"><br>

     	<button type="submit">Logga in</button>
          <a href="signup.php" class="ca">Vill du skapa ett konto?</a>
     </form>
</body>
</html>