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
$buffer=str_replace("%TITLE%","Pothole repair supremacy",$buffer);
$buffer=str_replace("%DESCRIPTION%","EZ Street cold asphalt has been used successfully in various nations throughout the Commonwealth. In Canada, EZ Street asphalt has been quite useful when the spring thaw brings a plethora of potholes.",$buffer);
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
                <h1 class="page-header">Pothole Repair Supremacy
                    <p><small>From Labrador to British Columbia and points in between…</small></p>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li><a href="<?php echo $subPath; ?>tales-of-asphalt">Tales Of Asphalt</a>
                    </li>
                    <li class="active">Pothole Repair Supremacy</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/pothole-repair-supremacy.jpg">




            </div>

            <div class="col-md-12">
                <h1 class="page-title">Various towns across Canada vie for the dubious title of the nation’s Pothole Capitol—but can EZ Street change the final outcome in the taxpayer expenditure sweepstakes?</h1 class="page-title">
                
               <p>EZ Street cold asphalt has been used successfully in various nations throughout the Commonwealth. In Canada, EZ Street asphalt has been quite useful when the spring thaw brings a plethora of potholes. </p>
                <p>Each year, tens of thousands of tonnes of patching materials and many millions of dollars in labour go into repairing potholes—only to see them return a year later. Millions are spent during a two- to three-month period. After that, thaw-related pavement integrity issues range well into the future.</p>
                <p>Most commonly, pothole repair material is either a standard or modified cold mix. These materials have strike and permanency success rates of perhaps 30%. This figure is up for debate around the industry. Depending on the situation, it can be higher—or significantly lower. </p>
                <p>This means that 70% of the time, a pothole requires at least one repeat visit. That means a minimum of 70% more patching material is utilised. In turn, that results in a 70% increase in labour and fleet costs in an effort to permanently repair a pothole.</p>
                <p>What if it were possible to reduce repeat repairs to potholes by 50%? That would mean a significant and immediate savings. And that’s not to mention the considerable long-term savings of better pavement integrity and fewer damage claims.</p>
                <p>The EZ Street product is a high-performance, polymer-modified cold asphalt. It is designed to exceed hot asphalt performance while offering the ease of using a cold mix. Application is quick and permanent. And one US university study shows EZ Street asphalt has the potential to reduce overall costs by more than 70%.* [LINK TO STUDY]</p>
                <p>EZ Street is used widely through various areas of Canada. Many municipalities have moved away from conventional cold mix products in favour of EZ Street asphalt. The superior performance and cost savings are significant. And now, the same cost-effective, labour-efficient EZ Street products are available across Scotland. To obtain a quote on your EZ Street project, <a href="#">click here</a>.</p>

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
