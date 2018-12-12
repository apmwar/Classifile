<!DOCTYPE html>
<html lang='en'>

  <head>
    <title>Classifile</title>
    <meta charset='utf-8'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- owl carousel css-->
    <link rel="stylesheet" href="res/css/owl.carousel.min.css">
    <link rel="stylesheet" href="res/css/owl.theme.default.min.css">

    <!-- animate.css-->
    <link rel="stylesheet" href="res/css/animate.css">

    <!-- owl carousel js-->
    <script src="res/js/owl.carousel.min.js"></script>


    <style>

      body {
        width: 100%;
        height: 100%;
        position: absolute;
      }

      .footer {
        background-color: black;
        width: 100vw;
      }

      .owl-carousel {
        background: url('res/images/frame.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
        width: 200px;
        height: auto;
        margin-left: 50%;
        left: -100px;
        padding: 20px 25px 20px 24px;
      }

    </style>


  </head>

  <body>

    <section class='footer'>
      <div class="">
        <h1>Hello, from Classifile!</html>
      </div>
    </section>

    <div class="owl-carousel">
      <img src="res/images/sc1.png" />
      <img src="res/images/sc2.png" />
      <img src="res/images/sc3.png" />
      <img src="res/images/sc4.png" />
      <img src="res/images/sc5.png" />
      <img src="res/images/sc6.png" />
      <img src="res/images/sc7.png" />
      <img src="res/images/sc8.png" />
      <img src="res/images/sc9.png" />
      <img src="res/images/sc10.png" />
    </div>

    <script type='text/javascript'>

      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout: 4000,
          autoplayHoverPause: true,
          lazyLoad: true,
          responsiveClass: true,
          center: true
        });

      });

    </script>

  </body>

</html>
