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
$buffer=str_replace("%TITLE%","EZ Street potthålslagning",$buffer);
$buffer=str_replace("%DESCRIPTION%","En enkel och rolig bruksanvisning. Följ Johnny från det att han väljer och köper EZ STREET kall asfalt hos den lokala återförsäljaren, tar hem materialet och lagar sitt potthål enligt instruktionerna.",$buffer);
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
                  <h1>Instruktions Video</h1>
                  <ol class="breadcrumb">
                      <li><a href="<?php echo $subPath; ?>">Hem</a>
                      </li>
                      <li class="active">Instruktions Video</li>
                  </ol>
              </div>
          </div>


            <div class="embed-responsive embed-responsive-16by9">
            <div class="flex-video widescreen"><iframe width="760" height="570" src="//www.youtube.com/embed/M6O3XrGLVy8" frameborder="0" allowfullscreen></iframe></div>
            </div>


      </div>
      <!-- /.container -->



<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
