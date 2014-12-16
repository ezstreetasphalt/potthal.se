<?php 
  include_once('path.php');
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
$buffer=str_replace("%TITLE%","Potthålslagning | Uppfartslagning | Asfalt som potthålsreparation",$buffer);
$buffer=str_replace("%DESCRIPTION%","Använd EZ Street® för att fylla potthål.  Reparera din uppfart enkelt med den här asfaltblandningen för permanenta lagningar i asfalt eller betong.",$buffer);
$buffer=str_replace("%KEYWORDS%","potthål uppfart reparation permanent asfalt potthål lagning betong",$buffer);
echo $buffer;
?>

<style>
  p {
    margin: 4px;
    font-size: 16px;
    font-weight: bolder;
    cursor: pointer;
  }
  .blue {
    color: blue;
  }
  .highlight {
    background: yellow;
  }
  </style>

<body>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/nav-main.html";
  include_once($path);
?>


    <div class="section  text-center">

        <div class="container">

            <div class="row">
                
            <p class="blue">Click to toggle</p>
            <p class="blue highlight">highlight</p>
            <p class="blue">on these</p>
            <p class="blue">paragraphs</p>
             
            <script>
            $( "p" ).click(function() {
              $( this ).toggleClass( "highlight" );
            });
            </script>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>




<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>

