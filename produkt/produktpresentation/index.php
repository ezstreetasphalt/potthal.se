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
$buffer=str_replace("%TITLE%","Produktpresentation | EZ Street New Zealand kall asfalt",$buffer);
$buffer=str_replace("%DESCRIPTION%","",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål reparation, asfalt reparation, produktpresentation",$buffer);
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
                <h1>Produktpresentation</h1>
                <ol class="breadcrumb">
                    <li><a href="/mobile/">Hem</a></li>
                    <li class="active">Produkt</li>
                    <li class="active">Produktpresentation</li>
                </ol>
            </div>

        </div>

		<?php
		  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
		  $path .= "_/partial/nav-product.html";
		  include_once($path);
		?>

	    <div class="row">
			<div class="col-sm-8">
				<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
					<img src="<?php echo $subPath; ?>_/img/produkt/vase_1a.jpg" class="img-responsive" alt="item">
					<span class="productlist-price-container">
						<span class="product-price">
							<!-- <span class="price">250 kg Sack</span> -->
							<span>250 kg Sack</span>
						</span>
					</span>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
					<img src="<?php echo $subPath; ?>_/img/produkt/vase_2a.jpg" class="img-responsive" alt="item">
					<span class="productlist-price-container">
						<span class="product-price">
							<!-- <span class="price">20 kg Round Bucket</span> -->
							<span>20 kg Round Bucket</span>
						</span>
					</span>
				</a>
			</div>
			<div class="col-sm-4">
				<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
					<img src="<?php echo $subPath; ?>_/img/produkt/vase_3a.jpg" class="img-responsive" alt="item">
					<span class="productlist-price-container">
						<span class="product-price">
							<!-- <span class="price">24.00</span> -->
							<span>15 kg Bag</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="row">
					<div class="col-sm-4 special">
						<div class="col-sm-12">
							<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
								<img src="<?php echo $subPath; ?>_/img/produkt/vase_4a.jpg" class="img-responsive" alt="item">
								<span class="productlist-price-container">
									<span class="product-price">
										<!-- <span class="price">16.00</span> -->
										<span>22 kg Bag</span>
									</span>
								</span>
							</a>
						</div>
						<!-- <div class="col-sm-12">
							<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
								<img src="<?php echo $subPath; ?>_/img/produkt/vase_5a.jpg" class="img-responsive" alt="item">
								<div class="productlist-label">
									<span class="sale-label">Sale</span>
								</div>
								<span class="productlist-price-container">
									<span class="product-price">
										<span class="price">54.00</span>
										<span>54.00</span>
										<span class="original-price">
											<span class="price">65.00</span>
										</span>
									</span>
								</span>
							</a>						
						</div> -->
					</div>
					<div class="col-sm-8">
						<a href="<?php echo $subPath; ?>produkt/250-kg-sack">
							<img src="<?php echo $subPath; ?>_/img/produkt/vase_6a.jpg" class="img-responsive" alt="item">
							<!-- <div class="productlist-label">
								<span class="sold-out-label">Sold Out</span>
							</div> -->
							<span class="productlist-price-container">
								<span class="product-price">
									<!-- <span class="price">38.00</span> -->
									<span>One Tonne Sack</span>
								</span>
							</span>
						</a>
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
        $('.product-presentation').addClass('active');
    });
</script>