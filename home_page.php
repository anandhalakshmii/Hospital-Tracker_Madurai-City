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
        <a class="navbar-brand" href="#">Home</a>
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
            <a href="profile_page.php" class="nav-link">
              <i class="material-icons">person</i> <?php echo $user_data['email']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a href="hospital_page.php" class="nav-link">
              <i class="material-icons">local_hospital</i> Hospitals
            </a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="material-icons">directions_walk</i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('https://cdn.kastatic.org/ka-perseus-images/a8a19d777ab5fee4a3666927202d88dcba7bd42c.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h2 class='title text-center'>Hospital Tracker Madurai City</h2>
            <h4><i>Leading you to better Life..</i></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Multi Speciality Hospitals with Covid Wards</h2>
          <!-- Carousel Card -->
          <div class="card card-raised card-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src=" https://a0.muscache.com/pictures/miso/Hosting-27318036-Amenities/original/a9fb8703-0a04-461d-aba7-ba2820a355d0.jpeg" width="200" height="500" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                     Grace Kennett Foundation Hospital, Madurai.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://www.vadamalayan.org/wp-content/uploads/2015/09/img-banner4.jpg" width="200" height="500" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3><a href="vadamalayan_page.php" style="color:white;">
                      <i class="material-icons">location_on</i>
                      Vadamalayan Hospital, Chockikulam.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://www.thehindu.com/news/cities/Madurai/9wru5d/article27947560.ece/alternates/FREE_615/MA15MDUGRH" width="200" height="500" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                     Government Rajaji Hospital, Alwarpuram.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images1-fabric.practo.com/practices/758131/apollo-hospital-madurai-59c51e5e7c695.jpg" width="200" height="500" alt="Fourth slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                     Apollo MultiSpeciality Hospital, KK Nagar.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="http://photos.wikimapia.org/p/00/04/17/92/42_big.jpg" width="200" height="500" alt="Fifth slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                     Devadoss MultiSpeciality Hospital, Alagar Kovil Main Rd.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://content3.jdmagicbox.com/comp/madurai/72/0452p452std3002572/catalogue/keerthi-hospitals-arasaradi-madurai-hospitals-068nxrbgmd.jpg?clr=253341" width="200" height="500" alt="Sixth slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                      Keerthi Hospital, Kalavasal.
                    </h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images.jdmagicbox.com/comp/madurai/f2/0452px452.x452.120710161852.f5f2/catalogue/aristo-speciality-hospital-kalavasal-madurai-dermatologists-4cmkh30.jpg?clr=" width="200" height="500" alt="Seventh slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>
                      <i class="material-icons">location_on</i>
                      Aristo Multi Speciality Hospital,Ponmeni. 
                    </h3>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- End Carousel Card -->
          <div class="text-center">
            <h2 class="title">Tweets from Health Organizations</h2>
          <!--TWEET-->
          <div class="container">
            <div class="row">
              <div class="col-lg-6-sm-12" style= "padding : 25px"  justify-items="end">
                <a class="twitter-timeline" data-width="500" data-height="500" href="https://twitter.com/WHO?ref_src=twsrc%5Etfw">Tweets by WHO</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <div class="col-lg-6-sm-12" padding="25px" >
                
              </div>
              <div class="col-lg-6-sm-12" style= "padding : 25px"  justify-items="end">
                <a class="twitter-timeline" data-width="500" data-height="500" href="https://twitter.com/ICMRDELHI?ref_src=twsrc%5Etfw">Tweets by ICMRDELHI</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
            </div>
            </div>
          <!--END OF TWEET-->
          <!--Maps-->
          <div class="text-center">
            <h2 class="title">Get Directions to Hospitals Near You..</h2>
            <iframe src="https://www.atlistmaps.com/map/d90c9e73-e85a-4d58-bca8-4bfbc587f276?share=true" allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
          </div>
          <!--END OF MAPS-->
          <!--PRECAUTIONS-->
          <div class="container">
            <h3 class="title text-center">Safety Precautions and Proper Masking</h3>
            <div class="row">
              <div class="col-lg-6-sm-12" style= "padding : 10px" justify-items="end">
                <img src="https://i.pinimg.com/originals/7c/7d/31/7c7d31397a28d47626e52aff1fa531fc.gif" width="450" height ="350" alt="Precautions" class="responsive">
              </div>
              <div class="col-lg-6-sm-12" style= "padding : 10px" justify-items="end">
                <img src="https://i.pinimg.com/564x/c2/3c/13/c23c137fcbc18f6956461ba5b5eac329.jpg" width="600" height ="350" alt="Precautions" class="responsive">
              </div>
            </div>
          
          <!--END OF PRECAUTIONS-->
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