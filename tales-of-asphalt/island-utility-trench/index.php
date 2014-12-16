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
$buffer=str_replace("%TITLE%","Voyage to a remote island utility trench",$buffer);
$buffer=str_replace("%DESCRIPTION%","A remote island location, a challenging climate, and a project to keep children and old folks warm meets 66 tonnes of EZ Street cold asphalt…",$buffer);
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
                <h1 class="page-header">Voyage To A Remote Island Utility Trench
                    <p><small>Hoonah, Alaska</small></p>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li><a href="<?php echo $subPath; ?>tales-of-asphalt">Tales Of Asphalt</a>
                    </li>
                    <li class="active">Island Utility Trench</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/island-utility-trench.jpg">




            </div>

            <div class="col-md-12">
                <h1 class="page-title">A remote island location, a challenging climate, and a project to keep children and old folks warm meets 66 tonnes of EZ Street cold asphalt…</h1 class="page-title">
                
                <p>Here’s a hint of the challenge: reaching Hoonah, Alaska requires (a) an aircraft, or (b) navigating a waterway named Icy Straight.</p>
                <p>Hoonah is on an island approximately 50 kilometres west of Juneau, the state capital. Hoonah’s year-round population of 860 blossoms to 1300 in the summer. Approximately 50 kilometres east of Hoonah is the Pacific Ocean. The only way to reach Hoonah is by plane or boat. There is no bridge to the Alaska Marine Highway. </p>
                <p>In such a remote location, there are great logistical and financial challenges to generating electricity and heat. So it was welcome news when the Alaska Energy Authority/Rural Energy Group launched a project to improve Hoonah’s municipal heating system. The projected fuel savings would be 57,000 US gallons of diesel annually. However, the plan required building a generating plant, and running heat-recovery supply-and-return piping to a cluster of six municipal buildings. That meant burying a 10cm pipe in a utility trench that was almost 2,000 metres long and more than a metre wide. </p>
                <p>The nearest single asphalt plant is in Junneau, 50 kilometres away by boat. Even if hot asphalt mix could make that trip, the price would be prohibitive. So, how does it make sense to order asphalt from 1700 kilometres away?</p>
                <p>Because EZ Street cold asphalt is up to the voyage. </p>
                <p>The EZ Street product can be transported in shipping containers. It also offers a lengthy shelf life, uncompromised by cooling. It can be delivered, stored for months, and remain workable with plenty of time to get the job done. Lakeside Industries of Issaquah, Washington, working with CE2 Engineers, Inc. of Anchorage, Alaska, shipped 33 two-ton bulk sacks of EZ Street cold asphalt. The sacks traveled from Seattle to Hoonah via the Alaska Marine Line system, a commercial shipper.</p>
                <p>Defying both distance and climate, Hoonah used EZ Street cold asphalt to fill their epic trench. The new utility system includes hydroelectric power in off-hours to supplement diesel generators, serving municipal buildings that include a school, a gymnasium and pool, the town fire station, a senior center, senior apartments and a health clinic. The resulting efficiencies are projected to conserve 57,000 US gallons of fuel annually. </p>

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
