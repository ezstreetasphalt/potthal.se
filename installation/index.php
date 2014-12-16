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
$buffer=str_replace("%TITLE%","Så här lagar du ett potthål med EZ STREET® kall asfalt",$buffer);
$buffer=str_replace("%DESCRIPTION%","Sopa, fyll och packa – det är allt du behöver göra med den här asfaltblandningen.  Följ de enkla instruktionerna steg för steg eller titta på vår instruktionsvideo.",$buffer);
$buffer=str_replace("%KEYWORDS%","packa kall asfalt instruktion video instruktioner",$buffer);
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
            <h1>Hur lagar jag potthål med EZ Street?</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $subPath; ?>">Hem</a>
                </li>
                <li class="active">Installation</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <p>EZ Street är den perfekta lagningen för alla reparationer av uppfarter och andra asfaltytor. Blandningen är enkel att använda och lagningen blir garanterat permanent!</p>
            <a href="<?php echo $subPath; ?>/install-video">Se vår INSTRUKTIONSVIDEO</a>
            <hr>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            
            <h2>SOPA</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis ligula quis ex mattis ullamcorper eu ut sem.</p>
            <img src="<?php echo $subPath; ?>/_/img/entreprenor/sopa.jpg" class="img-responsive" alt="Sopa">

        </div>
    </div>
    <!-- /.row -->

     <div class="row">
        <div class="col-lg-12 col-md-12">

            <hr class="hr-squares">
            <h2>FYLL</h2>
            <p>iam interdum diam sed venenatis egestas. Curabitur eget arcu volutpat, gravida nisi a, ullamcorper mi.</p>
            <img src="<?php echo $subPath; ?>/_/img/entreprenor/fyll.jpg" class="img-responsive" alt="Fyll">

        </div>
    </div>
    <!-- /.row -->

     <div class="row">
        <div class="col-lg-12 col-md-12">

            <hr class="hr-squares">
            <h2>PACKA</h2>
            <p>Cras massa lectus, hendrerit eget cursus nec, ultricies id ante. Mauris pharetra ligula sed iaculis malesuada.</p>
            <img src="<?php echo $subPath; ?>/_/img/entreprenor/packa.jpg" class="img-responsive" alt="Packa">

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
