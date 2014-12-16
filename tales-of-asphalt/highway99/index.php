<?php 
  include_once('../../path.php');
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
$buffer=str_replace("%TITLE%","Highway 99 “Grind & Pave” resurfacing",$buffer);
$buffer=str_replace("%DESCRIPTION%","A major motorway, lots of cold, wet weather, and a bold challenge to 625 tonnes of custom-mixed EZ Street cold asphalt…",$buffer);
$buffer=str_replace("%KEYWORDS%","Tarmac repair, cold asphalt, road repair, utility trenches, pothole repair, pot hole repair, asphalt repair, pavement repair, driveway repair, street repair, pavement patch, no mixing, asphalt applications,",$buffer);
echo $buffer;
?>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Highway 99 “grind & Pave” Resurfacing
                    <p><small>Vancouver, British Columbia</small></p>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li><a href="<?php echo $subPath; ?>tales-of-asphalt">Tales Of Asphalt</a>
                    </li>
                    <li class="active">Highway 99</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/highway99.jpg">
                <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item">
                      <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                    </div>
                    <div class="item active">
                      <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                    </div>
                    <div class="item">
                      <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojMzMzO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div> -->



            </div>

            <div class="col-md-12">
                <h1 class="page-title">A major motorway, lots of cold, wet weather, and a bold challenge to 625 tonnes of custom-mixed EZ Street cold asphalt…</h1 class="page-title">
                <p>Here’s a hint of the challenge: reaching Hoonah, Alaska requires (a) an aircraft, or (b) navigating a waterway named Icy Straight.</p>
                <p>Hoonah is on an island approximately 50 kilometres west of Juneau, the state capital. Hoonah’s year-round population of 860 blossoms to 1300 in the summer. Approximately 50 kilometres east of Hoonah is the Pacific Ocean. The only way to reach Hoonah is by plane or boat. There is no bridge to the Alaska Marine Highway. </p>
                <p>In such a remote location, there are great logistical and financial challenges to generating electricity and heat. So it was welcome news when the Alaska Energy Authority/Rural Energy Group launched a project to improve Hoonah’s municipal heating system. The projected fuel savings would be 57,000 US gallons of diesel annually. However, the plan required building a generating plant, and running heat-recovery supply-and-return piping to a cluster of six municipal buildings. That meant burying a 10cm pipe in a utility trench that was almost 2,000 metres long and more than a metre wide. </p>
                <p>The nearest single asphalt plant is in Junneau, 50 kilometres away by boat. Even if hot asphalt mix could make that trip, the price would be prohibitive. So, how does it make sense to order asphalt from 1700 kilometres away?</p>
                <p>Because EZ Street cold asphalt is up to the voyage. </p>
                <p>The EZ Street product can be transported in shipping containers. It also offers a lengthy shelf life, uncompromised by cooling. It can be delivered, stored for months, and remain workable with plenty of time to get the job done. Lakeside Industries of Issaquah, Washington, working with CE2 Engineers, Inc. of Anchorage, Alaska, shipped 33 two-ton bulk sacks of EZ Street cold asphalt. The sacks traveled from Seattle to Hoonah via the Alaska Marine Line system, a commercial shipper.</p>
                <p>Defying both distance and climate, Hoonah used EZ Street cold asphalt to fill their epic trench. The new utility system includes hydroelectric power in off-hours to supplement diesel generators, serving municipal buildings that include a school, a gymnasium and pool, the town fire station, a senior center, senior apartments and a health clinic. The resulting efficiencies are projected to conserve 57,000 US gallons of fuel annually. </p>
                <p>Overnight, approximately 625 metric tonnes of EZ Street asphalt went into 5,700 square metres of new pavement.</p>
                <p>EZ Street asphalt is also lighter than conventional asphalt. It weighs approximately 2.2 metric tonnes per cubic metre (versus the standard 2.4 metric tonnes). As a result, the project required around 55 fewer tonnes of EZ Street asphalt than if they’d used conventional asphalt. Yet the paving process was performed almost identically. The same equipment. The same crew. </p>
                <p>This 625-tonne order of EZ Street asphalt was also produced days ahead of time. It was formulated with a higher kinematic viscosity than a normal maintenance mix. The repair was being performed on a motorway with high traffic volume. The goal was to provide a material that sets up faster than the standard EZ Street maintenance material, which is designed to have a much longer shelflife. </p>
                <p>The repairs went extremely well. The EZ Street cold asphalt was installed by an experienced paving crew. The final result is a smooth and very quiet road surface. Additionally, during wet weather, the new EZ Street surface proves to be significantly dryer than the surrounding, conventional asphalt. The open-graded surface and EZ Street’s water-shedding properties have noticeable benefits. </p>
                
                <div class="row spacetop20 spacebottom20">
                  <div class="col-lg-3 col-md-3 col-sm-3">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                      <!-- Standard button -->
                      <button type="button" class="btn btn-default btn-lg btn-block">Click Here For A Price Quote</button>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                  </div>
              </div>
              <!-- /.row -->

            </div>

        </div>

        <!-- <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-customer" src="http://placehold.it/500x300">
                </a>
            </div>

        </div> -->

    </div>
    <!-- /.container -->

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
