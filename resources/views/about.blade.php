<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BERILMU | ABOUT</title>
    <link rel="icon" href="http://berilmu-laravel.test/img/logoputih.png" type = "image/x-icon">
    <link rel="icon" href="http://127.0.0.1:8000/img/logoputih.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/about.css" rel="stylesheet" />
  </head>
  <body>

    @include('navbarsudahlogin')

    <div class ="container text-center">
        <img src="img/togaberilmu.png" alt="" style = "width: 50%; height: 20%; margin: 176px 0 176px;">
        <div class="card border border-0" style="background-color: #E4F5FF; border-radius: 60px;">
            <div class="card-body">
              <p class="Penjelasan">Berilmu merupakan sebuah website yang dibentuk oleh #SahabatBerbagi untuk memberikan kemudahan bagi para guru dan calon guru di seluruh Indonesia untuk dapat saling berbagi perangkat pembelajaran</p>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
          <!-- Section Heading-->
          <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h3 style="margin-top:80px;">#SahabatBerbagi</h3>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><img src="img/Farah.png" alt="" style="width:120%; border-radius:10px 10px 0 0;">
              <!-- Social Info-->
              <div class="social-info"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
              <h6>Farah</h6>
            </div>
          </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><img src="img/Najwa.jpeg" alt="" style="width:120%; border-radius:10px 10px 0 0;">
              <!-- Social Info-->
              <div class="social-info"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
              <h6>Najwa</h6>
          </div>
          </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><img src="img/Riria.jpg" alt="" style="width:120%; border-radius:10px 10px 0 0;">
              <!-- Social Info-->
              <div class="social-info"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
              <h6>Riria</h6>
            </div>
          </div>
        </div>
        <!-- Single Advisor-->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><img src="img/Thania.jpeg" alt="" style="width:120%; border-radius:10px 10px 0 0;">
              <!-- Social Info-->
              <div class="social-info"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
            </div>
            <!-- Team Details-->
            <div class="single_advisor_details_info">
              <h6>Thania</h6>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
    @include ('topbutton')

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>