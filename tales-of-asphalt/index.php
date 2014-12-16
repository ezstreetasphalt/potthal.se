<?php 
  include_once('../path.php');
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
$buffer=str_replace("%TITLE%","Tales of asphalt",$buffer);
$buffer=str_replace("%DESCRIPTION%","EZ Street cold asphalt can be used for many applications: pothole repair, edge repairs, resurfacing, utility trenches, etc. ",$buffer);
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
                <h1 class="page-header">TALES OF ASPHALT
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li class="active">Tales Of Asphalt</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <a href="highway99">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/highway99.jpg">
                </a>
                <h3><a href="highway99">Highway 99 “grind & Pave” Resurfacing</a>
                    <p><small>Vancouver, British Columbia</small></p>
                </h3>
                <p>A major motorway, lots of cold, wet weather, and a bold challenge to 625 tonnes of custom-mixed EZ Street cold asphalt…</p>
            </div>

            <div class="col-md-6 portfolio-item">
                <a href="repairing-edges">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/repairing-edges.jpg">
                </a>
                <h3><a href="repairing-edges">Repairing Edges And Potholes In The Bush</a>
                    <p><small>Gingin, Western Australia</small></p>
                </h3>
                <p>The Principal Works Supervisor of a small agricultural community has big responsibilities—and a healthy skepticism that EZ Street cold asphalt can do the job…</p>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <a href="island-utility-trench">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/island-utility-trench.jpg">
                </a>
                <h3><a href="island-utility-trench">Voyage To A Remote Island Utility Trench</a>
                    <p><small>Hoonah, Alaska</small></p>
                </h3>
                <p>A remote island location, a challenging climate, and a project to keep children and old folks warm meets 66 tonnes of EZ Street cold asphalt…</p>
            </div>

            <div class="col-md-6 portfolio-item">
                <a href="golf-resort">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/golf-resort.jpg">
                </a>
                <h3><a href="golf-resort">Deteriorating Drive At A Luxury Golf Resort</a>
                    <p><small>Chipping Norton, Oxfordshire, UK</small></p>
                </h3>
                <p>Even luxury resort management prefers not to spend more than necessary—but is EZ Street asphalt up to the standards of a leading hotelier with a strong heritage and a high benchmark for excellence?</p>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6 portfolio-item">
                <a href="pothole-repair-supremacy">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/pothole-repair-supremacy.jpg">
                </a>
                <h3><a href="pothole-repair-supremacy">Pothole Repair Supremacy</a>
                    <p><small>From Labrador to British Columbia and points in between…</small></p>
                </h3>
                <p>Various towns across Canada vie for the dubious title of the nation’s Pothole Capitol—but can EZ Street change the final outcome in the taxpayer expenditure sweepstakes?</p>
            </div>

            <div class="col-md-6 portfolio-item">
                <a href="saves-one-municipality">
                    <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/saves-one-municipality.jpg">
                </a>
                <h3><a href="saves-one-municipality">Ez Street Asphalt Saves One Municipality More Than 70%</a>
                    <p><small>Columbia, Tennessee, USA</small></p>
                </h3>
                <p>In a US university study, a loyal EZ Street customer demonstrates an average cost savings of 72% over traditional hot mix asphalt.</p>
            </div>

        </div>

        <!-- <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div> -->

    </div>
    <!-- /.container -->

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
