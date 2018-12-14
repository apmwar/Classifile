<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Classifile | Android App Prototype</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="res/icons/icon.png" sizes="16x16 32x32" type="image/png">

    <!-- boostrap stylesheets -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- bootstrap scripts-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rajdhani" rel="stylesheet">

    <style>

      body {
        width: 100%;
        height: 400%;
        position: absolute;
        overflow-x: hidden;
        top: 0;
        left: 0;
      }

      .text {
        font-family: 'Open Sans';
      }

      .heading {
        font-family: 'Rajdhani';
      }




      .navbar {
        height: 12vh;
        width: 100vw;
        position: fixed;
        left: 0;
        top: 0;
        background: red;
      }

      .sticky {
        position: fixed;
        background: black;
        height: 9vh;
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        animation-duration: 2s;
      }

      .nosticky {
        -webkit-animation-name: fadeOutUp;
        animation-name: fadeOutUp;
        animation-duration: 0.1s;
      }

      @media only screen and (max-width: 600px) {

        body {
          overflow-x: visible;
        }

        .navbar {
          height: 12%;
        }

      }


    </style>


  </head>

  <body>

    <div class="nav">hello</div>
		<div class="sticky">heelo</div>









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
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Classifile | Android App Prototype</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="res/icons/icon.png" sizes="16x16 32x32" type="image/png">

    <!-- boostrap stylesheets -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- bootstrap scripts-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Rajdhani" rel="stylesheet">

    <style>

      body {
        width: 100%;
        height: 400%;
        position: absolute;
        overflow-x: hidden;
        top: 0;
        left: 0;
      }

      .text {
        font-family: 'Open Sans';
      }

      .heading {
        font-family: 'Rajdhani';
      }




      .navbar {
        height: 12vh;
        width: 100vw;
        position: fixed;
        left: 0;
        top: 0;
        background: red;
      }

      .sticky {
        position: fixed;
        background: black;
        height: 9vh;
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        animation-duration: 2s;
      }

      .nosticky {
        -webkit-animation-name: fadeOutUp;
        animation-name: fadeOutUp;
        animation-duration: 0.1s;
      }

      @media only screen and (max-width: 600px) {

        body {
          overflow-x: visible;
        }

        .navbar {
          height: 12%;
        }

      }


    </style>


  </head>

  <body>

    <div class="nav">hello</div>
		<div class="sticky">heelo</div>









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
