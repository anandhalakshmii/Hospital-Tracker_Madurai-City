<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
   Appointment Success
  </title>
  <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/3448/3448513.png">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="../assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home_page.php">
         Hospital Tracker - Appointment Success</a>
        <button class="navbar-toggler toggled" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="profile_page.php" class="nav-link" target="_blank">
              <i class="material-icons">person</i>  <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hospitallist.html" target="_blank">
              <i class="material-icons">local_hospital</i> Hospitals
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout_page.php" target="_blank">
              <i class="material-icons">directions_walk</i> Logout
            </a>
          </li>   
        </ul>
      </div>
    </div>
  </nav>
  


  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://wallpaperaccess.com/full/340597.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="title">Your appointment has been booked successfully </h3>
          <h5>You can view your appointments in your profile </h3>
          <br>
          <a href="">
              <button class="btn btn-round">
            <i class="material-icons" >home</i>Go to Home
          </button></a>
        </div>
      </div>
    </div>
  </div>

  
  
  <footer class="footer footer-default">
    <div class="container">
            <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>
      </div>
    </div>
  
  
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>