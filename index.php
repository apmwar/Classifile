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

      .footer {
        background-color: black;
        width: 100vw;
      }

      .frame {
        height: 300px;
        width: 155px;
        background-color: transparent;
        margin-left: 50%;
        left: -77px;
        z-index: 3;
      }

      .owl-carousel {
        height: 300px;
        width: 155px;
        margin-left: 60%;
        left: -67px;
        margin-top: -300px;
        z-index: 2;
      }

    </style>


  </head>

  <body>

    <section class='footer'>
      <div class="">
        <h1>Hello, from Classifile!</html>
      </div>
    </section>

    <img src="res/images/frame.png" class="frame">

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

    <section class='footer'>

    </section>

    <script type='text/javascript'>

      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          margin: 20,
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
