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
$buffer=str_replace("%TITLE%","Potthålslagning",$buffer);
$buffer=str_replace("%DESCRIPTION%","Använd EZ Street® för att fylla potthål.",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål uppfart reparation permanent asfalt potthål lagning",$buffer);
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
        <div class="col-lg-12 col-md-12">
            
            <h1>Applications</h1>

            <p>EZ Street cold asphalt not only performs well over time. It's versatile and easy to install. For large jobs the product can be ordered in bulk - but for smaller applications, including around the home, it's smart to always have a bag of EZ Street cold asphalt nearby.</p>

            <ol>
               <li><strong>Potholes</strong> - This is the effective "throw-and-go" solution for pothole repair. A quick application of EZ Street cold patch to fix potholes can halt deterioration that would later threaten the road structure. </li>

               <li><strong>Overlays</strong> - Make this a one-step-only process, using EZ Street cold mix as a permanent solution for large deteriorating road sections, instead of an emergency cold overlay followed weeks later with hot mix.</li>

               <li><strong>Utility cuts</strong> - Because EZ Street patch installation enables high-quality, long-lasting repairs, utility company crews can do the repairs themselves (averting the need for highway crews' involvement). </li>

               <li><strong>Bridge work</strong> - Bridge approaches and the wearing courses around joints in bridges require flexibility. The undersurface of EZ Street cold asphalt provides a slight flex to accommodate this constant movement.</li>

               <li><strong>Pole reinstatements</strong> - Job time and money spent are minimized with EZ Street cold mix. </li>

               <li><strong>Kerb and channels</strong> - Gutter/kerb and other special asphalt areas (including breaks in concrete) are easily fixed with EZ Street cold asphalt.</li>

               <li><strong>Footpath trip hazards</strong> - Repair walkway pavement easily before there is an accident - and lawsuit. Fast installation and long-lasting repairs minimize path closures.</li>

               <li><strong>Driveway repair</strong> - Pavement deterioration at home can be easily fixed by do-it-yourself homeowners who use the simple EZ Street sweep-fill-compact method.</li>
            </ol>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
