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
$buffer=str_replace("%TITLE%","Fråga experterna på potthålslagning",$buffer);
$buffer=str_replace("%DESCRIPTION%","Hitta svaren på dina frågor så att du enkelt kan använda asfaltblandningen där du vill ha den.  Läs vilka användningsområden produkten har och när du kan försegla ytan.",$buffer);
$buffer=str_replace("%KEYWORDS%","kall asfalt användning",$buffer);
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
            <h1>Faq</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $subPath; ?>">Hem</a>
                </li>
                <li class="active">Faq</li>
            </ol>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12">

          <h1 style="word-break: break-all;">Fråga Experterna på Potthålslagning</h1>

          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Vad behövs för jobbet?</h3>
          <p>En man (eller kvinna), en skyffel, kanske en kvast och ett par handskar, en stamp eller annat verktyg att packa asfalten med (bräda eller liknande).</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Blir det svarta spår av asfalten på min dyra Burberry-matta?</h3>
          <p>  Det är möjligt. Men som regel fastnar inte EZ Street på rena skyfflar, rena skor osv. Men var försiktig. Vid höga temperaturer blir asfaltblandningen mer lättflytande och EZ Streets flytande beståndsdelar klibbar mer. Så för säkerhets skull kontrollerar du skorna utanför dörren.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Går det att försegla EZ Street, och hur länge ska jag i så fall vänta innan jag gör det?</h3>
          <p>  Våra kunder är överens om följande: förutsatt att du förseglar ytan med ett medel av hög kvalitet och väntar minst 30 dagar innan du gör det, går det bra att försegla EZ Street.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Varför är det svart?</h3>
          <p>  Asfalt finns i 3 färger: svart, svart och svart. Skämt åsido, asfaltens färg kommer från produktens flytande beståndsdelar.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Vad innehåller EZ Street?</h3>
          <p>  Ingredienser av högsta kvalitet: sten och sand i väl avvägda storlekar och vår egen beredning av polymerer (de hemliga ingredienserna).</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Om jag får EZ Street på händerna, hur tar jag bort det?</h3>
          <p>Vi kan rekommendera Permatex Fast Orange.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Finns EZ Street överallt?</h3>
          <p>  Vi skulle vilja att det var så. Rekommendera det gärna till dina vänner och alla du träffar på middagar och sportarrangemang. Vi distribuerar det över hela landet, till många återförsäljare av byggmaterial. Du får en aktuell lista över återförsäljare om du klickar på den här länken: <font class="bodylinks11"><a href="where.htm">Var finns det?</a></font></p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Varför säljs EZ Street i plastsäckar och inte i hinkar?</h3>
          <p>  Vi gör vårt bästa för att ge vårt bidrag till en hållbar utveckling. På vissa marknader i världen kan du hitta EZ Street i andra förpackningar, men i allmänhet föredrar vi de här flexibla säckarna eftersom de a) är lämpligast för längre tids lagring b) är lätta att bära och c) tar minst utrymme i avfallshanteringen.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Kan det användas i ett potthål som är fullt av vatten?</h3>
          <p>  Absolut. Att fylla EZ Street i ett potthål med vatten ger bättre resultat än om hålet är torrt men innehåller en massa damm.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Ska jag rengöra potthålet innan jag fyller det med EZ Street?</h3>
          <p>  Försök få bort så mycket som möjligt av det som är löst – ju bättre du rengör det desto bättre blir resultatet.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Kommer asfaltblandningen att sjunka ihop när den ligger på plats, och vad gör jag i så fall?</h3>
          <p>Bra fråga, och svaret är ”ja”. När du fyller ett potthål eller gör en annan reparation med EZ Street är det bäst om du lämnar en liten ”kulle” som så småningom kommer att packas ihop. Hur mycket? Det beror på hur stort hålet är från början och hur mycket tryck materialet utsätts för i efterhand (på grund av biltrafik osv.) Ju mer tryck i efterhand, desto mer sjunker det. Som tumregel kan man utgå ifrån att ”kullen” ska vara 6-7 mm. Men det här är ett minimalt problem, för om du upptäcker att ytan har sjunkit mer än du räknade med kan du alltid lägga på lite till.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Hur länge kan EZ Street förvaras i säcken?</h3>
          <p>  Ett år. Men skjut inte upp projektet i onödan...</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Kan EZ Street användas på betong?</h3>
          <p>  Ja, det fäster på betong, tegel och en rad andra material.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Ibland tycks materialet vara mjukt, när jag har lagat ett hål. Är det något fel?</h3>
          <p>Nej, vanligtvis inte. Asfaltkomponenten i EZ Street är en trögflytande vätska, som reagerar ganska intressant på temperaturförändringar. Om det är en brännhet sommardag och du absolut vill göra en lagning kanske du upptäcker efteråt att materialet verkar alltför löst. Det kan åtgärdas genom att du sprider lite torrt cementpulver över den lagade ytan.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Hur många säckar behövs till ett potthål?</h3>
          <p>  Bra fråga. Under de 12 år vi varit i branschen har vi sett allt från potthål som skulle rymma en villa för fyra plus en gäststuga (dvs. en massa säckar med EZ Street) till små gropar som efter ett missat slag med en golfklubba, där det skulle räcka med något hekto. Därför har vi gjort en ”easy” <a href="<?php echo $subPath; ?>how-much">förbrukningstabell</a> som hjälper dig att uppskatta åtgången.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Kan jag få hjälp med det här per telefon?</h3>
          <p>  Du kan alltid ringa oss på vår bekostnad (och kundtjänsten finns i USA). Vi hjälper till efter bästa förmåga, och vi kommer säkert att be dig skriva ett rekommendationsbrev till oss när du har använt produkten och är nöjd med den. Ring gärna – vi ser fram mot det. </p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Hur många potthål finns det i vägarna?</h3>
          <p>  Ojdå, vem skrev den frågan? Vi har hört att det kan finnas över 32 miljoner potthål i vägarna vid varje givet tillfälle. Och det är många.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Vad är asfalt?</h3>
          <p>Asfalt innehåller några av de mest komplexa kolvätena som finns. Den framställs vid raffinering av råolja och är en av de sista produkterna man får ut. Därför säger man ofta att den kommer ”från botten av tunnan”.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Hur får jag en säck som gratisprov?</h3>
          <p>  Det går inte. Du betalar för säcken.</p>
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Kan man få lite kringfakta?</h3>
          <p>  Gärna. EZ Streets hemsida får besök från praktiskt taget alla länder på jorden (över 180), nästan varje dag. Vi har hjälpt till att laga potthål i Afghanistan och Irak. EZ Street har utnämnts till en produkt som man ”måste ha” i tidskriften Popular Mechanics.</p>
          </div>

          <hr class="hr-squares hidden-xs">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
          <h3><span class="fa fa-arrow-circle-right"></span> Vilket är det kallaste klimat där EZ Street har använts?</h3>
          <p>  Vi har fått rapporter om att EZ Street har använts i Sibirien. Där ska det ju vara <em>väldigt</em> kallt. </p>
          </div>
            
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
