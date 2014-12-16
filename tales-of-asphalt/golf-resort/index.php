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
$buffer=str_replace("%TITLE%","Deteriorating drive at a luxury golf resort",$buffer);
$buffer=str_replace("%DESCRIPTION%","Even luxury resort management prefers not to spend more than necessary—but is EZ Street asphalt up to the standards of a leading hotelier with a strong heritage and a high benchmark for excellence?",$buffer);
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
                <h1 class="page-header">Deteriorating Drive At A Luxury Golf Resort
                    <p><small>Chipping Norton, Oxfordshire, UK</small></p>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li><a href="<?php echo $subPath; ?>tales-of-asphalt">Tales Of Asphalt</a>
                    </li>
                    <li class="active">Deteriorating Drive</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/golf-resort.jpg">




            </div>

            <div class="col-md-12">
                <h1 class="page-title">Even luxury resort management prefers not to spend more than necessary—but is EZ Street asphalt up to the standards of a leading hotelier with a strong heritage and a high benchmark for excellence?</h1 class="page-title">
                
               <p>Heythrop Manor is a stately gem in the crown of the De Vere Resorts. Of course, stately-gem manors require stately maintenance. And one of the resort’s main thoroughfares was in a state of decline.</p>
                <p>Displeased with a contractor’s quote for the project, facility management company Firoka Group turned to the golf resort’s caretaker, Roger Bailey. He tackled the project using a load of EZ Street cold asphalt.</p>
                <p>Over a week in December, he repaired an area of 60 square metres at a depth of 50mm. The old, broken surface was removed. EZ Street cold asphalt was applied. The product was compacted with wacker plates and a roller. </p>
                <p>And the results? </p>
                <p>Impressive enough to fuel a desire for 100 more one-tonne sacks. They anticipate completely resurfacing the half-kilometre throroughfare. And since the Firoka Group manages approximately 100 other such properties throughout the UK, EZ Street asphalt could become part of many a holiday reveller’s drive throughout the country.</p>

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
