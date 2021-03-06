<!-- header file to be included when user is logged in (has profile, welcome and log out) -->

<?php
    // if user clicked the log out button
    if (isset($_GET['logout'])) {
        // destroy all session variables
        session_destroy();
        unset($_SESSION['username']);
        // redirect to login page after user logged out
        header("location: http://localhost:8080/Penang/LoginSignUp/LoginSignUp/login.php");
    }
?>

<meta charset="utf-8">
<!-- fit screen sizes of multiple devices and ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
</head>
  
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <a class="navbar-brand" href="http://localhost:8080/Penang\Touristy\Touristy\index.php">Touristy</a>
      <!-- toggleable and collapsible navigation menu button -->
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>Menu
      </button>
      <script>
          function LogoutFunction() {
              // confirm method to set logout to 1(not null) if user clicks "OK"
              // if user clicks "cancel", user stays on the current page
              if (confirm('Are you sure you want to log out?'))window.location.href="index.php?logout='1'";
          }
      </script>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <!-- navigation menu links -->
          <li class="nav-item"><a href="http://localhost:8080/Penang\Touristy\Touristy\index.php" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="http://localhost:8080/Penang\Touristy\Touristy\destination-war.php" class="nav-link"><span>War Museum</span></a></li>
          <li class="nav-item"><a href="http://localhost:8080/Penang\Touristy\Touristy\destination-farm.php" class="nav-link"><span>Butterfly Farm</span></a></li>
          <li class="nav-item"><a href="http://localhost:8080/Penang/LoginSignUp/LoginSignUp/login.php" class="nav-link"><span>Log In</span></a></li>
          <li class="nav-item"><a href="http://localhost:8080/Penang/Touristy/Touristy/profile.php" class="nav-link"><span>Profile</span></a></li>
          <?php  if (isset($_SESSION['username'])) : ?>
            <li class="nav-item"><a href="#" class="nav-link"><span>Welcome, <?php echo $_SESSION['username']; ?></span></a></li>
            <!-- a href="#" will allow the user to still stay on current page if they do not wish to log out  -->
            <a href="#" class="nav-link"><button type="button" class="btn btn-danger" onclick="LogoutFunction()">Log Out</button></a>
          <?php endif ?>
        </ul>
      </div>
  </nav>
    