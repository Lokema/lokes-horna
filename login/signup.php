<!DOCTYPE html>
<html>
<head>
	<title>Lokes hörna - Skapa konto</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Kontouppgifter</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Namn</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ange namn"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ange namn"><br>
          <?php }?>

          <label>Användarnamn</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ange användarnamn"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ange användarnamn"><br>
          <?php }?>


     	<label>Lösenord</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Ange lösenord"><br>

          <label>Återupprepa lösenord</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Återupprepa lösenord"><br>

     	<button type="submit">Skapa konto</button>
          <a href="index.php" class="ca">Har du redan ett konto?</a>
     </form>
</body>
</html>