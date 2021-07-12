<?php 
session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">

<head>
<title>
    Profile Page
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

<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="home_page.php">
          Home </a>
        <button class="navbar-toggler toggled" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class=" nav-link" data-toggle="dropdown">
              <i class="material-icons">person</i>  <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hospital_page.php" >
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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://images.unsplash.com/photo-1611416517780-eff3a13b0359?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=904&q=80');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="https://www.kindpng.com/picc/m/163-1636340_user-avatar-icon-avatar-transparent-user-icon-png.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Hello, <?php echo $user_data['email']; ?></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
        <div class="title">
            <h3>Your Appointments</h3>
        </div>

            <?php
            $sql = "SELECT username,age,timings,hospital,hadmin.name,email FROM appointment JOIN hadmin on appointment.hospital = hadmin.hid";
            $result = $con->query($sql);
            $count=1;

            if ($result->num_rows > 0){
              while($row = $result->fetch_assoc()) 
              {
                if(strcmp($user_data['email'],$row["email"])===0){

                  if($row["timings"]== 9){
                    $time="9AM TO 11AM";
                  }
                  else if($row["timings"]== 11){
                    $time="11AM TO 1PM";
                  }
                  else if($row["timings"]== 5){
                    $time="5PM TO 7PM";
                  }
                  else{
                      $time="7PM TO 9PM";
                  }


                  echo "
                  <br><div class='card'>
                  <h5 class='card-header'>Appointment :".$count . "</h5>
                  <div class='card-body'>
                  <h5 class='card-title'> Name: " . $row["username"]."</h5>
                  <h5 class='card-title'> Hospital: " . $row["name"]."</h5>
                  <p class='card-text'>Age: " . $row["age"]."<br>Time of appointment: ". $time." </p>
                  </div></div>";
                  
                  ++$count;
                }
                else{
                  continue;
                }
              }
            }
            if($count ===1) 
            {
            echo "<h4>No Appointments Yet</h4>";
            }
            ?>


        </div>
        <br>
        <div class="row text-center">
        <div class="col-sm-8 col-md-5 mx-auto">
            <a href="logout_page.php" class="btn btn-primary btn-upgrade btn-lg" target="_blank">
              <i class="material-icons">logout</i> Logout?
            </a>
        </div>
        </div>
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