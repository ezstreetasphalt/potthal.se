<?php 
  include_once('path.php');
  /******************************
  With this we include the path 
  to address files and other 
  elements. 
  Update this path and the entire 
  site will be updated.
  
  Always include this file at the 
  top of every page.
  *******************************/

?>

<?php
ob_start();
$path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
$path .= "_/partial/head.html";
include_once($path);
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Potthålslagning | Uppfartslagning | Asfalt som potthålsreparation",$buffer);
$buffer=str_replace("%DESCRIPTION%","Använd EZ Street® för att fylla potthål.  Reparera din uppfart enkelt med den här asfaltblandningen för permanenta lagningar i asfalt eller betong.",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål uppfart reparation permanent asfalt potthål lagning betong",$buffer);
echo $buffer;
?>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>


    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('_/img/slider/Sweeden-Drivethru-Potholes-2009-04-003.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h1><span  class="carousel-caption-title">Guaranteed Permanent Repairs</span></h1>
                    <h3>Do the job once. Dust off. Move on.</h3>
                </div> -->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('_/img/slider/Sweeden-Drivethru-Potholes-2009-04-005.jpg');"></div>
                <!-- <div class="carousel-caption">
                    <h1><span  class="carousel-caption-title">Guaranteed Permanent Repairs</span></h1>
                    <h3>Do the job once. Dust off. Move on.</h3>
                </div> -->
            </div>
            <div class="item">
                    <div class="fill" style="background-image:url('_/img/slider/Sweeden-Drivethru-Potholes-2009-04-010.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h1><span  class="carousel-caption-title">Guaranteed Permanent Repairs</span></h1>
                        <h3>Do the job once. Dust off. Move on.</h3>
                    </div> -->
                </div>
            <div class="item">
                    <div class="fill" style="background-image:url('_/img/slider/Sweeden-Drivethru-Potholes-2009-04-012.jpg');"></div>
                    <!-- <div class="carousel-caption">
                        <h1><span  class="carousel-caption-title">Guaranteed Permanent Repairs</span></h1>
                        <h3>Do the job once. Dust off. Move on.</h3>
                    </div> -->
                </div>
            </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="section  text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Har du potthål i uppfarten till ditt hus?</h1>
                    <p>Det händer att något låter för bra för att vara sant. Men i EZ Streets fall är verkligheten inte bara bra, den är bäst. Du behöver bara sopa ur hålet, lägga i asfaltblandningen, packa den och gå därifrån.</p>

                    <h1>Lagning av potthål</h1>
                    <p>EZ Street® är svaret när du behöver reparera din uppfart. Laga potthålen på några minuter.</p>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>


    <div class="section  text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="install-video" type="button" class="btn btn-success btn-lg"><i class="fa fa-play"></i> Instruktionsvideo 'Webbvideo' - SA LAGAR DU ETT POTTHAL</a>
                </div>
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section  text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="lead">Det idealiska svaret på alla problem med potthål.</p>
                </div>
            </div>
            <!-- /.row -->
            

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->


<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
