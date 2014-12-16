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
$buffer=str_replace("%TITLE%","Repairing edges and potholes in the bush",$buffer);
$buffer=str_replace("%DESCRIPTION%","The principal works supervisor of a small agricultural community has big responsibilities — and a healthy skepticism that EZ Street cold asphalt can do the job…",$buffer);
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
                <h1 class="page-header">Repairing Edges And Potholes In The Bush
                    <p><small>Gingin, Western Australia</small></p>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a>
                    </li>
                    <li><a href="<?php echo $subPath; ?>tales-of-asphalt">Tales Of Asphalt</a>
                    </li>
                    <li class="active">Repairing Edges</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="<?php echo $subPath; ?>_/img/tales/repairing-edges.jpg">




            </div>

            <div class="col-md-12">
                <h1 class="page-title">The Principal Works Supervisor of a small agricultural community has big responsibilities — and a healthy skepticism that EZ Street cold asphalt can do the job…</h1 class="page-title">
                
                <p>Gingin is about 90 kilometres north of Perth. According to the 2006 census, the town’s population was 531. Gingin's economy is supported mainly by crops and livestock. At first glance, this is a typical rural area with minimal infrastructure requirements. But appearances can be deceiving. Roadways play a pivotal role in the economies of both the immediate and surrounding areas. Roadway maintenance is crucial.</p>
                <p>The town of Gingin is responsible for its own roads, and those of the surrounding Shire of Gingin. We’re talking about 3325 square kilometres of countryside with 410 kilometres of sealed roads. Besides supporting the town's own commercial transportation, the Shire of Gingin is home to the major highway for Western Australia’s Wheatbelt. It carries fertilizer to farms and crops from them. This trade accounts for two thirds of Australia’s wheat production and half its wool. </p>
                <p>Maintaining these roadways is a major responsibility. It carries implications for local residents, and for a vast population in the surrounding regions. The burden of this responsibility falls onto the shoulders of Joe Hodges, Principal Works Supervisor of Gingin. </p>
                <p>Initially, Joe was skeptical about the bold claims made of the EZ Street product. He doubted its permanence, its ability to be stockpiled, and its effectiveness in the presence of water.</p>
                <p>Turns out, the reality about those bold claims are the very reason that Joe now has a high regard for the product. EZ Street's performance held true in spades. Two years after first using it, Joe is a regular customer of EZ Street cold asphalt. He regularly orders 1-tonne bags in lots of 20. Recently, he had to catch up on a backlog of repair projects. He ordered 40 tonnes of EZ Street bulk. Beyond traditional pothole repairs, EZ Street's versatility makes it useful in various applications. One specific example of this is repairing a fault between a spray seal and a spray-sealed widening.</p>
                <p>Like so many regular customers of EZ Street asphalt, Joe remains happy and satisfied with the product for his road repairs. Thanks to EZ Street cold asphalt, the Shire of Gingin maintains optimal, passable farm-to-market roads. And Joe’s crew can make permanent repairs to those roads in any weather conditions. Like so many regular customers of EZ Street asphalt, Joe remains happy and satisfied with the product for his road repairs. Thanks to EZ Street cold asphalt, the Shire of Gingin maintains optimal, passable farm-to-market roads. And Joe’s crew can make permanent repairs to those roads in any weather conditions.</p>

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
