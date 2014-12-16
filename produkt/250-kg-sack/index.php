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
$buffer=str_replace("%TITLE%","Produkten | EZ Street New Zealand kall asfal",$buffer);
$buffer=str_replace("%DESCRIPTION%","",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål reparation, asfalt reparation, produkten",$buffer);
echo $buffer;
?>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>

	<div class="container product">

		<div class="row">

            <div class="col-lg-12">
                <h1>Produkt</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $subPath; ?>">Hem</a></li>
                    <li class="active">Produkt</li>
                    <li class="active"><a href="<?php echo $subPath; ?>produkt/produktpresentation">Produktpresentation</a></li>
                    <li class="active">Namn</li>
                </ol>
            </div>

        </div>

		<!-- <div class="row visible-xs product-mobile">
			<div class="col-xs-12 text-center">
				<h2 class="product-title">250 kg Sack</h2>
				<div class="product-price">
					<span class="price">00.00</span>
				</div>
			</div>
		</div>	 -->
		<div class="row">
			<div class="col-sm-8">
				<img src="<?php echo $subPath; ?>_/img/produkt/grey.jpg" class="product-img img-responsive" alt="item">
				<img src="<?php echo $subPath; ?>_/img/produkt/grey.jpg" class="product-img img-responsive" alt="item">
				<img src="<?php echo $subPath; ?>_/img/produkt/grey.jpg" class="product-img img-responsive" alt="item">
			</div>
			<div class="col-sm-4">
				<h2 class="product-title hidden-xs">Namn</h2>
				<!-- <div class="product-price hidden-xs">
					<span class="price">000.00</span>
				</div> -->
				<div class="product-detail">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium erat quis nisi condimentum semper. Nullam congue malesuada magna volutpat condimentum. Nullam ullamcorper felis et risus tempus tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi mauris, porttitor vitae sem bibendum, accumsan faucibus nibh. Ut enim risus, eleifend eu mauris at, consequat aliquet ante. Nulla lacinia dictum diam vel elementum.</p>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->


<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
