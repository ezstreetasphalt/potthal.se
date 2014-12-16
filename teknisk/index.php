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
        <div class="col-lg-12">
            <h1>Teknisk</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $subPath; ?>">Hem</a>
                </li>
                <li class="active">Teknisk</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            
            <h2>Allmän Produktbeskrivning Och Användning</h2>

            <p>EZ Street är en färdig att använda, hög prestanda, polymermodifierad, kall asfalt kan ge en kostnadseffektiv, enkel och permanent lösning för en mängd olika tillämpningar, inklusive men inte begränsat till gropar, skärsår allmännyttiga, gemensamma reparationer, yttre kant reparationer, yta fläckar (nivå kurs), och även små överlägg.</p>
			<p>EZ Street är som i utseende och prestanda till god varmblandad asfalt och kan användas i alla väder (regn eller solsken, varmt eller kallt). EZ Street har en förlängd lager livslängd med bibehållen utmärkt användbarhet. EZ Street kräver ingen klibbighet päls, kan användas för att patcha Både asfalt- och betongytor, och kan även appliceras i vatten!</p>
			<p>EZ Street kan öppnas för trafik Omedelbart gör den perfekt för dessa oundvikliga "kasta och gå" situationer. Om rätt installationsteknik utnyttjas, Ska EZ Street ha motsvarande program eller förlängt livslängden i jämförelse med varmblandad asfalt.</p>
			<p>Ladda ner vår produkt Säkerhetsdatablad:</p>
			<a href="http://www.ezstreetasphalt.com/_/pdf/ezstreet_msds.pdf" target="_blank" type="button" class="btn btn-danger btn-lg"><i class="fa fa-file-pdf-o fa-lg"></i> Ladda Ner MSDS</a>

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
