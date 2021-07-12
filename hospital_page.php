<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">

<head>
  <title>Hospital Tracker Madurai City</title>
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

<body>
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home_page.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="profile_page.php" >
              <i class="material-icons">person</i>  <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >
              <i class="material-icons">local_hospital</i> Hospitals
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout_page.php" >
              <i class="material-icons">directions_walk</i> Logout
            </a>
          </li>   
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');">
    <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="brand text-center">
              <h1 class='title text-center'>Hospital List</h1>
              <h4><i>Make ypur Appointments..</i></h4>
            </div>
          </div>
        </div>
      </div>
</div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Hospital</th>
                <th scope="col">Contact</th>
                <th scope="col">Make an Appointment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Vadamalayan Hospitals</td>
                <td> 0452 254 5400</td>
                <td><button class='btn'><a href="vadamalayan_page.php" style="color:white;">Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Sri Selvi Health Clinic</td>
                <td>99423 62310</td>
                <td><button class='btn'><a href="appointment_page.php" style="color:white;">Book Appointment</a></button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Grace Kennett Hospital</td>
                <td>0452 260 1849</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Apollo Hospitals</td>
                <td>0452 258 0892</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Devdoss Hospital</td>
                <td>0452 452 1000</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Aristo Hospital</td>
                <td>0452 420 0788</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Govt. Rajaji Hospital</td>
                <td>NA</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Keerthi Hospital</td>
                <td>0452 435 2121</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>BGM Hospital</td>
                <td>0452 4268211</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>NTC HOSPITALS </td>
                <td>0452-2660064</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Lakshmana Hospitals</td>
                <td>0452 237 1369</td>
                <td><button class='btn'>Book Appointment</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
           <a href="#"> Know more about Us..</a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by Anandhalakshmi and Cathe.
      </div>
    </div>
  </footer>
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="../assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();
      // Sliders Init
      materialKit.initSliders();
    });
    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>