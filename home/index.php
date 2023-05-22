<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Presence</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    />
    <link
      rel="icon"
      href="images/Steam_icon_logo.svg.png"
      type="image/png"
      sizes="16x16"
    />
  </head>
  <body>
    <div class="big-container">
      <!--CONTAINER FÖR ALLT-->
      <div class="header">
        <!--HEADER-->
        <div class="header-btn">Välkommen <?php echo $_SESSION['name']; ?></div>
        <div class="header-btn">ABOUT</div>
        <div class="header-btn">SERVICES</div>
        <a href="../Login/logout.php" class="header-btn">Logga ut</a>
      </div>
      <div class="main-content">
        <!--CONTAINER FÖR IMG OCH MEMBERSHIP-->
        <div class="img-content">
          <div class="div">
            <h1>Work with us</h1>
            <p>
              Buy a membership now to get exclusive IT-support.
            </p>
            <a href="" class="btn">Read More</a>
          </div>
        </div>

        <div class="membership">
          <!--MEMBERSHIP-->
          <div class="membership-cards">
            <p>Membership</p>
            <h1>Coming soon</h1>
          </div>
          <div class="membership-cards">
            <p>Pro Membership</p>
            <h1>Coming soon</h1>
          </div>
        </div>
      </div>
      <!--BOTTOM CONTAINER-->
      <div class="bottom-container">
        <div class="bottom-btn">
          <span class="fas fa-chart-pie fa-3x"></span>
          <h4>Analytics</h4>
          <p>See the problems people have that are IT-related</p>
        </div>
        <div class="bottom-btn">
          <span class="fas fa-globe fa-3x"></span>
          <h4>Marketing</h4>
          <p>See how we market ourselves.</p>
        </div>
        <div class="bottom-btn">
          <span class="fas fa-cog fa-3x"></span>
          <h4>Development</h4>
          <p>See how we work with people's IT-problems.</p>
        </div>
        <div class="bottom-btn">
          <span class="fas fa-calendar fa-3x"></span>
          <h4>Time</h4>
          <p id="date"></p>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>