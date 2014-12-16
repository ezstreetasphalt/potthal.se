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
$buffer=str_replace("%TITLE%","Produktinformation | EZ Street New Zealand kall asfalt",$buffer);
$buffer=str_replace("%DESCRIPTION%","",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål reparation, asfalt reparation, produktinformation",$buffer);
echo $buffer;
?>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>

	<div class="container productlist">
		<div class="row">

            <div class="col-lg-12 remove-padding">
                <h1>Produktinformation</h1>
                <ol class="breadcrumb">
                    <li><a href="/mobile/">Hem</a></li>
                    <li class="active">Produkt</li>
                    <li class="active">Produktinformation</li>
                </ol>
            </div>

        </div>

		<?php
		  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
		  $path .= "_/partial/nav-product.html";
		  include_once($path);
		?>

	    <div class="row">
			<div class="col-lg-12 remove-padding">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p>Nullam ut lorem et urna ultrices tristique. Donec cursus dui vehicula, feugiat erat vitae, lacinia arcu. Duis in dolor eu urna commodo dignissim. Nam a pulvinar odio. Proin et sollicitudin lorem. Mauris vel justo a massa sodales sollicitudin. Nulla sit amet porttitor ex. Proin mollis dui non leo varius cursus. Nam eget hendrerit velit.</p>
				<p>Vivamus at tristique arcu, et scelerisque elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus non hendrerit nulla, sed interdum mi. Etiam ac urna felis. Vestibulum porta auctor risus quis placerat. Quisque luctus erat justo, vitae blandit elit sodales sodales. Donec fermentum nisl ex, id tristique nibh dictum non.</p>
				<p>Etiam sem justo, vulputate ullamcorper arcu mattis, tristique egestas mi. Fusce et libero consequat, placerat est vitae, pharetra purus. Vivamus suscipit ante in mauris convallis, eu cursus diam dignissim. Aenean ac nisl non mauris dignissim consectetur vel id tortor. Nunc bibendum vitae enim nec cursus. Quisque ultrices at nunc nec aliquam. Vivamus elementum, diam nec malesuada porta, felis diam dignissim nisl, id rutrum leo eros sed ipsum. Morbi aliquam metus vel lorem tempus, eu hendrerit est congue. Nullam pretium erat diam, vel dapibus est scelerisque non. Donec ultrices, purus eu sollicitudin placerat, ex massa vulputate nibh, in finibus libero felis et elit. Aliquam sit amet magna urna. Quisque non luctus mi, consequat luctus lectus. Maecenas finibus quis mauris id aliquet.</p>
                
            </div>
		</div>

    </div>
    <!-- /.container -->


<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>

<script>
  $(document).ready(function () {
        $('ul.nav > nav-pills > li').removeClass('active');
        $('.product-details').addClass('active');
    });
</script>