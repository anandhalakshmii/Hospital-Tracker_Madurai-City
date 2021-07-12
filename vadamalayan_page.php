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

<body class="landing-page sidebar-collapse">
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
            <a href="#" class="nav-link">
              <i class="material-icons">home_repair_service</i> Vadamalayan Hospitals
            </a>
          </li>
          <li class="nav-item">
            <a href="profile_page.php" class="nav-link">
              <i class="material-icons">person</i> <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a href="#department" class="nav-link">
              <i class="material-icons">local_hospital</i> Departments
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="material-icons">directions_walk</i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://www.vadamalayan.org/wp-content/uploads/2015/09/img-banner4.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Vadamalayan Hospitals.</h1>
          <h4> 15/1 Chockikulam, <br>Vallabh Bhai Rd, <br>Madurai, Tamil Nadu 625002</h4>
          <br>
          <span class="badge badge-success">Open 24 hours</span><br><br>
          <button class="btn btn-warning btn-round">COVID-19 Alert</button> <br>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">About US</h2>
            <h5 class="description">Ours is a multi-specialty, tertiary care hospital extending quality health care service to people in and around Madurai for the past half a century. Founded by Dr.P.Vadamalayan in 1957</h5>
            <h5 class= "description">
            OUR MISSION : To be the Hospital of Choice in providing the highest Quality health care services to all sectors of the society
            </h5>
          </div>
        </div>
        <!--Maps-->
<div class="text-center">
  <h2 class="title">Location of the Hospital</h2>
  <iframe src="https://www.atlistmaps.com/map/e79a5757-9b24-4bc5-a224-2bce8824bf54?share=true" allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>
<!--END OF MAPS-->
      <div class="section text-center" id="department">
        <h2 class="title">Our Departments</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="https://images.unsplash.com/photo-1551601651-05a4836d25c2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8aW5qZWN0aW9uJTIwdHJlYXRtZW50fGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Anestheology
                    <br>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Well researched anesthetic drugs with minimum disturbance on the body systems and maximum safety and comfort for the patients are provided thereby ensuring minimum ICU and hospital stay.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="https://media.istockphoto.com/vectors/anatomical-heart-isolated-heart-diagnostic-center-sign-human-heart-vector-id1177145926?k=6&m=1177145926&s=612x612&w=0&h=S8dYpLRWZ7M2pHNh2Z0mxbiZeQYvtvWKlmIN03qcsKE=" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Cardiology
                    <br>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">Our hi-tech cardiology department, comprising a sophisticated ICCU, cath lab and state-of-the-art Cardio thoracic and vascular surgical theatre provides diagnostic and treatment service.
</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="https://i.guim.co.uk/img/media/dd1c5839c092779b159adb9626469b81b2c23001/0_134_8000_4800/master/8000.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=643972d3da8b24c5ec685de531868c1e" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Neurology
                    <br>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">EEG, Sleep lab, CT, ScanDoppler studies, NCS, EMG, Evoke potential studies are the various diagnaostic facilities available with us.Also we have far and wide experice in treating efficiently.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://urbachpediatricdentistry.com/wp-content/uploads/2018/02/emergency-dental-services.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Dentistry
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">Full-fledged dental unit which comprises Intra oral, camera, LCD monitors, LCR(Light cure restoration) units are available with us in order to treat all kinds of dental Issues in the best way.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="data:image/jpeg;base64,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" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Dermatology
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">Expertise in clinical dermatology, diverse areas of dermatologyRadiofrequency, electrosurgical procedures for warts, cutaneous tags, moles etc., along with various modern features available with us.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://medlineplus.gov/images/Hyperglycemia.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Diabetology
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">A major manifestations of Diabetes is the Diabetic Foot.“For every 21 seconds someone is diagnosed with Diabetes and for every 30 seconds a leg is lost to Diabetes”. A preventive measure, DFCU is launched.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZsHQlwX3BFYBZO7Wl6uiJPOLs8PVdBv6HOMZLjGHKHUji1PeAiNBggPi6kRpFHW5Gizs&usqp=CAU" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Orthopaedics
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">Traumatic problems in the form of domestic falls, two wheeler and pedestrian accidents happening within the city limits and high velocity road traffic accidents on the highways are treated very efficiently.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://content.jdmagicbox.com/comp/mahabubnagar/i6/9999p8542.8542.170425140951.y7i6/catalogue/sri-sai-multi-speciality-clinic-shadnagar-mahabubnagar-dermatologists-i3g9h-250.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">E.N.T
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">Any type of ear, nose and throat disorders are treated very effectively utilizing modern equipments like operating microscope and nasal endoscope.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://www.verywellfamily.com/thmb/k42sm388dQVR-wnRUNW8VMtmS08=/1416x1416/smart/filters:no_upscale()/GettyImages-536907307-573102615f9b58c34cd1b66d.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Paediatrics
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">Neonatal ICU,Neonatal Ventilator, Neonatal Oscillatory Ventilator, Giraffe WarmerNeo-natal C-PAPNeonatal exchange transfusion, Double sided phototherapy, Oxygen hoods available  with us.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://mk0eastsideobcoi8tu4.kinstacdn.com/wp-content/uploads/2020/04/obstetrician-kirkland-wa.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Gynaecology
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description"> A Hi-tech labor ward with all life support systems and well equipped OT with efficient staff to treat high risk obstetric cases. CTG to monitor antipartum & intra partum foetal well being.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://images1-fabric.practo.com/dr-sachin-kaushik-s-mindpeace-psychiatry-deaddiction-clinic-panchkula-1461255014-5718fb66e8a64.jpg" alt="" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Neuro Psychiatry
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">HypnotherapyNarcoanalysisPsychotherapy which comprises both Supportive psychotherapy and Interpersonal Psychotherapy are the various adavanced treatment modalities available with us.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="https://www.gleneagles.com.my/ResourcePackages/Gleneagles/assets/dist/images/accident-emergency/AccidentEmergency/accident_and_emergency_img01.jpg?ts=1" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">Accident and Emergency
                        <br>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">We are the pioneers in modern day emergency care. Providing international standard care in the field of Emergency and Trauma care 24 hours x 365 days for faster recoveries.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>                                              
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised"><a href="appointment_page.php" style="color:white;">
                    Make an Appointment</a>
                  </button>
                </div>
            </div>
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


