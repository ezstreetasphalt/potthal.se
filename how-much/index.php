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
$buffer=str_replace("%TITLE%","EZ STreet förbrukningstabell - Hur mycket EZ Street behöver jag för att lagra ett potthål?",$buffer);
$buffer=str_replace("%DESCRIPTION%","Du kan lätt beräkna åtgången med hjälp av tabellen.",$buffer);
$buffer=str_replace("%KEYWORDS%","ez street, säckar lagning potthål åtgång",$buffer);
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
                    <h1>Hur mycket EZ Street behöver jag?</h1>
                    <small>
                      <ol class="breadcrumb">
                        <li><a href="<?php echo $subPath; ?>">Hem</a></li>
                        <li class="active">Hur mycket</li>
                      </ol>
                    </small>
                </div>
            </div>

           <p>En 15 kilos säck EZ Street räcker till knappt 1/3 kvm med 25 mm djup. En 22 kilos säck EZ Street räcker till knappt 1/2 kvm med 25 mm djup.</p>
           <hr>
                
            <div class="table-responsive" style="margin-top: 30px;">   
                    <table class="table table-striped table-bordered">
                      <tbody><tr class="success">
                        <th>15 KG SÄCK</th>
                        <th>22 KG SÄCK</th>
                        <th>HUR MYCKET EZ STREET BEHÖVER JAG (25 MM DJUP)</th>
                      </tr>
                      <tr>
                        <td>Knappt 1/3 kvm</td>
                        <td>Knappt 1/2 kvm</td>
                        <td><embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" /></td>
                      </tr>
                      <tr>
                        <td>1/2 kvm</td>
                        <td>1 kvm</td>
                        <td>
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                        </td>
                      </tr>
                      <tr>
                        <td>1 kvm</td>
                        <td>1,3 kvm</td>
                        <td>
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                        </td>
                      </tr>
                      <tr>
                        <td>1,5 kvm</td>
                        <td>2 kvm</td>
                        <td>
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                          <embed type="image/svg+xml" src="http://www.potthal.se/sweden/_/svg/ez-street-bag.svg"  width="37px" height="48px" />
                        </td>
                      </tr>
                    </tbody></table>
                  </div>



</div>
<!-- /.container -->


<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . $subPath;
  $path .= "_/partial/footer.html";
  include_once($path);
?>
