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
$buffer=str_replace("%TITLE%","Var kan jag få tag på EZ STREET® kall asfalt för lagning av potthål?",$buffer);
$buffer=str_replace("%DESCRIPTION%","Du kan köpa den hos olika byggmaterialfirmor.",$buffer);
$buffer=str_replace("%KEYWORDS%","kall asfalt potthål lagning infart reparation",$buffer);
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
                    <h1>Kontakt</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $subPath; ?>">Hem</a>
                        </li>
                        <li class="active">Kontakt</li>
                    </ol>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-12 col-md-12">

                  <h1>Var Kan Jag Få Det?</h1>
                  <p>Phone: 305-663-3090<br>
                  Fax: 305-663-0832<br>
                  Toll-free: 1-800-734-1476<br>
                  <a href="mailto:info@ezstreetasphalt.com">E-mail</a></p>
                    
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
