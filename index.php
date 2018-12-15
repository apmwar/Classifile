<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Classifile | Android App Prototype</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="res/icons/icon.png" sizes="16x16 32x32" type="image/png">

    <!-- boostrap stylesheets -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		<!-- ajax and jquery dependencies -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!-- owl carousel css-->
    <link rel="stylesheet" href="res/css/owl.carousel.min.css">
    <link rel="stylesheet" href="res/css/owl.theme.default.min.css">

    <!-- owl carousel js-->
    <script src="res/js/owl.carousel.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Poppins" rel="stylesheet">

    <style>

      body {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 400vh;
        font-size: 15px;
        overflow-x: hidden;
      }

      .container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        margin-top: 15vh;
        padding-left: 100px;
        padding-right: 100px;
        max-width: 99vw;
      }

      .nav {
        position: absolute;
        top: 0;
        left: 0;
        height: 12vh;
        width: 100vw;
        background-color: black;
      }

      .sticky {
        position: fixed;
        top: -500px;
        left: 0;
        opacity: 0;
        height: 0vh;
        width: 100vw;
        background-color: #FFF;
        -webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.23);
        -moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.23);
        box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.23);
        z-index: 5;
      }

      .text {
        font-family: 'Roboto';
        font-size: 150%;
        line-height: 1.2;
      }

      .heading{
        font-family: 'Poppins';
        font-size: 300%;
        line-height: 1.2;
      }

      .subheading {
        font-family: 'Roboto';
        font-size: 200%;
        line-height: 1.2;
      }

      .featurepic {
        width: 90%;
        padding-left: 5%;
        padding-right: 5%;
        background-image: url("res/images/feature.png");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
      }

      .ficon {
        height: 100px;
        width: 100px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center center;
      }


      @media only screen and (max-width: 1200px) {

        body {
          font-size: 14px;
        }

        .container {
          padding-left: 50px;
          padding-right: 50px;
        }

      }

      @media only screen and (max-width: 769px) {

        body {
          /*overflow-x: visible;*/
          font-size: 13px;
        }

        .container {
          padding-left: 20px;
          padding-right: 20px;
        }


      }

      @media only screen and (max-width: 500px) {

        body {
          /*overflow-x: visible;*/
          font-size: 12px;

        }

        .container {
          padding-left: 15px;
          padding-right: 15px;
        }


      }


      }


    </style>


  </head>

  <body>

    <!-- Navbar Section -->
    <div class="nav">

    </div>
		<div class="sticky">
      <!-- Normal navbar -->

      <!-- Menu Button Navbar -->

    </div>

    <!-- Contents start here -->
    <div class="container">

      <!-- Home Page section -->
      <br><br><br>
      <div class="row">
        <div class="col-sm-8">
          <div class="heading"><strong>Redefining<br>Document Storage</strong></div><br>
          <div class="text">Classifile is an Android Application that helps you organise documents easily.</div><br><br>
        </div>

        <div class="col-sm-4">
          <div class="heading pad"><strong>Heading</strong></div><br>
          <div class="text pad">This is a description</div>
        </div>
      </div>

      <!-- Features Section -->
      <br><br><br>
      <div class="row">
        <div class="col-sm-12 text-center"><div class="heading"><strong>Features</strong></div></div><br><br>
      </div>

      <br><br><br>
      <div class="row">

        <!-- Left Side -->
        <div class="col-md-4">
          <div class="ficon" style="background-image: url('res/icons/f1.png');"></div>
          <div class="subheading pad"><strong>Feature 1</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
          <div class="subheading pad"><strong>Feature 2</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
          <div class="subheading pad"><strong>Feature 3</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
        </div>

        <!-- Middle Section -->
        <div class="col-md-4 featurepic"></div>

        <!-- Right Section-->
        <div class="col-md-4">
          <div class="subheading pad"><strong>Feature 4</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
          <div class="subheading pad"><strong>Feature 5</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
          <div class="subheading pad"><strong>Feature 6</strong></div><br>
          <div class="text pad">This is a description of some sorts. Isn't making websites fun??</div><br><br><br>
        </div>
      </div>




    </div>











		<script type="text/javascript">

			var isSticky = false;

			$(document).ready(function(){
				$(window).scroll(function(){
					var scroll = $(window).scrollTop();
					if(scroll > 100 && !isSticky) {

						$(".sticky").animate({
							top: "0",
							opacity: 1,
							height: "10vh",
						}, 300, function(){});

						isSticky = true;

					} else if(scroll <= 100 && isSticky) {
						$(".sticky").animate({
							top: "-500px",
							opacity: 0,
							height: "0vh",
						}, 500, function(){});

						isSticky = false;
					}
				});
			});



    </script>

  </body>

</html>
