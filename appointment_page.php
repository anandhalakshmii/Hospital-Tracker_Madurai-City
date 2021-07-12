<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
  $Email = $user_data['email']
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Make your Appointment
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
          Appointment Page </a>
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
            <a class="nav-link" href="profile_page.php" target="_blank">
              <i class="material-icons">person</i>  <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home_page.php" target="_blank">
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hospital_page.php" target="_blank">
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
          <h1 class="title">Make an Appointment with us :) </h1>
          <h4>Don't worry your information is safe with us</h4>
          <br>
        </div>
      </div>
    </div>
  </div>



  <div class="main main-raised">
    <div class="container">
        <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Please provide your information below.</h2>
            
            
            
            <form  action="appointment_page_insert.php" class="contact-form" method="POST">
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label><br>
                    <input type="email" name="email" class="form-control" value="<?php echo $user_data['email']; ?>" disabled="disabled">
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check form-check-radio">
                    <div class="form-group">
                      <label for="form-check-label">Gender</label>  <BR>                
                        <input  data-style="btn btn-link" type="radio" name="gender" value="m" required>Male
                        <input data-style="btn btn-link" type="radio" name="gender" value="f" required>Female
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Age</label>
                    <input type="number"  name="age" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Hospital</label>
                      <select class="form-control selectpicker" name="hospital" data-style="btn btn-link" id="exampleFormControlSelect1" required>
                      <option default>Select Hospital</option>
                      <option value="1001">Vadamalayan Hospitals, 625020</option>
                        <option value="1002">Sri Selvi Health Clinic, 625010</option>
                        <option value="1003">Devdoss Hospitals, 625007</option>
                        <option value="1004">Malar Hospitals, 625018</option>
                      </select>
                  </div>
                </div>
              </div>

              <BR>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Timings</label>
                      <select class="form-control selectpicker" name="timings" data-style="btn btn-link" id="exampleFormControlSelect1" required>
                      <option default>Select Timing</option>  
                      <option value="9">9AM-11AM</option>
                        <option value="11">11AM-1PM</option>
                        <option value="5">5PM-7PM</option>
                        <option value="7">7PM-9PM</option>
                      </select>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised" name="submit">
                    Book
                  </button>
                </div>
              </div>
            
            </form>
          
          
          
          </div>
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